@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Count Property Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$CountProperty->project}}</td>
                            </tr>
                            <tr>
                                <td>Land Owner ID  : </td>
                                <td id="column"> {{$CountProperty->land_owner_id}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Check Counting : </td>
                                    <td id="column">{{$CountProperty->check}}</td>
                            </tr>
                            <tr>
                                <td>Property Counting Date: </td>
                                <td id="column"> {{$CountProperty->created_at}};</td>
                            </tr><tr id="row">
                                    <td>Held By : </td>
                                    <td id="column">{{$CountProperty->responsibility}}</td>
                            </tr>
                            <tr>
                                <td>Representative : </td>
                                <td id="column"> {{$CountProperty->representative_id}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/CountProperty/deleteCountProperty/{{$CountProperty->id}}" method="POST">
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
