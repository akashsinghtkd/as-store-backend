<?php

namespace App\Http\Controllers\API\V1\users;

use App\Http\Controllers\API\V1\ApiController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->respondWithMessage('sesf');
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
        $validator = Validator::make($request->all(), [
            "username"      => ['required', 'string', 'max:32', 'unique:users,username'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "first_name"    => ['required', 'string'],
            "last_name"     => ['required', 'string'],
            "telephone"     => ['required', 'digits:10'],
        ]);
        die('working');
        $user = new User();
        $user->username = 'something';
        $user->password = Hash::make('userpassword');
        $user->email = 'useremail@something.com';
        $user->first_name = 'fname';
        $user->last_name = 'lname';
        $user->telephone = '1254756585';
        $user->save();
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
