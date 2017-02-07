<?php

namespace App\Http\Controllers;

use App\Sanpham;
use App\Sanphams;
use Illuminate\Http\Request;

use App\Http\Requests;

class listingproduct extends Controller
{
    public function showdetail($id){
        $data = Sanphams::select('danhmucs_id','ten_sp','so_luong','don_gia','hinh_anh','mo_ta','cpu','man_hinh','he_dieu_hanh','ram','camera','pin')->where('danhmucs_id',$id)->get();

        return $data;
    }
}
