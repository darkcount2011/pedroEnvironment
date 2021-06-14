<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stories = Story::all();
        return view('stories.create', ['stories' => $stories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Story::create($this->validateStory($request));
        return redirect(route('stories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('stories.show', ['story' => Story::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('stories.edit', ['story' => Story::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Story::find($id)->update($this->validateStory($request));
        return redirect(route('stories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Story::destroy($id);
        return redirect(route('stories.index'));
    }
    /**
     * Validate the request with the validation rules.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function validateStory(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string'],
            'text' => ['required', 'string'],
        ]);
    }
}
