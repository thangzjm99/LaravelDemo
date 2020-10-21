<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LoaiTin;
use App\Models\TheLoai;


class AjaxController extends Controller
{
    //
    public function getLoaiTin($idTheLoai)
    {
        $loaitin=LoaiTin::where('idTheLoai',$idTheLoai)->get(); // Tim idTheLoai = voi idTheloai truyen vao
        foreach($loaitin as $lt)
        {
           echo "<option value='".$lt->id."'>".$lt->Ten."</option>";
        }
    }
}