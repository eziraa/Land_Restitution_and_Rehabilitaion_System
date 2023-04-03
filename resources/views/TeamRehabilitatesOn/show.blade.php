@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Rehablitation Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Team Name : </td>
                                    <td id="column">{{$TeamRehabilitatesOn->team}}</td>
                            </tr>
                            <tr>
                                <td>Land Owner ID  : </td>
                                <td id="column"> {{$TeamRehabilitatesOn->land_owner_id}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Governmental Budget Support: </td>
                                    <td id="column">{{$TeamRehabilitatesOn->budget}}</td>
                            </tr>
                            <tr id="row">
                                    <td>Managed By : </td>
                                    <td id="column">{{$TeamRehabilitatesOn->responsibility}}</td>
                            </tr>
                            <tr>
                                <td>Expert Advice : </td>
                                <td id="column"> {{$TeamRehabilitatesOn->expert}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/TeamRehabilitatesOn/deleteTeamRehabilitatesOn/{{$TeamRehabilitatesOn->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="bttn" >Update</button>
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
