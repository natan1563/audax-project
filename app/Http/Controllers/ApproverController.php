<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Request as Solicitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApproverController extends Controller
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
                            ->where('name', 'LIKE', "%{$queryByName}%")
                            ->join('users', 'requests.user_id', '=', 'users.id')
                            ->select('users.name', 'users.id AS user_id', 'requests.id AS request_id', 'requests.status', 'requests.created_at')
                            ->orderBy('request_id', 'DESC')
                            ->take(10)
                            ->get();
            break;

            default:
                $requests = Solicitor::query()
                                ->orderBy('request_id', 'DESC')
                                ->join('users', 'requests.user_id', '=', 'users.id')
                                ->select('users.name', 'users.id AS user_id', 'requests.id AS request_id', 'requests.status', 'requests.created_at')
                                ->take(10)
                                ->get();
        }

        $user = 'approver';
        return view('approver.requests', compact('user', 'requests'));
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
        //
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

        return view('approver.request_details',compact('requests', 'materials', 'materialsSelected'));
    }

    public function approve($id)
    {
        $solicitor = Solicitor::find($id);
        $solicitor->status = 'approved';
        $solicitor->approver_id = Auth::user()->id;
        $solicitor->save();

        return redirect()->back();
    }

    public function reprove(Request $request, $id)
    {
        $request->validate([
            'inputObservation' => 'required|min:1'
        ]);

        $solicitor = Solicitor::find($id);
        $solicitor->status = 'reproved';
        $solicitor->observation = $request->get('inputObservation');
        $solicitor->approver_id = Auth::user()->id;
        $solicitor->save();

        return redirect()->back();
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
