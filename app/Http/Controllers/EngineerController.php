<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Position;
use App\Group;
use App\Branch;
use App\Engineer;
class EngineerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineers = Engineer::with(['position', 'branch', 'group'])->orderBy('id', 'desc')->get();
        return view('engineer.index', compact('engineers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        $branches = Branch::all();
        $groups = Group::all();
        return view('engineer.create')->with(['groups' => $groups, 'positions' => $positions, 'branches' => $branches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eng = new Engineer();
        $eng -> name = $request -> name;
        $eng -> id_card = $request -> id_card;
        $eng -> position_id = $request -> position_id;
        $eng -> branch_id = $request -> branch_id;
        $eng -> group_id = $request -> group_id;
        $eng -> phone = $request -> phone;
        $eng -> description = $request -> description;
        if($eng -> save()){
            return redirect()->route('engineer.index');
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
        $eng = Engineer::findorFail($id);
        if($eng -> delete()){
            return redirect(route('engineer.index'))->withStatus('Record has been deleted');
        }
    }
}
