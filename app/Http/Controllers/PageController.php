<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $animals = Animal::get();

        $categories = Category::select('id', 'category')->get();

        $data = [
            'animals' => $animals,
            'categories' => $categories,
        ];

        return view('home', $data);
    }

    public function aboutUs()
    {
        $categories = Category::select('id', 'category')->get();

        $data = [
            'categories' => $categories,
        ];

        return view('about-us', $data);
    }

    public function searchProduct(Request $request){
        // dd($request->search_query);
        $animals = Animal::where('name', 'like', "%$request->search_query%")->get();

        $categories = Category::select('id', 'category')->get();

        $data = [
            'animals' => $animals,
            'categories' => $categories,
        ];

        return view('home', $data);
    }
}
