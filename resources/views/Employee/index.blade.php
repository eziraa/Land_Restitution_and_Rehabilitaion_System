@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Emplyee Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Employee Name </td>
                                    <td>Gender</td>
                                    <td>Phone Number</td>
                                    <td>Job</td>
                                    <td>Email</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($Employees as $Employee)
                                <tr id="row">
                                    <td id="column">{{$Employee->Name}}</td>
                                    <td id="column"> {{$Employee->gender}};</td>
                                    <td id="column">{{$Employee->phone_number}}</td>
                                    <td id="column">{{$Employee->job}}</td>
                                    <td id="column">{{$Employee->email}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Employee/deleteEmployee/{{$Employee->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <!-- <td id="column"><form action="/landOwner/showLandOwner/{{$Employee->id}}" method="GET">
                                        @csrf
                                        @method('POST')
                                        <button id="btn" >See detail</button>
                                    </form>  -->
                                    @endif
                                    <!-- </td> -->
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                                    
                                    
                    <div class="mssg">{{session('mssg')}}
                        <div class="msg">{{session('msg')}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
