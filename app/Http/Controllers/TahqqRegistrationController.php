<?php

namespace App\Http\Controllers;

use App\Logic\APIClient\APIParameter\AddClientParameter;
use App\Logic\APIClient\WhmcsAPILogic;
use App\Logic\APIClient\WhmcsClientRegisterProgress;
use App\Model\TahqqRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Logic\SysVar\SysVarTypes;
use App\Logic\SysVar\SysVarLogic;
use App\Model\Menu;
use App\Logic\TahaqqSessionInfo;
use App\Model\Template;
use App\Model\TemplateCategory;
use Illuminate\Support\Facades\Redirect;

use function Symfony\Component\String\b;

class TahqqRegistrationController extends Controller
{
    private $sysVarLogic;
    private $whmcsAPILogic ;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sysVarLogic = new SysVarLogic();
        $this->whmcsAPILogic = new WhmcsAPILogic();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'firstname' => 'required',
            // 'lastname' => 'required',
            'email'=>'required',
            // 'phonenumber'=>'required',
            'password'=>'required',
            // 'confirmPassword'=>'required'
        ]);
        // if($request->password != $request->confirmPassword){
        //     return back()->withErrors(['كلمة المرور غير متطابقة']);
        // }

        $templateUrlParam = $request->templateUrlParam;
        //confirmPassword
        //
        $addClientParam = new AddClientParameter();

        $addClientParam->firstname = $request->firstname;
        // $addClientParam->lastname = $request->lastname;
        $addClientParam->email = $request->email;
        // $addClientParam->phonenumber = $request->phonenumber;
        $addClientParam->password2 = $request->password;


        // $addClientParam->companyname='';
        // $addClientParam->address1='';
        // $addClientParam->address2='';
        // $addClientParam->city='';
        // $addClientParam->state='';
        // $addClientParam->postcode='';
        // $addClientParam->country='';

        $addClientParam->groupid='1';//Test API Tahaqq
        $addClientParam->clientip=request()->ip();

        $result = $this->whmcsAPILogic->AddClient($addClientParam);

        if($result->result == "success")
        {
            $clientid = $result->clientid;
            if(!empty($templateUrlParam))
                $returnUrl = urlencode('/CompleteRegistrationFromTemplate?'.$templateUrlParam.'&returnUrl='.$request->getRequestUri());
            else
                $returnUrl= $request->getRequestUri();
            $msg = "تم انشاء حساب جديد بنجاح، قم بتسجيل الدخول ليتم اتمام حجز القالب.";
            return redirect('/TahqqLogin?newUserCreated=true&msg='.$msg.'&returnUrl='.$returnUrl);
        }
        else
            return back()->withErrors([$result->message]);
    }

    public function completeRegistrationFromTemplate(Request $request){
        //save project info
        $clientId = TahaqqSessionInfo::GetLoggedClientId();
        // $setClientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress() == WhmcsClientRegisterProgress::CompletePersonInfo;
        $templateId = $request->templateId;
        $planName = $request->planName;
        $template = Template::findOrFail($templateId);
        $category = TemplateCategory::findOrFail($template->category_id);

        $isSuccess = $this->whmcsAPILogic->SaveClientProjectInfo
        ($clientId, $template->name, $category->code ,'' ,true);

        // $clientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress();

        if(!$isSuccess)
            return back()->withErrors(['حدث خطأ اثناء حفظ بيانات المشروع.']);

        return $this->startNewToWhmcs($templateId, $planName, $request);
        //  return \redirect('/PlanSelected?selectedTemplateId='.$templateId.'&selectedPlanName='.$planName);
        // 'TahqqRegistrationController@StartNowToWhmcs'
        // return redirect()
        // ->action([TahqqRegistrationController::class,'StartNowToWhmcs'],
        //         ['selectedTemplateId'=>$templateId, 'selectedPlanName'=>$planName], 302, ['method'=>'post']);
        //save goto domain

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $isNew = isset($request->a) && $request->a == "new";
        $paramTemplateId = $request->templateId;
        $paramPlanName = $request->planName;
        $paramPid = $request->pid;
        $paramGid = $request->gid;
        $paramReturnUrl = $request->returnUrl;
        $templateUrlParam = '';
        $customLoginReturnUrl = null;
        if(!empty($paramTemplateId) && !empty($paramPlanName))
        {
            $templateUrlParam = 'templateId='.$paramTemplateId.'&planName='.$paramPlanName.'&pid='.$paramPid.'&gid='.$paramGid;//.'&returnUrl='.$paramReturnUrl
            $customLoginReturnUrl = urlencode('/CompleteRegistrationFromTemplate?'.$templateUrlParam);
        }
        if(!TahaqqSessionInfo::IsClientLogin() && !$isNew){
            return redirect('TahqqLogin?returnUrl='.$request->getRequestUri());
        }
        $lang = App::getLocale();
        $menus = Menu::get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        // if(TahaqqSessionInfo::GetIsClientHasOrder()){
        if(TahaqqSessionInfo::IsClientLogin() && $this->whmcsAPILogic->IsClientHasOrder(TahaqqSessionInfo::GetLoggedClientId())){
            return redirect('/GotoClientArea');
            // return view('TahqqRegistrationCompletedMsg',
            // compact(['menus','sysVarFooter','sysVarSocialMedia']));
        }

        $templateCategories = TemplateCategory::all();
        $clientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress();
        $templateCode = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetProjectCategory()??'';
        $categoryId = null;
        if(isset($templateCode) && !empty($templateCode)){
            $categoryId = TemplateCategory::where('code',$templateCode)->get()[0]->id??null;
        }

        $templateAll =Template::orderBy('id','desc')->get();
        return view('TahqqRegistrationNew',
                        compact(['menus','templateAll','sysVarFooter','sysVarSocialMedia',
                                 'templateCategories','clientRegisterProgress','categoryId','templateUrlParam','customLoginReturnUrl'])
                    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(TahqqRegistration $tahqqRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahqqRegistration $tahqqRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function SaveClientProjectInfo(Request $request)
    {
        $data = request()->validate([
            'projectName' => 'required',
            'projectCategory' => 'required',
            'projectDetails'=>'required'
        ]);

        $clientId = TahaqqSessionInfo::GetLoggedClientId();
        $setClientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress() == WhmcsClientRegisterProgress::CompletePersonInfo;
        $isSuccess = $this->whmcsAPILogic->SaveClientProjectInfo($clientId,$request->projectName,$request->projectCategory,$request->projectDetails,$setClientRegisterProgress);
        $clientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress();

        if($isSuccess)
            return back()//->with('success','تم الحفظ بنجاح')
            ->with('clientRegisterProgress', $clientRegisterProgress);
        else
            return back()->withErrors(['حدث خطأ اثناء حفظ بيانات المشروع.'])
            ->with('clientRegisterProgress', $clientRegisterProgress);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahqqRegistration $tahqqRegistration)
    {
        //
    }




       /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function loginView(Request $request)
    {
        $this->whmcsAPILogic->Logout();

        $returnUrl = '/';
        if(isset($request->returnUrl) && !empty($request->returnUrl))
            $returnUrl = $request->returnUrl;

        return view('login')
        ->with('returnUrl', $returnUrl)
        ->with('newUserCreated', $request->newUserCreated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = request()->validate([
            'username' => 'required',
            'password' => 'required'

        ]);
        $username = $request->username;
        $password = $request->password;

        $result = $this->whmcsAPILogic->Login($username,$password);
        if($result->isSuccess){
            // url()->previous()
            if($request->returnUrl != '/')
                return  redirect($request->returnUrl);

            if(TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress() != WhmcsClientRegisterProgress::Completed)
                return redirect('/TahqqRegistration');
            return redirect('/');
        }
        else{
            return back()->withErrors([$result->message]);
        }
            //
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->whmcsAPILogic->Logout();

        return redirect('/');
    }

    public function newregister()
    {
        $lang = App::getLocale();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        $clientRegisterProgress = TahaqqSessionInfo::GetLoggedClientDetailsObj()->GetClientRegisterProgress();
        $templateCategories = TemplateCategory::all();
        $categoryId = null;
        if(isset($templateCode) && !empty($templateCode)){
            $categoryId = TemplateCategory::where('code',$templateCode)->get()[0]->id??null;
        }
        return view('TahqqRegistrationNew', compact(['sysVarFooter','sysVarSocialMedia', 'clientRegisterProgress', 'templateCategories','categoryId']))
                ->with('menus', Menu::get());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function StartNowToWhmcs(Request $request)
    {
        // TahaqqSessionInfo::RemoveIsClientHasOrderFromSession();
        $data = request()->validate([
            'selectedTemplateId' => 'required',
            'selectedPlanName' => 'required'
        ]);

        $selectedTemplateId = $request->selectedTemplateId;
        $selectedPlanName = $request->selectedPlanName;

        return $this->startNewToWhmcs($selectedTemplateId, $selectedPlanName,$request);

        // return back()->withErrors(['invalid process']);
    }

    public function GotoClientArea(){
        if(!TahaqqSessionInfo::IsClientLogin())
            return back();
            // https://client.tahqq.com/clientarea.php
        $ssoResult = $this->whmcsAPILogic->CreateSsoToken(TahaqqSessionInfo::GetLoggedClientId(),null, null, null, null);
        if($ssoResult->isSuccess == true){
            return redirect($ssoResult->redirectUrl);
        }
        return back()->withErrors([json_encode($ssoResult)]);
    }

   private function startNewToWhmcs($selectedTemplateId, $selectedPlanName,$request)
   {
        $template = Template::findOrFail($selectedTemplateId);
        $pid = 0;
        $gid= $template->whmcs_gid;
        switch ($selectedPlanName) {
            case 'gould':
                $pid = $template->whmcs_gould_pid;
                break;
            case 'silver':
                    $pid = $template->whmcs_silver_pid;
                break;
            case 'bronze':
                    $pid = $template->whmcs_bronze_pid;
                break;
        }

        if(TahaqqSessionInfo::IsClientLogin()){
            $ssoResult =  $this->whmcsAPILogic->WhmcsDirectShoppingCartLink($pid);
            if($ssoResult->isSuccess == true){
                $lang = App::getLocale();
                $menus = Menu::get();
                $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
                $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
                return view ('redirectToWhmcsCart')
                        ->with('redirectUrl', $ssoResult->redirectUrl)
                        ->with('pid', $pid)
                        ->with('menus', $menus)
                        ->with('sysVarFooter',$sysVarFooter)
                        ->with('sysVarSocialMedia',$sysVarSocialMedia);
            }
            return back()->withErrors([json_encode($ssoResult)]);
        }else{
            return \redirect('/TahqqRegistration?a=new&templateId='.$template->id.'&planName='.$selectedPlanName.'&pid='.$pid.'&gid='.$gid.'&returnUrl='.$request->getRequestUri());
        }
    }
}
