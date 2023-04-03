@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Movable Property Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Property Name : </td>
                                    <td id="column">{{$movableProperty->name}}</td>
                            </tr>
                            <tr>
                                <td>Uprooting Expense : </td>
                                <td id="column"> {{$movableProperty->uprooting}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Preservation Expense : </td>
                                    <td id="column">{{$movableProperty->transport}}</td>
                            </tr>
                            <tr>
                                <td>Installing Expense : </td>
                                <td id="column"> {{$movableProperty->installing}};</td>
                            </tr>
                            <tr>
                                <td>Recovery Expense : </td>
                                <td id="column"> {{$movableProperty->recovery}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Land ID : </td>
                                    <td id="column">{{$movableProperty->land_id}}</td>
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/land/showLand/{{$movableProperty->land_id}}" method="get">
                                        @csrf
                                        @method('get')
                                        <button id="btn" >See Land</button>
                                    </form>
                                    @endif
                                    </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/movableProperty/deleteMovableProperty/{{$movableProperty->id}}" method="POST">
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
