<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment_Portofolio;
class CommentPortofolioController extends Controller
{
    public function index($id = false)
    {
        if ($id) {
            $data = Comment_Portofolio::findOrfail($id);
            return JSONFormatter::success(
                $data,
                "Data Success Fetching With Id"
            );
        } else {
            $data = Comment_Portofolio::with(['portofolio'])->paginate(10);
            return JSONFormatter::success($data, "Data Success Fetching All");
        }
    }
    public function save(Request $req, $id = false)
    {
        if ($id) {
            $data = Comment_Portofolio::where(['id' => $id])->update([
                'portofolio_id' => $req->input('portofolio_id'),
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'comment' => $req->input('comment')
            ]);
            return JSONFormatter::success(
                $data,
                "Success Update Comment In Portofolio"
            );
        } else {
            $data = Comment_Portofolio::create([
                'portofolio_id' => $req->input('portofolio_id'),
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'comment' => $req->input('comment')
            ]);
            return JSONFormatter::success(
                $data,
                "Success Add Comment Portofolio"
            );
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $data = Comment_Portofolio::findOrfail($id);
            $data->delete();
            return JSONFormatter::success(null, "Data Success Destroy");
        } else {
            return JSONFormatter::error(null, "Data Not Found", 400);
        }
    }
}
