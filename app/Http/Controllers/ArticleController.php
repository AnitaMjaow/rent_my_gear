<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
         Article,
         City,
         Category,
         Image
        };

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	  //
	}


	public function show($id)
  {
    $articles = Article::find($id);
    return view('layouts.show',compact('articles'));
  }
  public function __construct()
  {
     return $this->middleware('auth');
  }
   public function create()

    {
        $categories=Category::pluck('category_name','category_id');
        $cities=City::pluck('city_name','city_id');
        $articles=Article::all();
        return view('/layouts/adsCategory', [
            'categories' => $categories,
            'cities' => $cities,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

     
    

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)  ////to save data från db to form
    {
        $article=Article::create($req->all()+ ['user_id'=>$req->user()->user_id]);
            foreach($request->images as $img)
             {
             $filename=$img->store('public/img');
              $image=new Image();
              $image->image=basename($filename);
              $article->images()->save($image);  ////to save images
              }
              return back()->with('success', 'Your Article has been added! 💃💃💃💃💃');
    }
       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
