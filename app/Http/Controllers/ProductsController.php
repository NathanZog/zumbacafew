<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $txtproducts=[
            (object)["txtprod1" => "Blended to Perfection", "txtprod2" => "Coffees Teas","imgprod1" => "img/products-01.jpg","txtprod3" => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.", "txtprod4" => "Delicious Treats, Good Eats", "txtprod5" => "Bakery Kitchen","imgprod2" => "img/products-02.jpg" ,"txtprod6" => "Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.", "txtprod7" => "From Around the World", "txtprod8" => "Bulk Speciality Blends", "imgprod3" => "img/products-03.jpg","txtprod9" =>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."]
        ];
        return view('pages/products', compact('titles','lis','txtfooter','txtproducts'));
    }
}
