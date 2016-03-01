<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NewsCategory;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $newsCategories = NewsCategory::all();
        return view('admins.newscategory.index');
    }

    public function create()
    {

    }

    public function store(NewsCategoryRequest $request)
    {

    }

    public function edit($id)
    {

    }

    public function update()
    {

    }
}
