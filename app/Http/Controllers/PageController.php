<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo ('NIM : 2041720118 <br>');
        echo ('Nama : Ana Qonitah Munawwaroh');
    }

    public function articles($id='1'){
        echo ('Halaman Artikel dengan ID '.$id);
    }
}
