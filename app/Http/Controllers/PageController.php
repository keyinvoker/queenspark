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

        $data = [
            'animals' => $animals,
        ];

        return view('home', $data);
    }
}
