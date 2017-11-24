<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment as EstablishmentModel;
use App\Models\Machine as MachineModel;
use App\Models\Transaction as TransactionModel;
use App\Models\User as UserModel;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recordsEstablishment = EstablishmentModel::all();

        $data = [
            'recordsEstablishment' => $recordsEstablishment
        ];
        return view('pages.establishment.list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recordEstablishment = new EstablishmentModel();
        $recordsUser = UserModel::where('type', 'fiscal')->get();

        $disabled = 'init';
        $data = [
            'record' => [
                'disabled' => $disabled,
                'status' => 'creating'
            ],
            'recordEstablishment' => $recordEstablishment,
            'recordsUser' => $recordsUser
        ];
        return view('pages.establishment.form.index', $data);
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
        $recordEstablishment = EstablishmentModel::findOrFail($id);
        $recordsEstablishment = EstablishmentModel::all();
        $recordsMachine = MachineModel::all();
        $recordTransaction = new TransactionModel();
        $recordsUser = UserModel::where('type', 'fiscal')->get();
        
        $data = [
            'record' => [
                'disabled' => 'disabled',
                'status' => 'showing'
            ],
            'recordEstablishment' => $recordEstablishment,
            'recordsEstablishment' => $recordsEstablishment,
            'recordsMachine' => $recordsMachine,
            'recordTransaction' => $recordTransaction,
            'recordsUser' => $recordsUser
        ];
        return view('pages.establishment.form.index', $data);
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
        $recordEstablishment = EstablishmentModel::findOrFail($id);
        $recordsUser = UserModel::where('type', 'fiscal')->get();
        
        $data = [
            'record' => [
                'disabled' => null,
                'status' => 'editing'
            ],
            'recordEstablishment' => $recordEstablishment,
            'recordsUser' => $recordsUser
        ];
        return view('pages.establishment.form.index', $data);
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
