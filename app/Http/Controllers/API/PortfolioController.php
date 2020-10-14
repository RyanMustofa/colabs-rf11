<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Str;
class PortfolioController extends Controller
{
    // create // update //delete category
    public function index(Request $req)
    {
        $name = $req->input('name');
        $price_from = $req->input('price_from');
        $price_to = $req->input('price_to');
        $category = $req->input('category');
        $limit = $req->input('limit',10);
        // seacrhing
        $portfolio = Portfolio::with(['portfolio_category', 'User', 'galleries']);
        if($name){
            $portfolio->where('portfolio_name','like', '%' . $name . '%'); //sort by name
        }
        if($price_from){
            $portfolio->where('price', '>=' , $price_from); //harga lebih dari
        }
        if($price_to){
            $portfolio->where('price', '<=' , $price_to); //harga kurang dari
        }
        if($category){
            $portfolio->where('portfolio_category_id', '=', $category); // berdasrkan category
        }
        return JSONFormatter::success(
            $portfolio->paginate($limit) , 'Data Portfolio Berhasil diambil');
    }

    public function save(Request $req, $id = false)
    {
        // insert & update
        if($id){
          $data =  Portfolio::where(['id'  => $id])->update([
                'portfolio_name'=> $req->portfolio_name,
                'user_id' => $req->user_id,
                'portfolio_category_id'=>  $req->user_id ,
                'price'=> $req->price ,
                'description'=> $req->description, 
                'status'=> $req->status,
                'slug'=> Str::slug($req->portfolio_name)
            ]);
            return JSONFormatter::success($data, 'Data Portfolio Berhasil Diperbarui');
        }else{
            $data =  Portfolio::create([
                'portfolio_name'=> $req->portfolio_name,
                'user_id' => $req->user_id,
                'portfolio_category_id'=>  $req->user_id ,
                'price'=> $req->price ,
                'description'=> $req->description, 
                'status'=> $req->status,
                'slug'=> Str::slug($req->portfolio_name)
            ]);
            return JSONFormatter::success($data, 'Data Portfolio Berhasil Ditambahkan');
        }
        
    }
    public function show($slug)
    {
        // show detail
        if($slug){
            $data = Portfolio::with(['portfolio_category', 'User'])->where(['slug' => $slug])->first();
            return JSONFormatter::success($data, 'Data Detail Portfolio Berhasil Diambil');
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan');
        }
    }
    public function destroy($id)
    {
        if($id){
            $data =  Portfolio::destroy($id);
            return JSONFormatter::success($data, 'Data Portfolio Berhasil Dihapus');
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan',400);
        }
    }
}
