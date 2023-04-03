@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Productive Plant Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Project Name </td>
                                    <td>Project Type</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($projects as $project)
                                <tr id="row">
                                    <td id="column">{{$project->name}}</td>
                                    <td id="column"> {{$project->type}};</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/project/deleteProject/{{$project->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/project/showProject/{{$project->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See detail</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                       <div class="mssg">
                        <div class="msg">{{$msg}}</div>
                    </div> 
                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
