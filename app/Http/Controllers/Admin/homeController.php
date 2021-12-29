<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;


class homeController extends Controller
{
    public function index(){
		
$article_count = Article::all()->count();
		
		return view('admin.home.index',['article_count'=>$article_count]);
	}
}
