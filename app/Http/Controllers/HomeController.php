<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestMenus = Category::with('menu')->get();

        $productContainers = [];

        foreach ($bestMenus as $bestMenu) {

            if ($bestMenu->menu->isNotEmpty()) {

                $bestMenu = $bestMenu->menu->random();
                array_push($productContainers, $bestMenu);
            }
        }



        return view('home', [
            'bestMenus' => $productContainers
        ]);
    }
}
