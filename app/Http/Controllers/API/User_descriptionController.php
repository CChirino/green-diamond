<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Users_description;
use App\Http\Resources\User_descriptionResource as UserDescriptionResource;
use Illuminate\Support\Facades\Gate;



class User_descriptionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_description = Users_description::all();        
        return $this->sendResponse(UserDescriptionResource::collection($users_description), 'User retrieved successfully.');


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
        // $users_description = User::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'social_security' => 'required',
            'birthdate' => 'required',
            'phone_number' => 'required',
            'type_of_person' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $users_description= Users_description::create([
                'social_security'                                   => $request->social_security,
                'birthdate'                                         => $request->birthdate,
                'phone_number'                                      => $request->phone_number,
                'image'                                             => $request->image->storeAs('avatars',$filename,'public'),
                'type_of_person'                                    => $request->type_of_person,
                'user_id'                                           => $request->user_id
            ]);
        }
        // else{
        //     $users_description->update([
        //         'social_security'                   => $request->social_security,
        //         'birthdate'                         => $request->birthdate,
        //         'phone_number'                      => $request->phone_number,
        //         'type_of_person'                    => $request->type_of_person,
        //         'user_id'                           => $id
        //         ]);
        // }
        return $this->sendResponse(($users_description), 'Users description created successfully.');

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
        $users_description = User::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'social_security' => 'required',
            'birthdate' => 'required',
            'phone_number' => 'required',
            'type_of_person' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $users_description= Users_description::update([
                'social_security'                                   => $request->social_security,
                'birthdate'                                         => $request->birthdate,
                'phone_number'                                      => $request->phone_number,
                'image'                                             => $request->image->storeAs('avatars',$filename,'public'),
                'type_of_person'                                    => $request->type_of_person,
                // 'user_id'                                           => $id
            ]);
        }
        else{
            $users_description->update([
                'social_security'                   => $request->social_security,
                'birthdate'                         => $request->birthdate,
                'phone_number'                      => $request->phone_number,
                'type_of_person'                    => $request->type_of_person,
                // 'user_id'                           => $id
                ]);
        }
        return $this->sendResponse(($users_description), 'Users description updated successfully.');

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
