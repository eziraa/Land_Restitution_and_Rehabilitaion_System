@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Address Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Region : </td>
                                    <td id="column">{{$address->region}}</td>
                            </tr>
                            <tr>
                                <td>Zone : </td>
                                <td id="column"> {{$address->zone}};</td>
                            </tr>
                            <tr>
                                <td>Wereda : </td>
                                <td id="column"> {{$address->wereda}}</td>
                            </tr>
                            <tr>
                                <td>Kebele </td>
                                <td id="column">{{$address->kebele}}</td>
                            </tr>
                            <tr>
                                <td>Sub Kebele</td>
                                <td id="column">{{$address->subKebele}}</td>
                               
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/address/deleteAddress/{{$address->id}}" method="POST">
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
