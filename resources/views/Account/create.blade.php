@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Account </h1>
    <form action="/Account/storeAccount" method="POST" >
        @csrf
        <label for="account">Account Number :</label>
        <input type="number" name="account" ><br>
        <label for="land_owner_id">Land Owner ID   : </label>
        <input type="number" name="land_owner_id">
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Account/seeAccount" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Accounts</button>
 </form>
 @endif

 <div class="mssg">{{session('mssg')}}
    <div class="msg">{{session('msg')}}</div>
</div>
</div>
</div>
@endsection