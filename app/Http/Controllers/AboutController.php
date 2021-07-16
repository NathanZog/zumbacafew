<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
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
        $texts=[
            (object)["imgabout" => "img/about.jpg","txtabout1" => "Strong Coffee, Strong Roots","txtabout2"=>"About Our Cafe","txtabout3" =>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.","txtabout4" => "We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];
        return view('pages/about',compact('texts','titles','lis','txtfooter'));
    }
}
