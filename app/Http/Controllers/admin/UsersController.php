<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use Yajra\DataTables\DataTables;
use App\Http\Requests\createUserRequest;
use App\Models\Role; 

class UsersController extends Controller
{   
    public function index(){
        $roles = Role::all(); 

        return view('admin.users.index', compact('roles'));
    }

    public function datatable(Request $request){
        if($request->ajax()){
            $users = User::whereDoesntHave('roles', function ($query){
                $query->where('name', 'admin');
            })->get();
            return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '
                <button class="btn btn-md btn-outline-primary edit-user" id="editUserBtn" data-id="' . $user->id . '">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-md btn-outline-danger delete-user" data-id="' . $user->id . '">
                    <i class="fas fa-trash-alt"></i>
                </button>';
            
            })
            ->rawColumns(['action'])
            ->make(true);
            }
        }

        public function createUser(CreateUserRequest $request)
{
    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Find the role by name
    $role = Role::where('name', $request->role)->first();  // Use `where()` method

    if ($role) {
        // Attach the role to the user
        $user->addRole($role);
    }

    return response()->json([
        'success' => true,
        'user' => $user
    ]);
}


public function editUser($id)
{
    // Find the user by ID
    $user = User::findOrFail($id);
    $roles = Role::all(); // Retrieve all available roles

    return response()->json([
        'user' => $user,
        'roles' => $roles
    ]);
}


public function updateUser(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => "required|email|unique:users,email,{$id}",
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    

    return response()->json([
        'success' => true,
        'message' => 'User updated successfully',
        'user' => $user
    ]);
}





}

