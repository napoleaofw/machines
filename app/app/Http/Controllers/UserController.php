<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as UserModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recordsUser = UserModel::all();

        $data = [
            'recordsUser' => $recordsUser
        ];
        return view('pages.user.list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recordUser = new UserModel();

        $disabled = 'init';
        $data = [
            'record' => [
                'disabled' => $disabled,
                'status' => 'creating'
            ],
            'recordUser' => $recordUser
        ];
        return view('pages.user.form.index', $data);
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
        $recordUser = UserModel::findOrFail($id);

        $data = [
            'record' => [
                'disabled' => 'disabled',
                'status' => 'showing'
            ],
            'recordUser' => $recordUser
        ];
        return view('pages.user.form.index', $data);
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
        $recordUser = UserModel::findOrFail($id);
        
        $data = [
            'record' => [
                'disabled' => null,
                'status' => 'editing'
            ],
            'recordUser' => $recordUser
        ];
        return view('pages.user.form.index', $data);
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
