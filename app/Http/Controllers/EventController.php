<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = event::all();

        return view('event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'file' => 'required|file',
            'priority'=> 'required',
            'status' => 'required|numeric|in:1,2'
        ]);

        $imge = $request->file;
        $storeFileN = $imge->getClientOriginalName();
        $storeLocation = $_SERVER['DOCUMENT_ROOT']. '/Storage/event/';
        $imge->move($storeLocation,$storeFileN);

        $dbsl = '/Storage/event/'.$storeFileN;




        $evetn = new event();

        $evetn->title = $request->title;
        $evetn->img = $dbsl;
        $evetn->description = $request->description;
        $evetn->priority = $request->priority;
        $evetn->status = $request->status;

        $evetn->save();

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
         return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        $this->validate($request,[
            'title' => 'required',
            'file' => 'nullable|file',
            'priority'=> 'required',
            'status' => 'required|numeric|in:1,2'
        ]);

        $dbsl = $event->img;

        if ($request->hasFile('file')){

        $imge = $request->file;
        $storeFileN = $imge->getClientOriginalName();
        $storeLocation = $_SERVER['DOCUMENT_ROOT']. '/Storage/event/';
        $imge->move($storeLocation,$storeFileN);

        $dbsl = '/Storage/event/'.$storeFileN;

        @unlink(str_replace('/Storage','Storage',$event->img));
    }



        $event->title = $request->title;
        $event->img = $dbsl;
        $event->description = $request->description;
        $event->priority = $request->priority;
        $event->status = $request->status;

        $event->save();

        return back()->with('message','Create Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {

        $getev = event::count();


        if($getev > 3){
            unlink(str_replace('/Storage','Storage',$event->img));
            $event->delete();

            return redirect()->route('event.index');
        }



        return redirect()->route('event.index');



    }
}
