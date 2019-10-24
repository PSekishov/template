<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use App\Profession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profession_id = Profession::all();
        $profession_id = $profession_id->pluck('prof','id');
        $doctor = new Doctor();
        return view('admin.doctor.create',compact('doctor','profession_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate([
//           // create Pavel
//        ]);

        $doctor = new Doctor();
        $doctor->nameDoc = $request->nameDoc;
        $doctor->surnameDoc = $request->surnameDoc;
        $doctor->slug = $request->slug;
        $doctor->imgPath = $request->filepath;
        $doctor->tel = $request->tel;
        $doctor->email = $request->email;
        $doctor->cabinet = $request->cabinet;
        $doctor->descDoc = $request->descDoc;
        $doctor->profession_id = $request->profession_id;
        $doctor->save();
        return redirect('/admin/doctor');
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
        $profession_id = Profession::all();
        $profession_id = $profession_id->pluck('prof','id');
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit',compact('doctor','profession_id'));
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
//        $this->validate([
//            // create Pavel
//        ]);

        $doctor = Doctor::find($id);
        $doctor->nameDoc = $request->nameDoc;
        $doctor->surnameDoc = $request->surnameDoc;
        $doctor->slug = $request->slug;
        $doctor->imgPath = $request->filepath;
        $doctor->tel = $request->tel;
        $doctor->email = $request->email;
        $doctor->cabinet = $request->cabinet;
        $doctor->descDoc = $request->descDoc;
        $doctor->profession_id = $request->profession_id;
        $doctor->save();
        return redirect('/admin/doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
    }
}
