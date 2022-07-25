@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Event list</h3>

            <a href="{{route('event.create')}}" class="btn btn-info badge-success float-lg-right"> <i class="fa-solid fa-plus"></i> Add Event  </a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>SI</th>
                    <th>Title</th>
                    <th>Img</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($event as $key=> $eventData)
                <tr>
                    <td>{{$key+1}}</td>

                    <td>{{$eventData->title}}</td>

                    <td><img src="{{$eventData->img}}" alt="" width="20%"></td>

                    <td>{{$eventData->description}}</td>

                    <td>{{$eventData->Priority}}</td>

                    <td>{{($eventData->status == 1 ? 'Active' : 'De-Active')}}</td>

                    <td>
                        <a href="{{route('event.edit',$eventData->id)}}" onclick="return confirm('Are you sure Edit data?')" class="btn btn-success btn-xs"><i class="fa-solid fa-pen-to-square"></i> Edit</a>





                        <a href="{{route('event.destroy',$eventData->id)}}" class="btn btn-danger btn-xs"  onclick="event.preventDefault(); document.getElementById('deleteNews + {{$eventData->id}}').submit()";> <i class="fa-solid fa-trash-can"></i> Delete</a>

                        <form id="deleteNews + {{$eventData->id}}" action="{{route('event.destroy',$eventData->id)}}" method="POST" class="d-none">
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
