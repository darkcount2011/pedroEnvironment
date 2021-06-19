<?php

namespace App\Http\Controllers;

use App\Models\Story;
use http\Env\Response;
use Illuminate\Http\Request;


class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', ['stories' => $stories]);
    }

    /**
     * Sorts name of stories that have a name like requested input and return as json repsonse.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request){

        $data = Story::where('name','LIKE','%'.$request->keyword.'%')->get();
        return response()->json($data);
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
     * @return \Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        Story::whereIn('id', $request->id)->delete();
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
