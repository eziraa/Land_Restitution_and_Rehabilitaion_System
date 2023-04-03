@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Land Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>House ID </td>
                                    <td>Number Of LF</td>
                                    <td>Current Labour Cost</td>
                                    <td>Land ID</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($houses as $house)
                                <tr id="row">
                                    <td id="column">{{$house->id}}</td>
                                    <td id="column"> {{$house->numberOf}};</td>
                                    <td id="column"> {{$house->labourCost}}</td>
                                    <td id="column">{{$house->land_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/house/deleteHouse/{{$house->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/house/showHouse/{{$house->id}}" method="GET">
                                        @csrf
                                        @method('POST')
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
                  <div class="msg">{{$mssg}}</div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
