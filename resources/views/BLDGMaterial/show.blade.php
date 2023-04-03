@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single BLDGMaterial  Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>BLDGMaterial Name : </td>
                                    <td id="column">{{$BLDGMaterial->name}}</td>
                            </tr>
                            <tr>
                                <td>Material Current Price : </td>
                                <td id="column"> {{$BLDGMaterial->price}};</td>
                            </tr>            
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/BLDGMaterial/deleteBLDGMaterial/{{$BLDGMaterial->id}}" method="POST">
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
</div>
@endsection
