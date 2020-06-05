@extends('layouts.app')

@section('content')

<div class="container-fluid" >
    <div class="row justify-content-center" style="background-color:steelblue">
        <div class="my-5 col-8 text-center">
            <table class="my-5 table table-dark">
                <thead >
                  <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CREATED-AT</th>
                    <th scope="col">DELETE USER</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    @if(!$user->admin)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <form method="POST" action="{{'/admin/'. $user->id }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endif
                  @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
