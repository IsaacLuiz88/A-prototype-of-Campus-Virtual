<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listagem;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
/*         $users = DB::select('SELECT * FROM users');
        dd($users); */

        $users = DB::table('users')->get(['id','name', 'email', 'password']);
        return view('listagem', ['users' => $users]);

        /* $users = Listagem::all();
        //dd($users);
        return view('usuarios.index')->with('usuarios',$users); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => password_hash($request->input('password'), PASSWORD_DEFAULT)]);
            if($created){
               return redirect()->back()->with('message', 'Sucessfully crated'); 
            }return redirect()->back()->with('message', 'Error created');

    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return view('user_show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user_edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = DB::table('users')->where('id',$id)->update($request->except(['_token','_method']));
        if($updated){ return redirect()->back()->with('message', 
            'Sucessfully updated');
        }
    return redirect()->back()->with('message', 'Error updated');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if($user){
            $user -> delete();
        }
        return redirect()->route('users.index');
    }
}
