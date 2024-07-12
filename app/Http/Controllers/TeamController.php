<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    public function create(){
        return view('team.create');
    }

    public function store(Request $request){
        $team= new Team();

        $team->codigo=$request->codigo;
        $team->nombre=$request->nombre;
        $team->ciudad=$request->ciudad;
        $team->estadio=$request->estadio;
        $team->aforo=$request->aforo;
        $team->año=$request->año;

        $team->save();
        return $team;
    }

    public function listar(){
        
        $teams = Team::orderBy('id', 'desc')->get();
        return view('team.listar', compact('teams'));

    }

    public function edit(Team $team){//Encuentro el Curso
        
        return view('team.edit',compact('team'));
    }

    //Update
    public function update(Request $request,Team $team){
        
        $team->codigo=$request->codigo;
        $team->nombre=$request->nombre;
        $team->ciudad=$request->ciudad;
        $team->estadio=$request->estadio;
        $team->aforo=$request->aforo;
        $team->año=$request->año;
        $team->save();
        return redirect()->route('team.listar');
    }

    public function show($id){
        
        //$id
        $team = Team::find($id);
        return view('team.show',compact('team'));
    }

    public function destroy(Player $player){
        
        $player->delete();
        return redirect()->route('team.listar');
    }

}
