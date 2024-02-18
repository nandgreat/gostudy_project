<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonationItemsRequest;
use App\Http\Requests\UpdateDonationItemsRequest;
use App\Models\DonationItems;

class DonationItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDonationItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonationItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonationItems  $donationItems
     * @return \Illuminate\Http\Response
     */
    public function show(DonationItems $donationItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonationItems  $donationItems
     * @return \Illuminate\Http\Response
     */
    public function edit(DonationItems $donationItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonationItemsRequest  $request
     * @param  \App\Models\DonationItems  $donationItems
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationItemsRequest $request, DonationItems $donationItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonationItems  $donationItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonationItems $donationItems)
    {
        //
    }
}
