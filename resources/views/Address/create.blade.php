@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Address</h1>
    <form action="/address/storeAddress" method="POST" >
        @csrf
        <label for="region">Region :</label>
        <input type="text" name="region" id="region">
        <label for="zone">Zone : </label>
        <input type="text" name="zone" id="zone">
        <label for="wereda">Wereda : </label>
        <!-- <select name="type" id="name">
            <option value="mail">Main Course</option>
            <option value="beverage">Beverage</option>
            <option value="Drinks">Drink</option>
        </select> -->
        <input type="text" name="wereda" id="wereda">
        <label for="kebele">Kebele : </label>
        <input type="text" name="kebele" id="kebele">
        <label for="subKebele">Sub-Kebele : </label>
        <input type="text" name="subKebele" id="subKebele">
        <input type="submit" value="Add Address">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/address/seeAddress" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Address</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}
   <div class="msg">{{session('msg')}}</div>
</div>
                    
</div>
</div>
@endsection