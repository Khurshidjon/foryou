<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Tank;
use App\UploadTank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function buy()
    {
        $tanks = Tank::latest()->paginate(6);

        return view('store', ['tanks'=>$tanks]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('saletank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UploadRequest $uploadRequest)
    {
        $tanks = new Tank;

            $tanks->tiers = $request->get('tiers1');
            $tanks->tanks = $request->get('tanks1');
            $tanks->deamont = $request->deamont;
            $tanks->cash = $request->cash;
            $tanks->armory = $request->armony;
            $tanks->tech = $request->tech;
            $tanks->elite = $request->elite;
            $tanks->platform = Input::get('rr');
            $tanks->price = $request->price;
            $tanks->siller_name = $request->name;
            $tanks->phone_number = $request->phone;
            $tanks->country = $request->get('country');
            $tanks->region = $request->get('region');
            $tanks->guarantor = $request->get('guarantor');
            $tanks->metting = $request->get('metting');
            $tanks->plans = Input::get('plans');
            $tanks->save();
        foreach ($uploadRequest->photos as $item) {
            $filename = $item->store('images', 'public');
            UploadTank::create([
                'filename'=>$filename,
                'tank_id'=>$tanks->id,
            ]);
        }
        return redirect()->route('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function show(Tank $tank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Tank $tank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tank $tank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tank $tank)
    {
        //
    }
}
