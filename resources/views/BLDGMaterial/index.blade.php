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
                                    <td>Building Material Name </td>
                                    <td>Current Material Price</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($BLDGMaterials as $BLDGMaterial)
                                <tr id="row">
                                    <td id="column">{{$BLDGMaterial->name}}</td>
                                    <td id="column"> {{$BLDGMaterial->price}};</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/BLDGMaterial/deleteBLDGMaterial/{{$BLDGMaterial->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/BLDGMaterial/showBLDGMaterial/{{$BLDGMaterial->id}}" method="GET">
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
                        <div class="msg">{{$msg}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
