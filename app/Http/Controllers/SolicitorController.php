<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Request as Solicitor;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\PseudoTypes\HtmlEscapedString;

class SolicitorController extends Controller
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
                $requests = Solicitor::query()
                                ->where('id', Auth::user()->id)
                                ->where('name', 'LIKE', "%{$queryByName}%")
                                ->join('users', 'requests.user_id', '=', 'users.id')
                                ->select('users.name', 'users.id AS user_id', 'requests.id AS request_id', 'requests.status', 'requests.created_at')
                                ->orderBy('request_id', 'DESC')
                                ->take(10)
                                ->get();
            break;

            default:
                $requests = Solicitor::query()
                                ->where('users.id', Auth::user()->id)
                                ->orderBy('request_id', 'DESC')
                                ->join('users', 'requests.user_id', '=', 'users.id')
                                ->select('users.name', 'users.id AS user_id', 'requests.id AS request_id', 'requests.status', 'requests.created_at')
                                ->take(10)
                                ->get();
        }

        $user = 'admin';
        return view('solicitor.requests', compact('user', 'requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = Material::all();
        return view('solicitor.create_request', compact('materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputMaterial' => 'required'
        ]);

        $checkeds = $request->get('inputMaterial');
        $data = [];
        $userId = Auth::user()->id;

        foreach ($checkeds as $id => $name) {
           array_push($data, [
                'id' => $id,
                'name' => $name,
                'user_id' => $userId
            ]);
        }

        $solicitation = new Solicitor;
        $solicitation->materials  = json_encode($data);
        $solicitation->status     = 'waiting';
        $solicitation->created_at = new DateTime();
        $solicitation->user_id    = $userId;
        $solicitation->save();

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
        $requests = Solicitor::find($id);
        $materials = Material::all();
        $materialsSelected = json_decode($requests->materials, true);

        return view('solicitor.your_request', compact('requests', 'materials', 'materialsSelected'));
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
