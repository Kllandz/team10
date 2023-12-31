<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;


class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //從 Model 拿資料
        $players = Player::all();
        //把資料送給 view
        return view('players.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::orderBy('teams.id', 'asc')->pluck('teams.team', 'teams.id');
        return view('players.create', ['teams' =>$teams, 'teamSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $postition = $request->input('postition');
        $nationality = $request->input('nationality');
        $age = $request->input('age');
        $year = $request->input('year');
        $gender = $request->input('gender');

        $player = Player::create([
            'name'=>$name,
            'tid'=>$tid,
            'postition'=>$postition,
            'nationality'=>$nationality,
            'age'=>$age,
            'year'=>$year,
            'gender'=>$gender]);
        return redirect('players');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::orderBy('teams.id', 'asc')->pluck('teams.team', 'teams.id');
        $selected_tags = $player->team->id;
        return view('players.edit', ['player' =>$player, 'teams' => $teams, 'teamSelected' => $selected_tags]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::orderBy('teams.id', 'asc')->pluck('teams.team', 'teams.id');
        $selected_tags = $player->team->id;
        return view('players.edit', ['player' =>$player, 'teams' => $teams, 'teamSelected' => $selected_tags]);
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
        $player = Player::findOrFail($id);

        $player->name = $request->input('name');
        $player->tid = $request->input('tid');
        $player->position = $request->input('postition');
        $player->nationality = $request->input('nationality');
        $player->age = $request->input('age');
        $player->year = $request->input('year');
        $player->gender = $request->input('gender');
        $player->save();

        return redirect('players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect('players');
    }
}
