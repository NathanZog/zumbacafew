<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index () {
        $titles = [
            (object)["title" => "A Free Bootstrap 4 Business Theme", "subtitle"=>"Business Casual"]
        ];
        $lis = [
            (object)["li1" => "HOME", "li2" => "ABOUT", "li3" => "PRODUCTS", "li4" => "STORE"]
        ];
        $txtfooter = [
            (object)["txt" => "Copyright Your Website 2019"]
        ];
        return view('template/welcome', compact('titles','lis','txtfooter'));
    }
}
