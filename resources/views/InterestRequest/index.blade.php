@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Interest Request  Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Interest Name </td>
                                    <td>Requested By</td>>
                                    <td>Compensation Date</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($InterestRequests as $InterestRequest)
                                <tr id="row">
                                    <td id="column">{{$InterestRequest->land_owner_id}}</td>
                                    <td id="column"> {{$InterestRequest->name}};</td>
                                    <td id="column"> {{$InterestRequest->responsibility}}</td>
                                    <td id="column"> {{$InterestRequest->created_at}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/InterestRequest/deleteInterestRequest/{{$InterestRequest->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/InterestRequest/showInterestRequest/{{$InterestRequest->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="bttn" >See detail</button>
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
