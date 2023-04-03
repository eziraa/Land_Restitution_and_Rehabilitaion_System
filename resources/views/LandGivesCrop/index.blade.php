@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Crop  Information With land</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Crop Name </td>
                                    <td>This Year Product</td>
                                    <td>Last Year Product</td>
                                    <td>Two years Ago product</td>
                                    <td>Land ID</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($landGivesCrops as $landGivesCrop)
                                <tr id="row">
                                    <td id="column">{{$landGivesCrop->name}}</td>
                                    <td id="column"> {{$landGivesCrop->this}};</td>
                                    <td id="column"> {{$landGivesCrop->last}}</td>
                                    <td id="column">{{$landGivesCrop->two}}</td>
                                    <td id="column">{{$landGivesCrop->land_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landGivesCrop/deleteLandGivesCrop/{{$landGivesCrop->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/landGivesCrop/showLandGivesCrop/{{$landGivesCrop->name}}" method="GET">
                                        @csrf
                                        @method('get')
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
@endsection
