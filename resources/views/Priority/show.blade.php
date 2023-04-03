@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Priority Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                            <td>Land Owner ID </td>
                            <td id="column">{{$Priority->land_owner_id}}</td>
                            </tr>
                            <tr>
                                <td>City Land Area   : </td>
                                <td id="column"> {{$Priority->area}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Reason For the land : </td>
                                    <td id="column">{{$Priority->reason}}</td>
                            </tr>
                            <tr>
                                <td>Disability: </td>
                                <td id="column"> {{$Priority->desability}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Priority/deletePriority/{{$Priority->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="bttn" >Update</button>
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
