<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Matheuys";
        $idade = 25;
        $turma = "A";
    
        return view('welcome', ['nome' =>$nome, 'idade' => $idade,'turma'=>$turma]);
    }

    public function create() {
        return view('events.create');
    }

}
