<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryByName = $request->input('inputSearch');
        $success = $request->session()->get('success');

        switch(true) {
            case (!is_null($queryByName)):
                $materials = Material::query()
                            ->where('name', 'LIKE', "%{$queryByName}%")
                            ->orderBy('id', 'DESC')
                            ->take(10)
                            ->get();
            break;

            default:
                $materials = Material::query()
                                ->orderBy('id', 'DESC')
                                ->take(10)
                                ->get();
        }


        $user = 'admin';
        return view('admin.materials', compact('user', 'materials', 'success'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $success = $request->session()->get('success');
        return view('admin.materials_registration', compact('success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request)
    {
        $material = new Material;

        $material->name = $request->get('inputName');
        $material->user_id = Auth::user()->id;
        $material->save();

        $request->session()->flash(
            'success',
            "Material criado com sucesso!"
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
    public function destroy(Request $request, $id)
    {
        try {
            if (!Material::destroy($id)) throw new Exception('Falha ao remover o material');
            $request->session()->flash(
                    'success',
                    "Material removido sucesso!"
            );
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
