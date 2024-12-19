<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    public function index()
    {
        return view('backend.carousel.index');
    }

    public function create()
    {
        return view('backend.carousel.create');
    }

    public function store(Request $request)
    {
        $carousel = new Carousel();
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $carousel->image = "images/$newName";
        }
        $carousel->save();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
