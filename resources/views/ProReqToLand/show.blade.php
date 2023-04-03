@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Request Info  Plant Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$ProReqToLand->name}}</td>
                            </tr>
                            <tr>
                                <td>Land Recoverability : </td>
                                <td id="column"> {{$ProReqToLand->recover}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Urgency  : </td>
                                    <td id="column">{{$ProReqToLand->urgency}}</td>
                            </tr>
                            <tr>
                                <td>Duration: </td>
                                <td id="column"> {{$ProReqToLand->duration}};</td>
                            </tr><tr id="row">
                                    <td>Area : </td>
                                    <td id="column">{{$ProReqToLand->area}}</td>
                            </tr>
                            <tr>
                                <td>Responsed By: </td>
                                <td id="column"> {{$ProReqToLand->responsibility}};</td>
                            </tr><tr id="row">
                                    <td>Sub - Kebele : </td>
                                    <td id="column">{{$ProReqToLand->sub_kebele}}</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/ProReqToLand/deleteProReqToLand/{{$ProReqToLand->id}}" method="POST">
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
