<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("home", [
            "title" => "Ali Ahmadi | Blog",
            "blogs" => Article::all(),
            "page_index" => 1,
            "max_page_index" => (int) (Article::count() / 5) + 1
        ]);
        //
        // return view("home", [
        //     "title" => "Ali Ahmadi",
        //     "page_index" => 1,
        //     "max_page_index" => 4,
        //     "blogs" => [
        //         ["title1", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis architecto tenetur, at aliquid laboriosam, eveniet facere, ratione debitis laborum perspiciatis quis nulla tempore necessitatibus voluptate distinctio incidunt iure autem error!", "ali"],
        //         ["title2", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis architecto tenetur, at aliquid laboriosam, eveniet facere, ratione debitis laborum perspiciatis quis nulla tempore necessitatibus voluptate distinctio incidunt iure autem error!", "reza"],
        //         ["title3", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis architecto tenetur, at aliquid laboriosam, eveniet facere, ratione debitis laborum perspiciatis quis nulla tempore necessitatibus voluptate distinctio incidunt iure autem error!", "hassan"],
        //         ["title4", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis architecto tenetur, at aliquid laboriosam, eveniet facere, ratione debitis laborum perspiciatis quis nulla tempore necessitatibus voluptate distinctio incidunt iure autem error!", "ahmad"],
        //         ["title5", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis architecto tenetur, at aliquid laboriosam, eveniet facere, ratione debitis laborum perspiciatis quis nulla tempore necessitatibus voluptate distinctio incidunt iure autem error!", "akbar"]
        //     ]
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $article)
    {
        //
        // dd($article);
        return view("articles/" . $article);
    }

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
