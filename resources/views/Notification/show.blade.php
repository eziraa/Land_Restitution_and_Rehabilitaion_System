@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Notification Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$Notification->project}}</td>
                                    <td id="column">
                                    <form action="/project/showProject/{{$Notification->project}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Project </button>
                                    </form>
                                    </td>  
                            </tr>
                            <tr>
                                <td>Notification Reason  : </td>
                                <td id="column"> {{$Notification->reason}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Received Or Not  : </td>
                                    <td id="column">{{$Notification->received}}</td>
                            </tr>
                            <tr>
                                <td>Notification Date: </td>
                                <td id="column"> {{$Notification->created_at}};</td>
                            </tr>
                                <tr id="row">
                                    <td>Land Owner ID : </td>
                                    <td id="column">{{$Notification->land_owner_id}}</td>
                                    <td id="column">
                                    <form action="/landOwner/showLandOwner/{{$Notification->land_owner_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Land Owner </button>
                                    </form>
                                    </td>
                            </tr>
                            <tr>
                                <td>Notified By: </td>
                                <td id="column"> {{$Notification->responsibility}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Notification/deleteNotification/{{$Notification->id}}" method="POST">
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
