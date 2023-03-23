<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmergencyContact;
use Validator;

class EmergencyContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $contact = EmergencyContact::all();
            return $contact;
        } catch (\Exception $e) {
            return 'Error : ' . $e->getMessage();
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'nameContacts' => 'required',
                'lasnameContacts' => 'required',
                'relationship' => 'required',
                'phone' => 'required',

            ]);

            if ($validator->fails()) {
                return response()->json(['type' => 'errpr', 'message' => $validator->errors()], 400);
            }


            $emergencyContact = new EmergencyContact();

            $emergencyContact->name_contacts = $request->nameContacts;
            $emergencyContact->lasname_contacts = $request->lasnameContacts;
            $emergencyContact->relationship = $request->relationship;
            $emergencyContact->phone = $request->phone;
            $emergencyContact->user_id = $request->userId;
            $emergencyContact->save();


            return response()->json(['type' => 'approved', 'message' => 'operación realizado con  éxito'], 200);

        } catch (\Exception $e) {
            return 'Error : ' . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $emergencyContact = EmergencyContact::find($id);
            return $emergencyContact;
        } catch (\Exception $e) {
            return 'Error : ' . $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $emergencyContact = emergencyContact::findOrFail($request->id);
            $emergencyContact->name_contacts = $request->nameContacts;
            $emergencyContact->lasname_contacts = $request->lasnameContacts;
            $emergencyContact->relationship = $request->relationship;
            $emergencyContact->phone = $request->phone;
            $emergencyContact->user_id = $request->userId;
            $emergencyContact->save();

        } catch (\Exception $e) {
            return 'Error : ' . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $emergencyContact = emergencyContact::findOrFail($id);
            $emergencyContact->state = 'off';
            $emergencyContact->save();

            return response()->json(['type' => 'approved', 'message' => 'operación realizado con  éxito'], 200);
        } catch (\Exception $e) {
            return 'Error : ' . $e->getMessage();
        }
    }
}
