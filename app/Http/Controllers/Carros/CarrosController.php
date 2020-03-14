<?php

namespace App\Http\Controllers\Carros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carro;
use App\Http\Requests\CarroStoreRequest;

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
    public function create(){
        return view('Carros/create');
    }

    public function store(CarroStoreRequest $request){
        $data = $request->all();

        $carroModel = app(Carro::class);
        $carro = $carroModel->create([
            'modelo' => $data['modelo'],
            'marca' => $data['marca'],
            'ano' => $data['ano'],
            'versao' => $data['versao'],
            'em_producao' => isset($data['em_producao'])?true:false
        ]);
        
        return redirect('/carros')->with('success', 'Carro salvo!');
    }
    public function destroy($id){
        $carroModel = app(Carro::class);
        $carro = $carroModel->find($id);
        $carro -> delete();

        return redirect('/carros')->with('success', 'Carro deletado!');
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'first_name'=>'required',
    //         'last_name'=>'required',
    //         'email'=>'required'
    //     ]);

    //     $contact = Contact::find($id);
    //     $contact->first_name =  $request->get('first_name');
    //     $contact->last_name = $request->get('last_name');
    //     $contact->email = $request->get('email');
    //     $contact->job_title = $request->get('job_title');
    //     $contact->city = $request->get('city');
    //     $contact->country = $request->get('country');
    //     $contact->save();

    //     return redirect('/contacts')->with('success', 'Contact updated!');
    // }

    //https://www.techiediaries.com/laravel/php-laravel-7-6-tutorial-crud-example-app-bootstrap-4-mysql-database/
    //https://www.itsolutionstuff.com/post/laravel-6-crud-application-tutorialexample.html
}
