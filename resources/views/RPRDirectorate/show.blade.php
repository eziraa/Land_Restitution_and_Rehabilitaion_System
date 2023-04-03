@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single Directorate Info Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Directore Name : </td>
                                    <td id="column">{{$RPRDirectorate->Name}}</td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td id="column"> {{$RPRDirectorate->email}};</td>
                            </tr>
                            <tr>
                                <td>Phone Number : </td>
                                <td id="column"> {{$RPRDirectorate->phone}}</td>
                            </tr> 
                            <tr>
                                <td id="column">{{$RPRDirectorate->landOwner_id}}</td>
                                <td>
                                    <form action="/responsibility/seeResponsibility" method="GET">
                                       @csrf
                                       @method('GET')
                                       <button id="btn" >See Employees</button>
                                     </form> 
                                </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/RPRDirectorate/deleteRPRDirectorate/{{$RPRDirectorate->id}}" method="POST">
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
