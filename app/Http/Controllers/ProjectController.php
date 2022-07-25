<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobAppli = project::all();

        return view('project.index',compact('jobAppli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required',
            'file' => 'required|file',
            'Location' => 'required',
            'Type' => 'required',
            'status' => 'required | numeric|in:1,2'
        ]);


        $imge = $request->file;
        $storeFileN = $imge->getClientOriginalName();
        $storeLocation = $_SERVER['DOCUMENT_ROOT']. '/Storage/projectPhoto/';
        $imge->move($storeLocation,$storeFileN);

        $dbsl = '/Storage/projectPhoto/'.$storeFileN;

        $jobdata = new project();

        $jobdata->title = $request->title;
        $jobdata->Type = $request->Type;
        $jobdata->img = $dbsl;
        $jobdata->location_data = $request->Location;
        $jobdata->status = $request->status;

        $jobdata->save();

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobAppli = project::find($id);

        return view('project.edit',compact('jobAppli'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $jobdata = project::find($id);



        $this->validate($request, [
            'title' => 'required',
            'file' => 'nullable|file',
            'Location' => 'required',
            'Type' => 'required',
            'status' => 'required | numeric|in:1,2'
        ]);




        $dbsl = $jobdata->img;

        if ($request->hasFile('file')){

            $imge = $request->file;
            $storeFileN = $imge->getClientOriginalName();
            $storeLocation = $_SERVER['DOCUMENT_ROOT']. '/Storage/projectPhoto/';
            $imge->move($storeLocation,$storeFileN);

            $dbsl = '/Storage/projectPhoto/'.$storeFileN;

            @unlink(str_replace('/Storage','Storage',$jobdata->img));
        }


        $jobdata->title = $request->title;
        $jobdata->img = $dbsl;
        $jobdata->Type = $request->Type;
        $jobdata->location_data = $request->Location;
        $jobdata->status = $request->status;

        $jobdata->save();

        return back()->with('message','Create Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = project::find($id);

        $project->delete();

        return redirect()->route('project.index');




    }
}
