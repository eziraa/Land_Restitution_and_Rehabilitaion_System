@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Crop Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Crop Name : </td>
                                    <td id="column">{{$landGivesCrop->name}}</td>
                            </tr>
                            <tr>
                                <td>This Year Product : </td>
                                <td id="column"> {{$landGivesCrop->this}};</td>
                            </tr>
                            <tr>
                                <td>Last Year Product : </td>
                                <td id="column"> {{$landGivesCrop->last}}</td>
                            </tr>
                            <tr>
                                <td>Two years ago Product</td>
                                <td id="column">{{$landGivesCrop->two}}</td>
                            </tr>
                            <tr>
                                <td>Land ID : </td>
                                <td id="column">{{$landGivesCrop->land_id}}</td>
                            </tr>
                                <td>
                                    <form action="/land/showLand/{{$landGivesCrop->land_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Land</button>
                                    </form>
                               </td>
                            </tr>
                           
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landGivesCrop/deleteLand/{{$landGivesCrop->id}}" method="POST">
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
