<?php

namespace App\Http\Controllers;

use App\Models\AssetAssignment;
use App\Http\Resources\AssetAssignmentResource;
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
        return AssetAssignmentResource::collection(AssetAssignment::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssetAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetAssignmentRequest $request)
    {
        $assetAssignment = AssetAssignment::create($request->all());

        return new AssetAssignmentResource($assetAssignment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetAssignment  $assetAssignment
     * @return \Illuminate\Http\Response
     */
    public function show(AssetAssignment $assetAssignment)
    {
        return new AssetAssignmentResource($assetAssignment);
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
        $assetAssignment->update($request->all());

        return $assetAssignment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetAssignment  $assetAssignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetAssignment $assetAssignment)
    {
        $assetAssignment->delete();

        return response('Asset Assignment deleted', 204);
    }
}
