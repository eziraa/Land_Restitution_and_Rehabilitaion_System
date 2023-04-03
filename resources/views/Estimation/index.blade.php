@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Estimation Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner Name </td>
                                    <td>Project Name </td>
                                    <td>Compensation Amount</td>
                                    <td>Check Estimation</td>
                                    <td>Estimation Date</td>
                                    <td>Estimated By</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($Estimations as $Estimation)
                                <tr id="row">
                                    @foreach($landOwner as $temp)
                                    @if($temp->id == $Estimation->land_owner_id)
                                    <td id="column">{{$temp->Name}}</td>
                                    @endif
                                    @endforeach
                                    <td id="column"> {{$Estimation->project}};</td>
                                    <td id="column"> {{$Estimation->amount}}</td>
                                    <td id="column"> {{$Estimation->check}}</td>
                                    <td id="column"> {{$Estimation->created_at}}</td>
                                    <td id="column"> {{$Estimation->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Estimation/deleteEstimation/{{$Estimation->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/Estimation/showEstimation/{{$Estimation->id}}" method="GET">
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
