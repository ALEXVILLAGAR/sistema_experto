<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Symptom;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{

    protected $enfermedades         = [];
    protected $enfermedades_cliente = [];
    protected $sintomas = [];

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        abort(404);
    }

    protected function enfermedad()
    {
        $grados = [];
        for ($i = 1; $i < count($this->sintomas); $i++) {
            $valor = Symptom::findOrFail($this->sintomas[$i]);
            array_push($this->enfermedades, $valor->diseases);
        }
        $this->algoritmo(); 
    }

    protected function grados() //contar la cantidad de vez q hay una enfermedad en la lista
    {
        $data   = collect($this->enfermedades)->collapse();
        $contar = [];
        foreach ($data as $key => $value) {
            if (isset($contar[$value->enfermedad])) {
                $contar[$value->enfermedad] += 1;
            } else {
                $contar[$value->enfermedad] = 1;
            }
        }
        $this->enfermedades_cliente = $contar;
    }

    protected function grados2($data){ //esto manda error si, no hay grados para una enfermedad
        $grados=[];
        foreach($data->symptoms as $key => $sintoma){
            for ($i=1; $i < count($this->sintomas); $i++) { 
                if($sintoma->id == $this->sintomas[$i]){
                     $grados[$key]=$data->MisGrados()[$key];
                }
            }
        }
        return collect($grados)->average()*10; //aca se saca el promedio y se multiplica por 10, para que quede el porcentaje,
    }

    protected function algoritmo()
    {
        $data   = collect($this->enfermedades)->collapse();
        $try=[];
        foreach($data as $enfermedad){
            if(!isset($try[$enfermedad->enfermedad])){
                $try[$enfermedad->enfermedad]=['grados'=>$this->grados2($enfermedad),'modelo'=>$enfermedad];
            }
        }
        $this->enfermedades_cliente = $try;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->sintomas = array_keys($request->all());
        $this->enfermedad();
        return view('padecimientos', ['enfermedades' => $this->enfermedades_cliente]);
    }
}
