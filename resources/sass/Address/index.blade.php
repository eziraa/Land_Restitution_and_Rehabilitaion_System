@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Address Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        @foreach($addresss as $address)
                        @if($address->type=='mail')
                        <div class="item-list">
                            <table class="table">
                                <tr class="row">
                                    <td>{{$address->region}}</td>
                                </tr>
                                <tr class="row">
                                    <td>{{$address->zone}}&#36;</td>
                                </tr>
                                <tr class="row">
                                    <td>{{$address->wereda}}</td>
                                </tr>
                                <tr class="row">
                                    <td>{{$address->kebele}}&#36;</td>
                                </tr>
                                <tr class="row">
                                    <td>{{$address->sub-kebele}}</td>
                                </tr>
                                <tr>
                                    <td>@if(Auth::user()!=null &&Auth::user()->name =='Group5')
                                    <form action="/address/deleteAddress/{{$address->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >Remove</button>
                                    </form>
                                    <form action="/address/deleteAddress/{{$address->id}}" method="POST">
                                        @csrf
                                        <!-- @method('PO') -->
                                        <button id="bttn" >Update</button>
                                    </form> </td>
                                    @else
                                    @endif
                                </tr>
                            </table>
                        </div>
                        @endif
                       @endforeach
                    </div>
                    <!-- <div class="section">
                        <div class="sub-title">
                            Beverages
                        </div>
                        @foreach($food as $address)
                        @if($pizz->type=='beverage')
                        <div class="food-list">
                            <table class="table">
                                <tr class="row">
                                <td>{{$pizz->name}}</td> 
                                    <td>{{$pizz->price}}&#36;</td>
                                    <td>@if(Auth::user()!=null &&Auth::user()->name =='Group5')
                                    <form action="/foods/deleteFood/{{$pizz->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >remove</button>
                                    </form> 
                                    @else<div class="bttn"><a href="/foods/orderFood/{{$pizz->id}}">order</a></div></td>
                                    @endif
                                </tr>
                            </table>
                        </div>
                        @endif
                       @endforeach
                    </div>
                    <div class="section1">
                        <div class="sub-title">
                            Drink
                        </div>
                        @foreach($food as $pizz)
                        @if($pizz->type=='Drinks')
                        <div class="food-list">
                            <table class="table">
                                <tr class="row">
                                    <td>{{$pizz->name}}</td> 
                                    <td>{{$pizz->price}}&#36;</td>
                                    <td>@if(Auth::user()!=null &&Auth::user()->name =='Group5')
                                    <form action="/foods/deleteFood/{{$pizz->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="bttn" >remove</button>
                                    </form> 
                                    @else<div class="bttn"><a href="/foods/orderFood/{{$pizz->id}}">order</a></div></td>
                                    @endif
                                </tr>
                            </table>
                        </div>
                        @endif
                       @endforeach -->

                    <!-- </div> -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
