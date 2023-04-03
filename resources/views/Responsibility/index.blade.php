@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Responsibility Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Responsibility Name </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($responsibilitys as $responsibility)
                                <tr id="row">
                                    <td id="column">{{$responsibility->name}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/responsibility/deleteResponsibility/{{$responsibility->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/responsibility/showResponsibility/{{$responsibility->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Detail</button>
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
