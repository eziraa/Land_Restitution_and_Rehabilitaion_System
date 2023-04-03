@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Notification Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <div class="table">
                                <table class="">
                                <tr id="row">
                                        <td>Project Name </td>
                                        <td>Notification Reason</td>
                                        <td>Received Or Not</td>
                                        <td>Notification Date</td>
                                        <td> Land Owner ID </td> 
                                        <td>Notified By</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @foreach($Notifications as $Notification)
                                    <tr id="row">
                                        <td id="column">{{$Notification->project}}</td>
                                        <td id="column"> {{$Notification->reason}};</td>
                                        <td id="column"> {{$Notification->received}}</td>
                                        <td id="column"> {{$Notification->created_at}}</td>
                                        <td id="column"> {{$Notification->land_owner_id}}</td>
                                        <td id="column"> {{$Notification->responsibility}}</td>
                                        <td id="column">
                                        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                        <form action="/Notification/deleteNotification/{{$Notification->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button id="btn" >Remove</button>
                                        </form>
                                        </td>
                                        <td id="column"><form action="/Notification/showNotification/{{$Notification->id}}" method="GET">
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
</div>
@endsection
