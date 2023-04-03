@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Crop Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Crop ID </td>
                                    <td>Crop Name</td>
                                    <td>Crop Current Price</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($crops as $crop)
                                <tr id="row">
                                    <td id="column">{{$crop->id}}</td>
                                    <td id="column"> {{$crop->name}};</td>
                                    <td id="column"> {{$crop->price}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/crop/deleteCrop/{{$crop->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/crop/showCrop/{{$crop->id}}" method="GET">
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
                    <div class="msg">{{$msg}}</div>
                  </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
