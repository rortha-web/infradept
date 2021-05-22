<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Verify;
use App\Position;
use App\Group;
use App\Branch;
class VerifierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verifier = Verify::with(['position', 'group', 'branch'])->orderBy('id', 'desc')->get();
        return view('verify.index', compact('verifier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $positions = Position::all();
        $branches = Branch::all();
        return view('verify.create')->with(['groups' => $groups, 'positions' => $positions, 'branches' => $branches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verified = new Verify;
        $verified -> name = $request -> name;
        $verified -> id_card = $request -> id_card;
        $verified -> position_id = $request -> position_id;
        $verified -> branch_id = $request -> branch_id;
        $verified -> group_id = $request -> group_id;
        $verified -> phone = $request -> phone;
        $verified -> description = $request -> description;
        if($verified -> save()){
            return redirect()->route('verify.index');
        }
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
        //
    }
}
