<?php

namespace App\Http\Controllers;

use App\Jiries;
use Illuminate\Http\Request;

class JiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Jiries::all();
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
        $data = $request->validate([
            'course_name'  => 'required|max:25',
            'academic_year' => 'required|max:4|min:4',
            'exam_session' => 'required',
            'date_event' => 'required',
        ]);

        $jiries = Jiries::create($data);

        return response()->json($jiries,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jiries  $jiries
     * @return \Illuminate\Http\Response
     */
    public function show(Jiries $jiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jiries  $jiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Jiries $jiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jiries  $jiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jiries $jiries)
    {
        $this->validate($request, [
            'course_name'  => 'required|max:25',
            'academic_year' => 'required|max:4|min:4',
            'exam_session' => 'required',
            'date_event' => 'required',
        ]);

        $jiries = Jiries::findOrFail(request('id'));
        $jiries->update([
            'course_name'  => 'required|max:25',
            'academic_year' => 'required|max:4|min:4',
            'exam_session' => 'required',
            'date_event' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jiries  $jiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jiries $jiries)
    {
        $jiries->delete();

        return response()->json(['message' => 'Deleted jiries item'], 200);
    }
}
