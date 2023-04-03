@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Check Attendance </h1>
    <form action="/CountProperty/storeCountProperty" method="POST" >
        @csrf
        @method('POST')
    <br>
        <table cell-spacing="12px">
        @foreach($project as $temp1)
           
            @foreach($landOwner as $temp)
                @if($temp->id == $temp1->land_owner_id)
                <tr cell-spacing="12px">
                    <td>
                    {{$temp->Name}}:
                    </td>
                    <td> &nbsp; &nbsp; Counted <input type="radio" name="{{$temp1->land_owner_id}}" value="Counted"></td>
                    <td> &nbsp; &nbsp; Not Counted <input type="radio" name="{{$temp1->land_owner_id}}" value="Not Counted"> </td>
                </tr>
                @endif
            @endforeach
        <!-- <label for="project">Project Name  : </label> -->
        <input type="hidden" name="project" value="{{$temp1->project}}"> <br>
        @endforeach
        </table> 
       
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/CountProperty/seeCountProperty" method="GET">
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
