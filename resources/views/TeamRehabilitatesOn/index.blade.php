@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Team Rehabilitation Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Team Name </td>
                                    <td>Expert Adivce </td>
                                    <td>Governmental Budget Support</td>
                                    <td>Managed By</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($TeamRehabilitatesOns as $TeamRehabilitatesOn)
                                <tr id="row">
                                    <td id="column">{{$TeamRehabilitatesOn->land_owner_id}}</td>
                                    <td id="column"> {{$TeamRehabilitatesOn->team}};</td>
                                    <td id="column"> {{$TeamRehabilitatesOn->expert}}</td>
                                    <td id="column"> {{$TeamRehabilitatesOn->budget}}</td>
                                    <td id="column"> {{$TeamRehabilitatesOn->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/TeamRehabilitatesOn/deleteTeamRehabilitatesOn/{{$TeamRehabilitatesOn->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/TeamRehabilitatesOn/showTeamRehabilitatesOn/{{$TeamRehabilitatesOn->id}}" method="GET">
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
