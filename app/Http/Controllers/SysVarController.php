<?php

namespace App\Http\Controllers;

use App\Logic\SysVar\SysVarLogic;
use App\Model\SysVar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SysVarController extends Controller
{
    private $sysVarLogic;
    public function __construct()
    {
        $this->sysVarLogic = new SysVarLogic();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sysVars= $this->sysVarLogic->GetAllPagination(10);
        $sysTypes = $this->sysVarLogic->GetTypes();

        return view('admin.sysVars.index', compact(['sysVars','sysTypes']));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function show(SysVar $sysVar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function edit(SysVar $sysVar)
    {
        //
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function editAsCards(SysVar $sysVar)
    {
        //
        $sysVars = $this->sysVarLogic->GetAll();
        $data = $sysVars->groupBy('type');

        return  view('admin.sysVars.editAsCards', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function updateAsCard(Request $request, SysVar $sysVar)
    {
        //
        // $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        foreach ($request->all() as $key => $value) {
            // $out->writeln(json_encode($key));
            if(!str_starts_with($key, 'value_'))
                continue;

            $data = explode('_',$key);
            if(count($data) != 3)
                continue;
            list($v,$lang, $id) = $data;

            $this->sysVarLogic->UpdateSysVarValue($id, $lang, $value);

            // $out->writeln('key:'.$key.', id:'.$id.', value:'.$value);
        }
        return redirect()->back()->with('success', trans('تم الحفظ بنجاح'));
        // return redirect('/pg-admin/sysVars_editAsCards');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SysVar $sysVar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SysVar  $sysVar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SysVar $sysVar)
    {
        //
    }
}
