@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single House  Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>House ID : </td>
                                    <td id="column">{{$house->id}}</td>
                            </tr>
                            <tr>
                                <td>Number Of LF : </td>
                                <td id="column"> {{$house->numberOf}};</td>
                            </tr>
                            <tr>
                                <td>Current labour Cost : </td>
                                <td id="column"> {{$house->labourCost}}</td>
                            </tr>
                            <tr>
                                <td>Land ID </td>
                                <td id="column">{{$house->land_id}}</td>
                                <td>
                                    <form action="/land/showLand/{{$house->land_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Land</button>
                                    </form>
                               </td>
                            </tr>
            
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/house/deleteHouse/{{$house->id}}" method="POST">
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
