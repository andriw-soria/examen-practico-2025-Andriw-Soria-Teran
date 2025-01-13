<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Post::all();
        return view('modules/post/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Post();
        $item->tittle = $request->tittle;
        $item->content = $request->content;
        $item->status = $request->status;
        $item->save();
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Post::find($id);
        return view('modules/post/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Post::find($id);
        return view('modules/post/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Post::find($id);
        $item->name = $request->name;
        $item->save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $item = Post::find($id);
        if ($item->status == 'activo') {
            $item->status = 'inactivo';
        } else {
            $item->status = 'activo';
        }
        $item->status = $request->status;
        $item->save();
        return to_route('index');
    }
}
