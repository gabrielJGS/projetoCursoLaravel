<?php

namespace App\Http\Controllers\Carros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosController extends Controller
{
    public function index()
    {
        $carroModel = app(Carro::class);
        $carros = $carroModel->all();
        //$clients = $clientModel->find(1);//Pesquisar com id
        //$clients = $clientModel->where('cpf',11111111112)->get();//Pesquisar de acordo com o que você selecionar
        //dd($clients);

        return view('Carros/index', compact('carros'));
    }
    public function store(Request $request){
        $carroModel = app(Carro::class);
        $carro = $carroModel->create([
            'modelo' => 'celta',
            'marca' => 'chevrolet',
            'ano' => 2012,
            'versao' => 'ltz',
            'em_producao' => false
        ]);
        
        return redirect('/carros');
    }
    public function create(){
        return view('Carros/create');
    }
    //https://www.itsolutionstuff.com/post/laravel-6-crud-application-tutorialexample.html
}
