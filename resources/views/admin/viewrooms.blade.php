@extends('layouts.app')

@section('content')

<div class="container-fluid" >
    <div class="row justify-content-center" style="background-color:steelblue">
        <div class="my-5 col-10 text-center">
            <table class="my-5 table table-dark">
                <thead >
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">CHANGE</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                  <tr>
                    <th scope="row">{{$room->id}}</th>
                    <td>{{$room->type}}</td>
                    <td>{{$room->status}}</td>
                    @if($room->status=='busy')
                    <td>
                        <form method="POST" action="{{'/admin/viewrooms.blade.php/'. $room->id }}">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-success">Make available</button>
                        </form>
                    </td>
                    @else
                    <td>
                        <form method="POST" action="{{'/admin/viewrooms.blade.php/'. $room->id }}">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-primary">Make busy</button>
                        </form>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection