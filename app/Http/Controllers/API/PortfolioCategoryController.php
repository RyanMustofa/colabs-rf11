<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio_Category;
use App\Http\Requests\PortfolioCategoryRequest;
use Validator;

class PortfolioCategoryController extends Controller
{
     // create // update //delete category
    public function index($id = false)
    {
        if($id){
          $data = Portfolio_Category::findOrfail($id);
          return JSONFormatter::success($data, 'Data Detail Kategori Portfolio Berhasil Diambil');
        }else{
          $data = Portfolio_Category::paginate(10);
          return JSONFormatter::success($data, 'Data Kategori Portfolio Berhasil Diambil');
        }
    }

    public function save(Request $req,$id = false)
    {
        $is_valid = Validator::make($req->all(),[
            'category_name' => 'required'
        ]);
        if($is_valid->fails()){
            return JSONFormatter::error(null, $is_valid->errors()->all(), 400);
        }
        if($id){
           $data = Portfolio_Category::where(['id' => $id])->update([
                'category_name' => $req->input('category_name')
            ]);
            return JSONFormatter::success($data, 'Data Kategori Portfolio Berhasil Diperbarui');
        }else{
           $data = Portfolio_Category::create([
                'category_name' => $req->input('category_name')
            ]);
            return JSONFormatter::success($data, 'Data Kategori Portfolio Berhasil Ditambahkan');
        }
    }
    public function destroy($id)
    {
        if($id){
          $data = Portfolio_Category::destroy($id);
          return JSONFormatter::success(null, 'Data Kategori Portfolio Berhasil Dihapus');
        }else{
            return JSONFormatter::error(null, 'Data tidak Ditemukan',400);
        }
    }
    

}
