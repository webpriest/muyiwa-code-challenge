<?php

namespace App\Http\Controllers;

use App\Models\AssetAssignment;
use App\Http\Requests\StoreAssetAssignmentRequest;
use App\Http\Requests\UpdateAssetAssignmentRequest;

class AssetAssignmentController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssetAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetAssignmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetAssignment  $assetAssignment
     * @return \Illuminate\Http\Response
     */
    public function show(AssetAssignment $assetAssignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetAssignmentRequest  $request
     * @param  \App\Models\AssetAssignment  $assetAssignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetAssignmentRequest $request, AssetAssignment $assetAssignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetAssignment  $assetAssignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetAssignment $assetAssignment)
    {
        //
    }
}
