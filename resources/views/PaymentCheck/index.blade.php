@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Payment check Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Project Name </td>
                                    <td>Compensation Amount</td>
                                    <td>Check Payment</td>
                                    <td>Payment Date</td>
                                    <td>Checked By</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($PaymentChecks as $PaymentCheck)
                                <tr id="row">
                                    <td id="column">{{$PaymentCheck->land_owner_id}}</td>
                                    <td id="column"> {{$PaymentCheck->project}};</td>
                                    <td id="column"> {{$PaymentCheck->amount}}</td>
                                    <td id="column"> {{$PaymentCheck->check}}</td>
                                    <td id="column"> {{$PaymentCheck->created_at}}</td>
                                    <td id="column"> {{$PaymentCheck->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/PaymentCheck/deletePaymentCheck/{{$PaymentCheck->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/PaymentCheck/showPaymentCheck/{{$PaymentCheck->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="bttn" >See detail</button>
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
