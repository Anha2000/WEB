<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Category_list;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             
		$article = new Article;
		$category_list = new Category_list;

		$articles=$article::select('*','articles.id as art_id')->orderBy('articles.created_at','asc')->get();
			
		  $categories = new Category;
		
		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')
   ->get();

        return view ('admin.article.index',['articles'=>$articles,'category'=>$category]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {			$categories= Category::orderBy('created_at','DESC')->get();
                return view ('admin.article.create', ['categories'=>$categories]);
				

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= new Article();
		
		$article->name=$request->input('name');
		$article->art=$request->input('art');
		$article->img='/'.$request->input('img');
		$article->calendar=$request->input('calendar');
				$article->save();
				
			
				foreach ( $request->cat_id as $cat){
		$category_list= new Category_list();
		$category_list->art_id=$article->id;		
		$category_list->category_id=$cat;
				$category_list->save();
				}
		return redirect()->back()->withSuccess('Стаття була додана');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
		$categories = new Category;
		
		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')->where('articles.id','=',$article->id)
   ->get();

 $categories = new Category;
		  $categories=$categories::select('*')->get();
     return view ('admin.article.edit',['article'=>$article,'category'=>$category, 'categories'=>$categories]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
		
		$article->name=$request->name;
		$article->art=$request->art;
		$article->img=$request->img;
				$article->save();
				
			$category_lists = new Category_list;
		
			
			
			$category_lists=$category_lists::select('*')->where('category_lists.art_id','=', $article->id)->delete();
				
			
				foreach ( $request->cat_id as $cat){
					$category_list= new Category_list();
		$category_list->art_id=$article->id;		
		$category_list->category_id=$cat;
				$category_list->save();
				}
		return redirect()->back()->withSuccess('Стаття була змінена');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
          $article->delete();
		return redirect()->back()->withSuccess('Категорія була видалена');
    }
}
