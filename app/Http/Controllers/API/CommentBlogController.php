<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommentBlog;

class CommentBlogController extends Controller
{
    public function index($id = false)
    {
        if($id){
            $data = CommentBlog::findOrfail($id);
            return JSONFormatter::success($data,"success find data");
        }else{
            $data = CommentBlog::with(['blog'])->paginate(10);
            return JSONFormatter::success($data,"success fetch all data");
        }
    }
    public function save(Request $req,$id = false)
    {
        if($id){
            $data = CommentBlog::where(['id' => $id])->update([
                'blog_id' => $req->input('blog_id'),
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'comment' => $req->input('comment')
            ]);
            if($data){
                return JSONFormatter::success($data,"success update data");
            }else{
                return JSONFormatter::error(null,"error update data",400);
            }
        }else{
            $data = CommentBlog::create([
                'blog_id' => $req->input('blog_id'),
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'comment' => $req->input('comment')
            ]);
            if($data){
                return JSONFormatter::success($data,"success add data");
            }else{
                return JSONFormatter::error(null,"error add data",400);
            }
        }
    }
    public function destroy($id)
    {
        $data = CommentBlog::findOrfail($id);
        $data->delete();
        return JSONFormatter::success($data,"success delete");
    }
}
