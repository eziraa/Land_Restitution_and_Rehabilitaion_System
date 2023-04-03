@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1> Payment Check</h1>
    <form action="/PaymentCheck/storePaymentCheck" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="check"> Check Payment: </label>
        Paid <input type="radio" name="check" value="Paid">
        Unpaid  <input type="radio" name="check" value="Unpaid">
        <label for="`amount`"> Compensation Amount : </label>
        <input type="number" name="amount">
        <label for="responsibility">Checked By : </label>
        <input type="text" name="responsibility">
        <label for="project">Project Name  : </label>
        <input type="text" name="project">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/PaymentCheck/seePaymentCheck" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Crops</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection