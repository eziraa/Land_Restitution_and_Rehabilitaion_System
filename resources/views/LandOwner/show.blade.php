@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>LandOwner Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner Name : </td>
                                    <td id="column">{{$landOwner->Name}}</td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td id="column"> {{$landOwner->gender}};</td>
                            </tr>
                            <tr>
                                <td>Age : </td>
                                <td id="column"> {{$landOwner->age}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td id="column">{{$landOwner->phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Sub Kebele</td>
                                <td id="column">{{$landOwner->sub_kebele}}</td>
                                <td id="column">
                                    <form action="/address/showAddress/{{$landOwner->sub_kebele}}" method="GET">
                                       @csrf
                                       @method('GET')
                                       <button id="btn" >See Address</button>
                                     </form> 
                                </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landOwner/deleteLandOwner/{{$landOwner->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >Update</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
