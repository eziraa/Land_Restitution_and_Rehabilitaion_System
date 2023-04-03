
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Select The Project You want to Count  </h1>
    <form action="/CountProperty/findCountProperty" method="POST" >
        @csrf
        @method('POST')
        <label for="project">Project Name   </label><br>
        <table>
            @foreach($project as $temp)
           
            <tr>
                <td>
                    {{$temp->project}} &nbsp;
                </td>
                <td>  
                    <input type="radio" name="project" value=" {{$temp->project}} ">
                </td>
            </tr>
            @endforeach
            
        </table>
        <input type="submit" value="SELECT ">       
    </form>
    <form action="/CountProperty/check" method="GET">
        @csrf
        @method('GET')
        <button id="btn">Check Counted</button>
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/MinuteDocument/seeMinuteDocument" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
</div>
</div>
@endsection