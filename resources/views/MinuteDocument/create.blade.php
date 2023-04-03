
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Select the reanson to the Notification </h1>
    <form action="/MinuteDocument/seeMinuteDocument" method="POST" >
        @csrf
        @method('POST')
        <table>
            <tr>
                <td>Reason</td>
            </tr>
            <tr>
                <td> To Count Property </td>
                <td><input type="radio" name="reason" value="Counting"></td>
            </tr>
            <tr>
                <td> To Discussion </td>
                <td><input type="radio" name="reason" value="Discussion"></td>
            </tr>
        </table>
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/MinuteDocument/seeMinuteDocument" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}
    <div class="msg">{{session('msg')}}</div>
 </div>
 
</div>
</div>
@endsection