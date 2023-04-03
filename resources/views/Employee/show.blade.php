@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single Emoloyee Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Employee Name : </td>
                                    <td id="column">{{$Employee->Name}}</td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td id="column"> {{$Employee->gender}};</td>
                            </tr>
                    
                            <tr>
                                <td>Phone Number</td>
                                <td id="column">{{$Employee->phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td id="column">{{$Employee->email}}</td>
                            </tr>
                            <tr>
                                <td>Job</td>
                                <td id="column">{{$Employee->job}}</td>
                                <!-- <td id="column">
                                    <form action="/address/showAddress/{{$landOwner->sub_kebele}}" method="GET">
                                       @csrf
                                       @method('GET')
                                       <button id="btn" >See Address</button>
                                     </form> 
                                </td> -->
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landOwner/deleteLandOwner/{{$landOwner->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >Update</button>
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
