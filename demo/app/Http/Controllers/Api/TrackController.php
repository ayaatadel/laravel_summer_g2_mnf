<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks=Track::paginate(5);
        return $tracks;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $requestData=Request()->all();
        $track=Track::create($requestData);
        $track->save();
        return $track;
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
                return ["message"=>"Track data found Successfully","data"=>$track];


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
        $requestData=Request()->all();
        $track->update($requestData);
        $track->save();
        return $track;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
        $track->delete();
        $message="track Deleted Succssfully";
        // return $message;
        // return $track;
        return ["data"=>$track,"message"=>$message];
    }
}
