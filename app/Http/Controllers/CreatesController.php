<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class CreatesController extends Controller
{
   public function home(){
   	 $article = Article::all();
	return view('home', ['article' => $article]);   
   }

   public function add(Request $request){
   		$this->validate($request, [
   			'title' => 'required',
   			'description' => 'required'
   		]);
   		// return "validation pass";
   		$article = new Article;
   		$article->title = $request->input('title');
   		$article->description = $request->input('description');
   		$article->save();
   		return redirect('/')->with('info','Article Saved Successfully!');
   }

   public function update($id){
   	$article = Article::find($id);
   	 return view('update', ['article' => $article]);
   }

   public function edit($id, Request $request){
   	$this->validate($request, [
   		'title' => 'required',
   		'description' => 'required'
   	]);

   
   	$data = [
   		'title' => $request->input('title'),
   		'description' => $request->input('description')
   	];
   		Article::where('id', $id)->update($data);
   		return redirect('/')->with('info', 'Article Updated Successfully!');
   }

	public function read($id){
		$article = Article::find($id);
		return view('read', ['article' => $article]);
   }
   public function delete($id){
   		Article::where('id', $id)->delete();
   		return redirect('/')->with('info', 'Article Deleted Successfully!');
   }
}
