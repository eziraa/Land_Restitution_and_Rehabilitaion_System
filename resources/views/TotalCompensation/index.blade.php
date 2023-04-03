@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Total Compensation Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Project Name </td>
                                    <td>Compensation Amount</td>>
                                    <td>Compensation Date</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($TotalCompensations as $TotalCompensation)
                                <tr id="row">
                                    <td id="column">{{$TotalCompensation->land_owner_id}}</td>
                                    <td id="column"> {{$TotalCompensation->project}};</td>
                                    <td id="column"> {{$TotalCompensation->amount}}</td>
                                    <td id="column"> {{$TotalCompensation->created_at}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/TotalCompensation/deleteTotalCompensation/{{$TotalCompensation->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/TotalCompensation/showTotalCompensation/{{$TotalCompensation->id}}" method="GET">
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
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
