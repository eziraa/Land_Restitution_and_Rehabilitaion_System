@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Productive Plant Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Plant Name : </td>
                                    <td id="column">{{$productivePlant->name}}</td>
                            </tr>
                            <tr>
                                <td>Low level Price : </td>
                                <td id="column"> ${{$productivePlant->Lprice}}</td>
                            </tr>
                            <tr id="row">
                                    <td>Midium Level Price : </td>
                                    <td id="column">${{$productivePlant->Mprice}}</td>
                            </tr>
                            <tr>
                                <td>High Level Price : </td>
                                <td id="column"> ${{$productivePlant->Hprice}}</td>
                            </tr><tr id="row">
                                     
                        </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/productivePlant/deleteProductivePlant/{{$productivePlant->id}}" method="POST">
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
