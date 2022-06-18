<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Requests\PetRequest;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Retorna a lista de pets cadastrados
     * 
     * @return collection
     */
    public function index()
    {
        return Pet::get();
    }

    /**
     * Cria um pet no banco de dados
     * 
     * @param PetRequest $request
     * @return Pet
     */
    public function store(PetRequest $request) 
    {
        $dadosDoPet = $request->all();
        return Pet::create($dadosDoPet);
    }
    
}
