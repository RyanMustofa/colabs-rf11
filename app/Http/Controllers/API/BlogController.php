<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    // create // update //delete // show // search blog
    public function index(Request $req, $id = false)
    {
        $title = $req->input('name');
        $slug = $req->input('slug');
        $content = $req->input('content');
        $category = $req->input('category');
        $limit = $req->input('limit',10);
        $blog = Blog::with(['Blog_Category', 'User'])->where(['status' => 'publish'])->first();
        if($title){
            $blog->where('title','like', '%' . $title . '%');  //berdasarkan judul
        }
        if($content){
            $blog->where('content','like', '%' . $content . '%'); //berdasarkan isi konten
        }
        if($category){
            $blog->where('blog_category_id','=', $category); //berdasarkan id Category
        }
        return JSONFormatter::success(
            $blog->paginate($limit) , 'Data Blog Berhasil diambil');
    }

    public function showAll()
    {
        // untuk semua blog, tidak peduli statusnya
      $data = Blog::with(['Blog_Category', 'User'])->paginate(10);
      if($data){
          return JSONFormatter::success($data, 'Seluruh Data Blog Berhasil Diambil');
        }else{
            return JSONFormatter::error(null, 'Data tidak Ditemukan', 4000);
      }

    }

    public function update(Request $req,$id=false)
    {
        $is_valid = Validator::make($req->all(), [
            'title' => 'required|min:1|max:255' , 
            'blog_category_id'=> 'required' , 
            'content'=> 'required' , 
            'cover' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048', 
            'status' => 'required', 
        ]);
        if($is_valid->fails()){
            return JSONFormatter::error($is_valid->errors(),'Kesalahan input data', 400);
        }
        if($id){
            $blog =  Blog::findOrfail($id);
            if($req->hasFile('cover')){
                if(file_exists($blog->cover)){
                    unlink($blog->cover);
                }
                $file = $req->file('cover'); 
                $cover = $file->move('images/blog/', time(). '-' . Str::limit(Str::slug($req->title), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
            }
            $_update = $blog->update([
                    'title' => $req->title, 
                    'user_id' => auth()->user()->id,
                    'blog_category_id'=> $req->blog_category_id, 
                    'content'=>  $req->content,
                    'cover' => !empty($cover) ? $cover : $blog->cover, 
                    'status' => $req->status,
                    'slug'=> Str::slug($req->title)
                ]);
            return JSONFormatter::success($_update, 'Data Postingan Berhasil Diperbarui');
        }else{
            return JSONFormatter::error(null, 'Data tidak Ditemukan',$id);
        }
        // update
    }

    public function store(Request $req)
    {
        $is_valid = Validator::make($req->all(), [
            'title' => 'required|min:1|max:255' , 
            'blog_category_id'=> 'required' , 
            'content'=> 'required' , 
            'cover' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', 
            'status' => 'required', 
        ]);
        if($is_valid->fails()){
            return JSONFormatter::error($is_valid->errors(),'Kesalahan input data', 400);
        }
        $file = $req->file('cover');
        $cover = $file->move('images/blog/', time(). '-' . Str::limit(Str::slug($req->title), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        $data = Blog::create([
                'title' => $req->title, 
                'user_id' => auth()->user()->id,
                'blog_category_id'=> $req->blog_category_id, 
                'content'=> $req->content, 
                'cover' => $cover, 
                'status' => $req->status,
                'slug'=> Str::slug($req->title)
            ]);
        return JSONFormatter::success($data, 'Data Postingan Berhasil Ditambahkan');
        // save
    }
       
    public function show($slug)
    {
        if($slug){
            $data = Blog::with(['Blog_Category', 'User'])->where(['slug' => $slug])->first();
            return JSONFormatter::success($data, 'Data Detail Postingan Berhasil Diambil');
        }else{
            return JSONFormatter::error(null,'Data Tidak Ditemukan', 400);
        }
    }
    
    public function destroy($id)
    {
        if($id){
            $blog = Blog::findOrfail($id);
            if(file_exists($blog->cover)){
                unlink($blog->cover);
                Blog::destroy($id);
            }
            return JSONFormatter::success(null, 'Data Detail Postingan Berhasil Dihapus');
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan',400);
        }
    }
}
