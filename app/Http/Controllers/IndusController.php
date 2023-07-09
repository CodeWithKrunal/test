<?php

namespace App\Http\Controllers;

use App\Models\Indus;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\IndusForm;
use App\DataTables\IndusDataTable;


class IndusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndusDataTable $dataTable)
    {
        return $dataTable->render("indus_table");

        // return view("indus_table");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(IndusForm::class,[
            'method' => 'POST',
            'url' => route('indus.store')
        ]);

        return view("add_indus", compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(IndusForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $data = $form->getFieldValues();

        try{
            Indus::create($data);
            return redirect()->route("indus.index")->with(["status"=>"success","message"=>"Indus Created Succesfully"]);
       } catch (\Exception $e) {
            return redirect()->route("indus.index")->with(["status"=>"failed","message"=>$e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indus  $indus
     * @return \Illuminate\Http\Response
     */
    public function show(Indus $indus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indus  $indus
     * @return \Illuminate\Http\Response
     */
    public function edit(Indus $indus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indus  $indus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indus $indus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indus  $indus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indus $indus)
    {
        //
    }
}
