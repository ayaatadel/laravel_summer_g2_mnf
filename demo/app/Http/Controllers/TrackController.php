<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks=Track::all();
        // dd($tracks);
        return view('tracks.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('tracks.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  validation
        // dump($request);
        $request->validate(
            [
                'name'=>'required|unique:tracks|min:2',
                'description'=>'required|unique:tracks|min:5|max:25'
            ],[
                'name.unique'=>'this track name already exit choose another name',
                'name.min'=>'name must be more than 2 characters',
                'description.unique'=>'track description alreay exist choose another description'
            ]
            );
    //  dump($request);
    $requestedData=$request->all();
    $track=Track::create($requestedData);
    $track->save();
    return to_route('tracks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
       /***
        * show($id)
        findOrFail($id)
        return view(show, compact($track))
        */
        // dump($track);
        return view('tracks.show',compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
        return view('track.update',compact('track'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
        $requestData=$request->all();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
        $track->delete();
        return to_route('tracks.index');
    }
}
