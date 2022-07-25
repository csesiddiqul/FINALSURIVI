@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Project List</h3>

            <a href="{{route('project.create')}}" class="btn btn-info badge-success float-lg-right"> <i class="fa-solid fa-plus"></i> Add Project</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>SI</th>
                    <th>Title</th>
                    <th>img</th>
                    <th>location</th>
                    <th>type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($jobAppli as $key=> $jobApplidata)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$jobApplidata->title}}</td>
                        <td><img src="{{$jobApplidata->img}}" alt="" width="20%"></td>
                        <td>{{$jobApplidata->location_data}}</td>
                        <td>{{$jobApplidata->Type}}</td>

                        <td>{{($jobApplidata->status == 1 ? 'Active' : 'De-Active')}}</td>
                        <td>
                            <a href="{{route('project.edit',$jobApplidata->id)}}" class="btn btn-success btn-xs"><i class="fa-solid fa-pen-to-square"></i> Edit</a>


                            <a href="{{route('project.destroy',$jobApplidata->id)}}" class="btn btn-danger btn-xs"  onclick="event.preventDefault(); document.getElementById('deleteService + {{$jobApplidata->id}}').submit()";> <i class="fa-solid fa-trash-can"></i> Delete</a>

                            <form id="deleteService + {{$jobApplidata->id}}" action="{{route('project.destroy',$jobApplidata->id)}}" method="POST" class="d-none">
                                @csrf

                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
