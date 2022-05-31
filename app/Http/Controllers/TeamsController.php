<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show(Team $team) {

        $players = Player::where('team_id', $team->id)->get();
        return view('teams.show', compact('team', 'players'));
    }
}
