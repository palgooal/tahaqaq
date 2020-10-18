<?php

namespace App\Http\Controllers;

use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use App\Model\Blog;
use App\Model\Comments;
use App\Model\Menu;
use App\Model\Upload;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use function Ramsey\Uuid\v1;

class BlogController extends Controller
{
    private $sysVarLogic;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('admin.blog.IndexBlog')->with('blogs', Blog::orderBy('id','desc')->get())
        ->with('users', User::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.AddBlog')->with('users', User::get())->with('blogs', Blog::get());
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
            'Title_ar' => 'required',
            'Body_ar' => 'required',
            'image' => 'required',
            'Tags_ar' => 'required',
            'meta_Describe_ar' => 'required',
        ]);

        $slug = Str::slug($request->Title_en ==null) ? Str::slug($request->Title_ar) : Str::slug($request->Title_en)  ;
        $blog = new Blog();
        $blog->Title_ar = $request->Title_ar;
        $blog->Title_en = $request->Title_en;
        $blog->Body_ar = $request->Body_ar;
        $blog->Body_en = $request->Body_en;
        $blog->image = $request->image;
        $blog->slug = $slug;
        $blog->Tags_ar = $request->Tags_ar;
        $blog->Tags_en = $request->Tags_en;
        $blog->meta_Describe_ar = $request->meta_Describe_ar;
        $blog->meta_Describe_en = $request->meta_Describe_en;
        $blog->save();
        return redirect('/pg-admin/blogs')->with('success',trans('تم اضافة الصفحة بنجاح'))->with('errors',trans('تم اضافة الصفحة بنجاح'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lang = App::getLocale();
        $menus = Menu::get();
        $blog = Blog::where('slug', $slug)->first();
        $comments = Comments::where('blog_id','=',$blog->id)->get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

       return view('SinglePost',
       compact(['sysVarFooter','sysVarSocialMedia', 'menus','comments']))
       ->with('blogs', $blog)
       ->with('blogers',Blog::orderBy('created_at','DESC')->get());
    }

    public function Indexshow()
    {
        $lang = App::getLocale();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

        return view('blog',compact(['sysVarFooter','sysVarSocialMedia']))->with('blogs', Blog::orderBy('created_at','DESC')->paginate(10))
        ->with('menus', Menu::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.blog.EditeBlog')->with('blogs', Blog::find($id))
        ->with('users', User::get())
        ->with('uploads', Upload::orderBy('id','desc')->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->Title_en ==null) ? Str::slug($request->Title_ar) : Str::slug($request->Title_en)  ;
        $blog = Blog::find($id);
        $blog->Title_ar = $request->Title_ar;
        $blog->Title_en = $request->Title_en;
        $blog->Body_ar = $request->Body_ar;
        $blog->Body_en = $request->Body_en;
        $blog->image = $request->image;
        $blog->slug = $slug;
        $blog->Tags_ar = $request->Tags_ar;
        $blog->Tags_en = $request->Tags_en;
        $blog->meta_Describe_ar = $request->meta_Describe_ar;
        $blog->meta_Describe_en = $request->meta_Describe_en;
        $blog->save();
        return redirect('/pg-admin/blogs')->with('success',trans('تم تعديل بنجاح'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = Blog::findOrFail($request->blog_id);
        $blog->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }


    public function pinToSlider(Request $request ,$id){
        // $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln(json_encode('ok-'.$id));

        $blog = Blog::findOrFail($id);
        $blog->pin_to_slider = !$blog->pin_to_slider;
        $blog->save();

        return response('ok', 200)->header('Content-Type', 'text/plain');
    }
}
