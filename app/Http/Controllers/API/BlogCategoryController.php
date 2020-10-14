<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog_Category;
use App\Http\Requests\BlogCategoryRequest;
use Validator;
class BlogCategoryController extends Controller
{
      // create // update //delete //show category
      public function index($id = false)
      {
          if($id){
              $data = Blog_Category::findOrfail($id);
              return JSONFormatter::success($data, 'Data Detail Kategori Blog Berhasil Diambil');
          }else{
              $data = Blog_Category::paginate(10);
              return JSONFormatter::success($data, 'Data Kategori Blog Berhasil Diambil');
          }
      }
  
      public function save(Request $req,$id = false)
      {
         $is_valid = Validator::make($req->all(),[
             'category_name' => 'required'
         ]);
         if($is_valid->fails()){
            return JSONFormatter::error($is_valid->errors(),'Kesalahan input data', 400);
         }
          if($id){
             $data = Blog_Category::where(['id' => $id])->update([
                  'category_name' => $req->input('category_name')
              ]);
              return JSONFormatter::success($data, 'Data Kategori Blog Berhasil Diperbarui');
          }else{
             $data = Blog_Category::create([
                  'category_name' => $req->input('category_name')
              ]);
              return JSONFormatter::success($data, 'Data Kategori Blog Berhasil Ditambahkan');
          }
      }
      public function destroy($id)
      {
        if($id){
            $data = Blog_Category::destroy($id);
            return JSONFormatter::success(null, 'Data Kategori Blog Berhasil Dihapus');
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan',400);
        }
      }
       
}
