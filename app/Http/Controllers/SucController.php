<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucRequest;
use App\Models\Suc;
use Illuminate\Http\Request;

class SucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('sucs.index');
        
        $sucs = Suc::query()->get();
        return view('sucs.index', [
            'sucs' => $sucs
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sucs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SucRequest $request)
    {
        Suc::query()->create($request->all());

        return redirect('/sucs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suc = Suc::query()->find($id);
        return view('sucs.edit', [
            'suc' => $suc
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SucRequest $request, string $id)
    {
        $suc = Suc::query()->find($id);

        $suc->update([
            'name' => $request->name,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'website' => $request->website,
            'contact' => $request->contact,
        ]);

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Suc::query()->find($id)->delete();

        return redirect()->back();
    }
}
