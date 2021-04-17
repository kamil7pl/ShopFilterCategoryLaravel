<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\QueryFilters\CategoryFilters;

class CategoryController extends Controller
{
    public function index(CategoryFilters $filters)
	{
		return Category::filterBy($filters)->get();
	}
}
