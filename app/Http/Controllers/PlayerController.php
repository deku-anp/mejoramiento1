<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //

    public function create(){
        return view('player.create');
    }

    public function store(Request $request){
        $player= new Player();

        $player->codigo=$request->codigo;
        $player->nombre=$request->nombre;
        $player->fecha_nac=$request->fecha_nac;
        $player->posicion=$request->posicion;

        $player->save();
        return $player;
    }

    public function listar(){
        
        $players = Player::orderBy('id', 'desc')->get();
        return view('player.listar', compact('players'));

    }

    public function edit(Player $player){//Encuentro el Curso
        
        return view('player.edit',compact('player'));
    }

    //Update
    public function update(Request $request,Player $player){
        
        $player->codigo=$request->codigo;
        $player->nombre=$request->nombre;
        $player->fecha_nac=$request->fecha_nac;
        $player->posicion=$request->posicion;
        $player->save();
        return redirect()->route('player.listar');
    }

    public function show($id){
        
        //$id
        $player = Player::find($id);
        return view('player.show',compact('player'));
    }

    public function destroy(Player $player){
        
        $player->delete();
        return redirect()->route('player.listar');
    }

}
