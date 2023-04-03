@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Interest Request Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Interest Name : </td>
                                    <td id="column">{{$InterestRequest->name}}</td>
                            </tr>
                            <tr>
                                <td>Land Owner ID  : </td>
                                <td id="column"> {{$InterestRequest->land_owner_id}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Requested By  : </td>
                                    <td id="column">{{$InterestRequest->responsibility}}</td>
                            </tr>
                            <tr>
                                <td>Request  Date: </td>
                                <td id="column"> {{$InterestRequest->created_at}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/InterestRequest/deleteInterestRequest/{{$InterestRequest->id}}" method="POST">
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
