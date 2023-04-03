@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Address</h1>
    <form action="/address/storeAddress" method="POST" >
        @csrf
        <label for="region">Region :</label>
        <input type="text" name="region" id="region"><br>
        <label for="zone">Zone : </label><br>
        <label for="wereda">Wereda : </label>
        <!-- <select name="type" id="name">
            <option value="mail">Main Course</option>
            <option value="beverage">Beverage</option>
            <option value="Drinks">Drink</option>
        </select> -->
        <label for="kebele">Kebele : </label>
        <input type="text" name="kebele" id="kebele">
        <label for="subKebele">Sub-Kebele : </label>
        <input type="number" name="subKebele" id="subKebele">
        <input type="submit" value="Add Address">       
    </form>
</div>
</div>
@endsection