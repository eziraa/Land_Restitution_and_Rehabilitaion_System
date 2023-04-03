@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Directorate Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Directorate Name </td>
                                    <td>email</td>
                                    <td>Phone Number</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($RPRDirectorates as $RPRDirectorate)
                                <tr id="row">
                                    <td id="column">{{$RPRDirectorate->name}}</td>
                                    <td id="column"> {{$RPRDirectorate->email}};</td>
                                    <td id="column"> {{$RPRDirectorate->phone}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/RPRDirectorate/deleteRPRDirectorate/{{$RPRDirectorate->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/RPRDirectorate/showRPRDirectorate/{{$RPRDirectorate->id}}" method="GET">
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
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
