<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio_Gallery;
use Validator;
use Illuminate\Support\Str;
class PortfolioGalleryController extends Controller
{
    public function index()
    {
       $data = Portfolio_Gallery::with('portfolio')->get();
       if($data){
           return JSONFormatter::success($data, 'Data Galeri Portfolio Berhasil Diambil');
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan', 400);
        }
    }
    
    public function store(Request $req)
    {
        $is_valid = Validator::make($req->all(),[
            'portfolio_id' => 'required' ,
            'photo' => 'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048'
            ]);
        if($is_valid->fails()){
            return JSONFormatter::error($is_valid->errors()->all(), 'Kesalahan Input Data', 400);
        }
        $file = $req->file('photo');
        $image = $file->move('images/portfolio/', time(). '-' . Str::limit(Str::slug('IMG PORTFOLIO'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        $data = Portfolio_Gallery::create([
               'portfolio_id' => $req->portfolio_id,
               'photo' => $image
            ]);
        return JSONFormatter::success($data, 'Data Galeri Portfolio Berhasil Ditambahkan');
    }


    public function destroy($id)
    {
        if($id){
            $gallery = Portfolio_Gallery::findOrfail($id);
            if(file_exists($gallery->photo)){
                unlink($gallery->photo);
                $data = Portfolio_Gallery::destroy($id);
                return JSONFormatter::success($data, 'Data Galeri Portfolio Berhasil Dihapus');
           }
        }else{
            return JSONFormatter::error(null, 'Data Tidak Ditemukan', 400);
        }
    }
}
