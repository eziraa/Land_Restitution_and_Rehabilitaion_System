@extends('layouts.app')
@section('content')


<div class ="content" >
    <div class="left-margin">
        <div class="wrapper pizza-details">
            <h1>Order for {{$order->customerName}}</h1>
            <p class="name">Food Name - {{$order->foodName}}</p>
            <p class="type">Quantity - {{$order->quantity}}</p>
            <p class="created_at">Date  - {{$order->created_at}}</p>
            <div class="btn">
                @if(Auth::user()!=null &&Auth::user()->name =='Group5')
                <form action="/foods/deleteOrder/{{$order->id}}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button id="bttn" >remove</button>
                      </form> 
                     @else<div class="bttn"><a href="/foods/orderFoodo/{{$order->id}}">order</a></div></td>
                     @endif
            </div>       
        </div>
    </div>
</div>

@endsection