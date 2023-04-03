@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Team Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">                              
                                    <td>Team Name</td>
                                    <td>Number Of Land Owners </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($Teams as $Team)
                                <tr id="row">
                                    <td id="column">{{$Team->team}}</td>
                                    <td id="column"> {{$Team->number}};</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Team/deleteTeam/{{$Team->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/Team/showTeam/{{$Team->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See detail</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
