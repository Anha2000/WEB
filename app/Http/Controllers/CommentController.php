<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Category_list;
use \Carbon\Carbon;
use DB;


class CommentController extends Controller
{
    public function submit(CommentRequest $req, $id){
		
		$comment= new Comment();
		$comment->name=$req->input('name');
		$comment->text=$req->input('message');
		$comment->email=$req->input('email');
		$comment->p_id=$req->input('password');
		$comment->art_id=$id;
		$comment->save();
		
		
		return redirect()->route('blog-single',$id)->with('success','Коментар було додано');
		
	}
	public function search(Request $req){
		
		$article = new Article;
		$word=$req->search;
		$category_list = new Category_list;
		
		$articles=$article::select('*','articles.id as art_id')->where('articles.name', 'like','%'.$word.'%' )
		->orderBy('articles.created_at','asc')->take(8)->get();
			 foreach ($articles as $el){
				$dt = Carbon::parse($el->created_at)->locale('uk')->isoFormat('D MMMM, YYYY');
				$el->time = $dt;
			}
			
		  $categories = new Category;
		  $categories=$categories::select('*')->get();
 
		$count=$category_list::select("category_id", DB::raw("count(*) as art_count"))
                        ->groupBy('category_id')
                        ->get();


		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')
   ->get();
  
 return view('category', ['articles'=>$articles,'category'=>$category, 'categories'=>$categories, 'count'=>$count,'r'=> "index", 'c'=> "category", 'id'=>0]);
		
	}
	  public function PostIndex($name){
		$article = new Article;
		$category_list = new Category_list;

		$articles=$article::select('*','articles.id as art_id')->orderBy('articles.created_at','asc')->take(8)->get();
			 foreach ($articles as $el){
				$dt = Carbon::parse($el->created_at)->locale('uk')->isoFormat('D MMMM, YYYY');
				$el->time = $dt;
			}
			
		  $categories = new Category;
		  $categories=$categories::select('*')->get();
 
		$count=$category_list::select("category_id", DB::raw("count(*) as art_count"))
                        ->groupBy('category_id')
                        ->get();


		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')
   ->get();
  return view($name, ['articles'=>$articles,'category'=>$category, 'categories'=>$categories, 'count'=>$count,'r'=> "index", 'c'=> "category", 'id'=>0]);
 
	
	}
	
		  public function PostCategory($id){
		$article = new Article;
		$category_list = new Category_list;

	$articles=$article::select('*')
				->get();

 
		$articles=$article::select('*','articles.created_at as created_at')
		 ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
		 ->where('category_lists.category_id', '=',$id )->orderBy('articles.created_at','asc')->get();
		 
			foreach ($articles as $el){
				$dt = Carbon::parse($el->created_at)->locale('uk')->isoFormat('D MMMM, YYYY');
				$el->time = $dt;
			}
			
		  $categories = new Category;
		  $categories=$categories::select('*')->get();
 
		$count=$category_list::select("category_id", DB::raw("count(*) as art_count"))
                        ->groupBy('category_id')
                        ->get();


		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')
   ->get();
  
   return view('category',['articles'=>$articles,'category'=>$category, 'categories'=>$categories, 'count'=>$count, 'r'=> "index", 'c'=> "category", 'id'=>$id]);
	
	}
	 public function PostSingle($id){
		$article = new Article;
		$category_list = new Category_list;
		$comment= new Comment();
		
		$articles=$article::select('*')
		 ->where('articles.id', '=',$id )->get();
			 foreach ($articles as $el){
				$dt = Carbon::parse($el->created_at)->locale('uk')->isoFormat('D MMMM, YYYY');
				$el->time = $dt;
			}
			
		  $categories = new Category;
		  $categories=$categories::select('*')->get();
 
		$count=$category_list::select("category_id", DB::raw("count(*) as art_count"))
                        ->groupBy('category_id')
                        ->get();

		 $category = $article::select('articles.id as articles' ,'categories.name as category','categories.id as id')
   ->join('category_lists', 'category_lists.art_id', '=', 'articles.id')
	->join('categories', 'categories.id', '=', 'category_lists.category_id')
   ->get();

$comments= $comment::select('*')->where('comments.art_id', '=',$id )->orderBy('comments.created_at','asc')->get();
 foreach ($comments as $el){
				$dt = Carbon::parse($el->created_at)->locale('uk')->isoFormat('D MMMM, YYYY HH:MM');
				$el->time = $dt;
			}
$сom_с=$comments->count();

   return view('blog-single',['articles'=>$articles,'category'=>$category, 'categories'=>$categories, 'count'=>$count, 'r'=> "index", 'c'=> "category", 'comments'=>$comments, 'сom_с'=>$сom_с]);
	
	}
	public function Test(User $user){
	
	dd($user);
	
	}
	
		 
}
