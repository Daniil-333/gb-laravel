<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();

        return view('news.categories', [
            'categorieslist' => $categories,
        ]);
    }
}
