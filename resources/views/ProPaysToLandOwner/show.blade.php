@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single Payment Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID : </td>
                                    <td id="column">{{$ProPaysToLandOwner->land_owner_id}}</td>
                            </tr>
                            <tr>
                                <td>Project ID : </td>
                                <td id="column"> {{$ProPaysToLandOwner->project}};</td>
                            </tr>
                            <tr>
                                <td>Amount : </td>
                                <td id="column"> {{$ProPaysToLandOwner->amount}}</td>
                            </tr>
                            <tr>
                                <td>Payment Date</td>
                                <td id="column">{{$ProPaysToLandOwner->created_at}}</td>
                                <td>
                                    <form action="/land/showLand/{{$ProPaysToLandOwner->land_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="bttn" >See more</button>
                                    </form>
                               </td>
                            </tr>
            
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/ProPaysToLandOwner/deleteProPaysToLandOwner/{{$ProPaysToLandOwner->id}}" method="POST">
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
