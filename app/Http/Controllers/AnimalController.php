<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function detail()
    {
        $id = request()->id;

        $animals = Animal::all();
        $selected = Animal::where('id', $id)->first();

        $data = [
            'animals' => $animals,
            'selected' => $selected,
        ];

        return view('product.detail', $data);
    }
}
