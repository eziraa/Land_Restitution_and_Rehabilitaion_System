@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>LandOwner Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner Name </td>
                                    <td>Gender</td>
                                    <td>Age</td>
                                    <td>Phone Number</td>
                                    <td>Sub Kebele</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($landOwners as $landOwner)
                                <tr id="row">
                                    <td id="column">{{$landOwner->Name}}</td>
                                    <td id="column"> {{$landOwner->gender}};</td>
                                    <td id="column"> {{$landOwner->age}}</td>
                                    <td id="column">{{$landOwner->phone_number}}</td>
                                    <td id="column">{{$landOwner->sub_kebele}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landOwner/deleteLandOwner/{{$landOwner->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/landOwner/showLandOwner/{{$landOwner->id}}" method="GET">
                                        @csrf
                                        @method('POST')
                                        <button id="btn" >See detail</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                  
                    <div class="mssg">
                     <div class="msg">{{$msg}}</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
