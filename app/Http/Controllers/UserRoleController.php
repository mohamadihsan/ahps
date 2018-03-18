<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\UserRole;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.user_role.index');
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
        $data = [
            'role_name'     => $request['role_name'],
            'description'   => $request['description']
        ];

        UserRole::create($data);

        return response()->json([
            'success' => true,
            'message' => 'User Role has been created'
        ]);

        // if(UserRole::create($data)){
        //     Toastr::success('Data successfully insert', 'Success', ["positionClass" => "toast-top-right"]);
        // }else{
        //     Toastr::error('Data failed to insert', 'Failed', ["positionClass" => "toast-top-right"]);
        // }
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
        $user_role = UserRole::find($id);

        return $user_role;
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
        $user_role = UserRole::find($id);
        $user_role->role_name   = $request['role_name'];
        $user_role->description = $request['description'];
        
        $user_role->update();
        
        return response()->json([
            'success' => true,
            'message' => 'User Role has been updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserRole::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'User Role has been deleted'
        ]);
    }

    public function apiUserRole()
    {
        $user_role = UserRole::all();

        return DataTables::of($user_role)
            ->addColumn('action', function($user_role){
                return  '<a href="#" class="btn btn-info btn-outline-info waves-effect waves-light btn-sm"><i class="ti-more-alt"></i> Show</a>'.
                        '<a onclick="editForm('. $user_role->id .')" class="btn btn-warning btn-outline-warning waves-effect waves-light btn-sm">
                            <i class="ti-pencil-alt"></i> Edit</a>'.
                        '<a onclick="deleteData('. $user_role->id .')" class="btn btn-danger btn-outline-danger waves-effect waves-light btn-sm">
                            <i class="ti-trash"></i> Delete</a>'; 
            })->make(true);
    }
}
