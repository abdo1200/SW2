@extends('layouts.app')

@section('content')

<div class="container-fluid" style="background-color:steelblue">
    <div class="row justify-content-center">
        <div class="mt-5 col-6 text-center">
            <table class="my-5 table table-bordered table-dark">
                <tbody>
                  <tr>
                    <th scope="row">NAME</th>
                    <td colspan="3">{{$user->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">EMAIL</th>
                    <td colspan="2">{{$user->email}}</td>
                  </tr>
                  <tr>
                    <th scope="row">PHONE NUMBER</th>
                    <td colspan="2">{{$user->phonenumber}}</td>
                  </tr>
                  <tr>
                    <th scope="row">COUNTRY</th>
                    <td colspan="2">{{$user->Country}}</td>
                  </tr>
                  <tr>
                    <th scope="row">CREATED AT</th>
                    <td colspan="2">{{$user->created_at}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <div class="row mt-3  justify-content-center">
        <div class="col-1 mb-5">
            <a href="editprofile.blade.php">
                <button type="submit" class="btn btn-success">
                    Edit
                </button>
            </a>
        </div>
    </div>
</div>

@endsection