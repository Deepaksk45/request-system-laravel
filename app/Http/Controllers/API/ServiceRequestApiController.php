<?php

namespace App\Http\Controllers\API;

use App\Models\ServiceRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ServiceRequestResource;
use GuzzleHttp\Psr7\Message;

class ServiceRequestApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return ServiceRequestResource::collection(ServiceRequest::paginate(25));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $serviceRequest = ServiceRequest::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'assigned_to' => $request->assigned_to,
            'actions' => $request->actions,
            'duration' => $request->duration,
            'description' => $request->description,
        ]);
        return new ServiceRequestResource($serviceRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        //
        // dd($request);
        return new ServiceRequestResource(ServiceRequest::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $serviceRequest = ServiceRequest::find($id);
        $serviceRequest->update($request->only(['title', 'description']));
        return new ServiceRequestResource($serviceRequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $serviceRequest = ServiceRequest::find($id);
        $serviceRequest->delete();
        return response()->json(array(
            "data" => [],
            "message" => "Item Deleted"
        ));
    }
}
