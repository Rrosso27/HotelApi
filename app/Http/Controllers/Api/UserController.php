<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;
use Auth;
use Response;

class UserController extends Controller
{
    // user list
    public function index()
    {
        $user = User::all();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userName' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'birthdayDate',
            'sex' => 'required',
            'contactNumber' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'typesId' => 'required',
            'rolesId' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['type' => 'errpr', 'message' => $validator->errors()], 400);
        }

        $user = new User();

        $user->user_name = $request->userName;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->birthday_date = $request->birthdayDate;
        $user->sex = $request->sex;
        $user->contact_number = $request->contactNumber;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->id_document_types = $request->typesId;
        $user->roles_id = $request->rolesId;
        $user->save();

        return response()->json(['type' => 'approved', 'message' => 'operación realizado con  éxito'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::findOrFail($request->id);
            $user->user_name = $request->userName;
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->birthday_date = $request->birthdayDate;
            $user->sex = $request->sex;
            $user->contact_number = $request->contactNumber;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->id_document_types = $request->typesId;
            $user->roles_id = $request->rolesId;
            $user->save();

            return $user;
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->state = 'off';
        $user->save();

        return response()->json(['type' => 'approved', 'message' => 'operación realizado con  éxito'], 200);
    }



    public function login(Request $request)
    {

        try {
            $creadenciales = $request->validate(
                [
                    'email' => ['required', 'email'],
                    'password' => ['required']
                ]
            );

            return $this->Auth($creadenciales);

        } catch (\Exception $e) {
            return  $e->getMessage();
        }

    }




    public function Auth($creadenciales)
    {
        try {
            if (Auth::attempt($creadenciales)) {
                $user = Auth::user();
                $token = $user->createToken('token')->plainTextToken;
                $cookie = cookie('cookie_token', $token, 60 * 24);

                return $token;
            } else {
                return 'error';
            }
        } catch (\Exception $e) {
           return $e->getMessage();
        }
    }



    public function userValidate($user)
    {



        $user = User::select('password')
            ->where('email', $user)
            ->get();

        if (count($user) > 0) {
            return $user;
        } else {
            return false;
        }
    }



}
