@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Order a new food</h1>
    <form action="/foods/storeOrder" method="POST" >
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="type">Food name: </label>
        <select name="type" id="name">
            
            <option value="{{$order->foodName}}">{{$order->foodName}}</option>
           
        </select><br>
        <label for="quantity">Quantity: </label>
        <br>
        <input type="number" id ="quanity" name="quantity">
        <input type="submit" value="Order pizza">       
    </form>
</div>
</div>
@endsection