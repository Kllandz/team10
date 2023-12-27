<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;

use App\Models\Team;
class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //從 Model 拿資料
        $teams = Team::all();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    public function rank1()
    {
        // 從 Model 拿資料
        $teams = Team::rank('1')->get();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }


    public function rank2()
    {
        // 從 Model 拿資料
        $teams = Team::rank('2')->get();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }
    public function rank3()
    {
        // 從 Model 拿資料
        $teams = Team::rank('3')->get();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }
    public function rank4()
    {
        // 從 Model 拿資料
        $teams = Team::rank('4')->get();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeamRequest $request)
    {
        //
        $team = $request->input('team');
        $year = $request->input('year');
        $divison = $request->input('divison');
        $rank = $request->input('rank');
        $rate = $request->input('rate');
        $pastrate = $request->input('pastrate');
        $games = $request->input('games');
        $founded = $request->input('founded');
        Team::create([
            'team' => $team,
            'year' => $year,
            'divison' => $divison,
            'rank' => $rank,
            'rate' => $rate,
            'pastrate' => $pastrate,
            'games' => $games,         
            'founded' => $founded
        ]);

        return redirect('teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $team = Team::findOrFail($id);
        $players = $team->players;
        return view('teams.show', ['team'=>$team, 'players'=>$players]);    
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
        $team = Team::findOrFail($id);
        return view('teams.edit', ['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTeamRequest $request, $id)
    {
        //
        $team = Team::findOrFail($id);

        $team->team = $request->input('team');
        $team->year = $request->input('year');
        $team->divison = $request->input('divison');
        $team->rank = $request->input('rank');
        $team->rate = $request->input('rate');
        $team->pastrate = $request->input('pastrate');
        $team->games = $request->input('games');
        $team->founded = $request->input('founded');
        $team->save();

        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect('teams');
    }
}
