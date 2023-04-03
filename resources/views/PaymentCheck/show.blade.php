@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Single Paymnent Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name : </td>
                                    <td id="column">{{$PaymentCheck->project}}</td>
                            </tr>
                            <tr>
                                <td>Land Owner ID  : </td>
                                <td id="column"> {{$PaymentCheck->land_owner_id}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Check Payment: </td>
                                    <td id="column">{{$PaymentCheck->check}}</td>
                            </tr>
                            <tr>
                                <td>Payment Date: </td>
                                <td id="column"> {{$PaymentCheck->created_at}};</td>
                            </tr><tr id="row">
                                    <td>Check By : </td>
                                    <td id="column">{{$PaymentCheck->responsibility}}</td>
                            </tr>
                            <tr>
                                <td>Compensation Amount : </td>
                                <td id="column"> {{$PaymentCheck->Amount}};</td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/PaymentCheck/deletePaymentCheck/{{$PaymentCheck->id}}" method="POST">
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
