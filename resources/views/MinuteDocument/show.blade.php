@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Minute Document Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$MinuteDocument->project}}</td>
                                    <td>
                                    <form action="/project/showProject/{{$MinuteDocument->project}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Project </button>
                                    </form>
                               </td>
                            </tr>
                            <tr id="row">
                                    <td>Land Owner ID  : </td>
                                    <td id="column">{{$MinuteDocument->land_owner_id}}</td>
                                    <td>
                                    <form action="/landOwner/showLandOwner/{{$MinuteDocument->land_owner_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See land owner </button>
                                    </form>
                               </td>
                            </tr>
                            <tr>
                                <td>MinuteDocument Reason  : </td>
                                <td id="column"> {{$MinuteDocument->type}};</td>
                            </tr>
                            <tr>
                                <td>MinuteDocument Date: </td>
                                <td id="column"> {{$MinuteDocument->created_at}};</td>
                            </tr><tr id="row">
                                    <td>Held By : </td>
                                    <td id="column">{{$MinuteDocument->responsibility}}</td>
                            </tr>
                            <tr>
                                <td>Check Presence : </td>
                                <td id="column"> {{$MinuteDocument->check}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/MinuteDocument/deleteMinuteDocument/{{$MinuteDocument->id}}" method="POST">
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
