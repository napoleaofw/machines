<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment as EstablishmentModel;
use App\Models\Machine as MachineModel;
use App\Models\Transaction as TransactionModel;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recordsTransaction = TransactionModel::all();

        $data = [
            'recordsTransaction' => $recordsTransaction
        ];
        return view('pages.transaction.list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recordTransaction = new TransactionModel();
        $recordsEstablishment = EstablishmentModel::all();
        $recordsMachine = MachineModel::all();
        
        $disabled = 'init';
        $data = [
            'record' => [
                'disabled' => $disabled,
                'status' => 'creating'
            ],
            'recordTransaction' => $recordTransaction,
            'recordsEstablishment' => $recordsEstablishment,
            'recordsMachine' => $recordsMachine
        ];
        return view('pages.transaction.form.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recordTransaction = TransactionModel::findOrFail($id);
        $recordsEstablishment = EstablishmentModel::all();
        $recordsMachine = MachineModel::all();
        
        $data = [
            'record' => [
                'disabled' => 'disabled',
                'status' => 'showing'
            ],
            'recordTransaction' => $recordTransaction,
            'recordsEstablishment' => $recordsEstablishment,
            'recordsMachine' => $recordsMachine
        ];
        return view('pages.transaction.form.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $recordTransaction = TransactionModel::findOrFail($id);
        $recordsEstablishment = EstablishmentModel::all();
        $recordsMachine = MachineModel::all();
        
        $data = [
            'record' => [
                'disabled' => null,
                'status' => 'editing'
            ],
            'recordTransaction' => $recordTransaction,
            'recordsEstablishment' => $recordsEstablishment,
            'recordsMachine' => $recordsMachine
        ];
        return view('pages.transaction.form.index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
