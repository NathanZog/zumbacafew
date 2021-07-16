<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
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
        $storeitem=[
            (object)["txtstore1"=>"Come On In","txtstore2"=>"We're Open","txtstore3"=>"Sunday","txtstore4"=>"Closed","txtstore5"=>"Monday","txtstore6"=>"7:00 AM to 8:00 PM","txtstore7"=>"Tuesday","txtstore8"=>"Wednesday","txtstore9"=>"Thursday","txtstore10"=>"Friday","txtstore11"=>"Saturday","txtstore12"=>"9:00 AM to 5:00 PM","txtstore13"=>"1116 Orchard Street","txtstore14"=>"Golden Valley, Minnesota","txtstore15"=>"Call Anytime","txtstore16"=>"(317) 585-8468","imgstore1"=>"img/about.jpg","txtstore17"=>"Strong Coffee, Strong Roots","txtstore18"=>"About Our Cafe","txtstore19"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.","txtstore20"=>"We guarantee that you will fall in
            <em>lust</em>
            with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];
        return view('pages/store',compact('titles','lis','txtfooter','storeitem'));
    }
}