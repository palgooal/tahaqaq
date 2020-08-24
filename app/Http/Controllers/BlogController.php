<?php

namespace App\Http\Controllers;

use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use App\Model\Blog;
use App\Model\Menu;
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
        return view('admin.blog.IndexBlog')->with('blogs', Blog::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.AddBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slug = Str::slug($request->Title_en ==null) ? Str::slug($request->Title_ar) : Str::slug($request->Title_en)  ;
        $blog = new Blog();
        $blog->Title_ar = $request->Title_ar;
        $blog->Title_en = $request->Title_en;
        $blog->Body_ar = $request->Body_ar;
        $blog->Body_en = $request->Body_en;
        $blog->image = $request->image;
        $blog->slug = $slug;
        $blog->Tags = $request->Tags;
        $blog->save();
        return back();
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

        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

       return view('SinglePost',compact(['sysVarFooter','sysVarSocialMedia']))
       ->with('blogs', Blog::where('slug', $slug)->first())
                                ->with('menus', Menu::get())    ;
    }

    public function Indexshow()
    {
        $lang = App::getLocale();

        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

        return view('blog',compact(['sysVarFooter','sysVarSocialMedia']))->with('blogs', Blog::get())
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
        return view('admin.blog.Editeblog')->with('blogs', Blog::find($id));
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
        $blog->Tags = $request->Tags;
        $blog->save();
        return redirect('/pg-admin/blogs');

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
}
