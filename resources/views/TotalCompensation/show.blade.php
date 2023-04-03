@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Total Compensation Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$TotalCompensation->project}}</td>
                                    <td>
                                    <form action="/project/showProject/{{$TotalCompensation->project}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Project </button>
                                    </form>
                               </td>
                            </tr>
                            <tr>
                                <td>Land Owner ID  : </td>
                                <td id="column"> {{$TotalCompensation->land_owner_id}};</td>
                                <td>
                                    <form action="/landOwner/showLandOwner/{{$TotalCompensation->land_owner_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See land owner </button>
                                    </form>
                               </td>
                            </tr>
                            <tr id="row">
                                    <td>Compensation Amount  : </td>
                                    <td id="column">{{$TotalCompensation->amount}}</td>
                            </tr>
                            <tr>
                                <td>Compensation Date: </td>
                                <td id="column"> {{$TotalCompensation->created_at}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/TotalCompensation/deleteTotalCompensation/{{$TotalCompensation->id}}" method="POST">
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
