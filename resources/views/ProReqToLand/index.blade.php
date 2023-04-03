@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Land Request Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name </td>
                                    <td>Urgency</td>
                                    <td>Land Recoverability</td>
                                    <td>Duration</td>
                                    <td> Area </td> 
                                    <td>Responsed By</td>
                                    <td> Sub - Kebele </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($ProReqToLands as $ProReqToLand)
                                <tr id="row">
                                    <td id="column">{{$ProReqToLand->project}}</td>
                                    <td id="column"> {{$ProReqToLand->urgency}};</td>
                                    <td id="column"> {{$ProReqToLand->recover}}</td>
                                    <td id="column"> {{$ProReqToLand->duration}}</td>
                                    <td id="column"> {{$ProReqToLand->area}}</td>
                                    <td id="column"> {{$ProReqToLand->responsibility}}</td>
                                    <td id="column"> {{$ProReqToLand->sub_kebele}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/ProReqToLand/deleteProReqToLand/{{$ProReqToLand->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column">
                                    <form action="/Answer/{{$ProReqToLand->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >Answer</button>
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
