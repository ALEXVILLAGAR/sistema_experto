<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Symptom;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{

    protected $gradoAmigdalitis     = [0.7, 0.8, 0.5, 0.4, 0.7, 0.5, 0.3, 0.2, 0.6, 0.3];
    protected $gradoBronquiectasias = [0.7, 0.5, 0.4];
    protected $gradoAsma            = [0.7, 0.4, 0.5, 0.6, 0.6, 0.3, 0.3, 0.3, 0.2];
    protected $gradoBronquiolitis   = [0.5, 0.4, 0.7, 0.6];
    protected $gradoBronquits       = [0.3, 0.4, 0.5, 0.6];

    protected $enfermedades         = [];
    protected $enfermedades_cliente = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    protected function porcentaje($y, $x)
    {
        $result = $y + ((1 - $y) * $x);
        return $result;}

    protected function enfermedad($data)
    {
        $grados = [];
        for ($i = 1; $i < count($data); $i++) {
            $valor = Symptom::findOrFail($data[$i]);
            array_push($this->enfermedades, $valor->diseases);
        }
        $this->grados();
    }

    protected function grados()
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->enfermedad(array_keys($request->all()));
        return view('padecimientos', ['enfermedades' => $this->enfermedades_cliente]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        //
    }
}
