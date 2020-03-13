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
        $data = $request->all();

        $carroModel = app(Carro::class);
        $carro = $carroModel->create([
            'modelo' => $data['modelo'],
            'marca' => $data['marca'],
            'ano' => $data['ano'],
            'versao' => $data['versao'],
            'em_producao' => isset($data['em_producao'])?true:false
        ]);
        
        return redirect('/carros')->with('success', 'Contact saved!');
    }
    public function create(){
        return view('Carros/create');
    }
    //https://www.itsolutionstuff.com/post/laravel-6-crud-application-tutorialexample.html
}
