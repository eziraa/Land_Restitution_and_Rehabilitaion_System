@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Movable Property </h1>
    <form action="/movableProperty/storeMovableProperty" method="POST" >
        @csrf
        @method('POST')
        <label for="name">Property Name :</label>
        <input type="text" name="name" ><br>
        <label for="uprooting"> Uprooting Expense : </label>
        <input type="number" name="uprooting">
        <label for="transport">Transportation Expense  : </label>
        <input type="number" name="transport">
        <label for="installing"> Installing Expense : </label>
        <input type="number" name="installing"> 
        <label for="recovery"> Recovery Expense : </label>
        <input type="number" name="recovery"> 
        <input type="hidden" name = 'land_id' value="{{$id}}">
        <input type="submit" value="INSERT ">       
    </form>
    <form action=" /CountProperty/count/{{$id}}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="bttn" >Finish  </button>
            </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/movableProperty/seeMovableProperty" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{$mssg}}
            <div class="msg">{{$msg}}</div>
</div>
</div>
</div>
@endsection