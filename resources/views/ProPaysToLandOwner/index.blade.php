@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Payment Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Project Name</td>
                                    <td>Amount</td>
                                    <td>Payment Date</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($ProPaysToLandOwners as $ProPaysToLandOwner)
                                <tr id="row">
                                    <td id="column">{{$ProPaysToLandOwner->land_owner_id}}</td>
                                    <td id="column"> {{$ProPaysToLandOwner->project}};</td>
                                    <td id="column"> {{$ProPaysToLandOwner->amount}}</td>
                                    <td id="column">{{$ProPaysToLandOwner->created_at}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/ProPaysToLandOwner/deleteProPaysToLandOwner/{{$ProPaysToLandOwner->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/ProPaysToLandOwner/showProPaysToLandOwner/{{$ProPaysToLandOwner->id}}" method="GET">
                                        @csrf
                                        @method('POST')
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
