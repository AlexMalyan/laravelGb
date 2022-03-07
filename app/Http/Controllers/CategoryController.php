<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();

        return view('categories.index', [
            'categoriesList'=> $categories
        ]);
    }


    public function show(string $cat)
    {
        return view('categories.show', [
            'categoryId'=> $this->getCategoryId($cat),
            'cat'=>$cat
        ]);
    }

}
