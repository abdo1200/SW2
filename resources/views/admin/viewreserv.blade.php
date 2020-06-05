@extends('layouts.app')

@section('content')

<div class="container-fluid" >
    <div class="row justify-content-center" style="background-color:steelblue">
        <div class="my-5 col-10 text-center">
            <table class="my-5 table table-dark">
                <thead >
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">USER ID</th>
                    <th scope="col">ROOM TYPE</th>
                    <th scope="col">MEAL PLAN</th>
                    <th scope="col">ROOM ID</th>
                    <th scope="col">CHECK IN</th>
                    <th scope="col">CHECK OUT</th>
                    <th scope="col">DELETE RESERVATION</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($res as $re)
                  <tr>
                    <th scope="row">{{$re->id}}</th>
                    <td>{{$re->user_name}}</td>
                    <td>{{$re->user_id}}</td>
                    <td>{{$re->roomtype}}</td>
                    <td>{{$re->mealplan}}</td>
                    <td>{{$re->rooms_id}}</td>
                    <td>{{$re->checkin}}</td>
                    <td>{{$re->checkout}}</td>
                    <td>
                        <form method="POST" action="{{'/admin/viewreserv.blade.php/'. $re->id }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection