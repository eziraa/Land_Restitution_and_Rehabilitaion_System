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
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Type </td>
                                    <td>Land Use</td>
                                    <td>Land Area</td>
                                    <td>Land Owner ID</td>
                                    <td>Sub Kebele</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($lands as $land)
                                <tr id="row">
                                    <td id="column">{{$land->type}}</td>
                                    <td id="column"> {{$land->use}};</td>
                                    <td id="column"> {{$land->area}}</td>
                                    <td id="column">{{$land->landOwner_id}}</td>
                                    <td id="column">{{$land->sub_kebele}}</td>
                                    <!-- <td id="column">{{$land->id}}</td> -->
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/land/deleteLand/{{$land->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    @endif
                                    </td>
                                    <td id="column"><form action="/land/showLand/{{$land->id}}" method="GET">
                                        @csrf
                                        @method('POST')
                                        <button id="btn" >See detail</button>
                                    </form> 
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                  
                    <div class="mssg">
                <div class="msg">{{$msg}}</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
