<?php

namespace App\Http\Controllers;

use DB;
use App\Sport;
use Illuminate\Http\Request;

use App\Team;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teams = Team::all();
        $sport = Sport::lists('name', 'id');

        return view('teams.index', compact('teams', 'sport'));
    }

    public function join()
    {
        return view('teams.join');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $sports = Sport::lists('name', 'id');
        //$sports = DB::table('sports')->lists('name', 'id');

        return view('teams.create')->with('sport', $sports);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        for ($i=0; $i < count($request->TeamName); $i++)  {
            $data[] = array(
                'name' => $request->TeamName[$i],
                'sportID' => $request->sport
            );
        }

        DB::table('teams')->insert($data);

        return Redirect::route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
