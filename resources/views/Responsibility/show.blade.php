@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single Responsibility Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Responsibility Name : </td>
                                    <td id="column">{{$responsibility->name}}</td>
                                    <td id="column"><form action="/Employee/seeEmployee/{{$responsibility->name}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See Employee</button>
                                    </form> 
                                    </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/responsibility/deleteResponsibility/{{$responsibility->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btttn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btttn" >Update</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
