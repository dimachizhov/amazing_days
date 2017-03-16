<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    public function index () {
        return view('admin.index');
    }

    public function indexArticles() {
        return view('admin.index-articles', ['articles' => Article::paginate(10)]);
    }
}
