<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $animals = Animal::join('categories', 'categories.id', 'animals.category_id')
            ->select('animals.*', 'categories.category AS category')
            ->get();

        $categories = Category::select('id', 'category')->get();

        $data = [
            'animals' => $animals,
            'categories' => $categories,
        ];

        return view('home', $data);
    }

    public function about_us()
    {
        $categories = Category::select('id', 'category')->get();

        $data = [
            'categories' => $categories,
        ];

        return view('about-us', $data);
    }
}
