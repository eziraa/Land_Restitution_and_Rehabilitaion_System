@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>CountProperty Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Project Name </td>
                                    <td>Representative ID</td>
                                    <td>Check Counting</td>
                                    <td>Counting Date</td>
                                    <td>Counted By</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($CountPropertys as $CountProperty)
                                <tr id="row">
                                    <td id="column">{{$CountProperty->land_owner_id}}</td>
                                    <td id="column"> {{$CountProperty->project}};</td>
                                    <td id="column"> {{$CountProperty->representative_id}}</td>
                                    <td id="column"> {{$CountProperty->check}}</td>
                                    <td id="column"> {{$CountProperty->created_at}}</td>
                                    <td id="column"> {{$CountProperty->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/CountProperty/deleteCountProperty/{{$CountProperty->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/CountProperty/showCountProperty/{{$CountProperty->id}}" method="GET">
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
                    <div class="mssg">
        <div class="msg">{{session('msg')}}</div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
