<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdmnistratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryByName = $request->input('inputSearch');

        switch(true) {
            case (!is_null($queryByName)):
                $users = User::query()
                    ->where('name', 'LIKE', "%{$queryByName}%")
                    ->orderBy('id', 'DESC')
                    ->take(10)
                    ->get();
            break;

            default:
                $users = User::query()
                    ->orderBy('id', 'DESC')
                    ->take(10)
                    ->get();
        }

        $user = 'admin';
        return view('admin/users', compact('users', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.user_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;

        if ($user->where('email', $request->get('inputEmail'))->count())
            return redirect('/users'); // MENSAGEM DE EMAIL DUPLICADO

        $user->name     = $request->get('inputName');
        $user->type_user= $request->get('inputFunction');
        $user->email    = $request->get('inputEmail');
        $user->password = Hash::make($request->get('inputPassword'));
        $user->save();

        $request->session()->flash(
            'mensagem',
            "Usuário criado com sucesso!"
        );

        return redirect()->back();
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
        User::destroy($id);
        return redirect()->back();
    }
}
