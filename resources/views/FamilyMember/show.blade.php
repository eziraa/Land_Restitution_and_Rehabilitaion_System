@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Single Family Member Info Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Family Member Name : </td>
                                    <td id="column">{{$familyMember->Name}}</td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td id="column"> {{$familyMember->gender}};</td>
                            </tr>
                            <tr>
                                <td>Age : </td>
                                <td id="column"> {{$familyMember->age}}</td>
                            </tr> <tr>
                                <td>Relationship : </td>
                                <td id="column"> {{$familyMember->relation}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td id="column">{{$familyMember->phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Sub Kebele</td>
                                <td id="column">{{$familyMember->landOwner_id}}</td>
                                <td>
                                    <form action="/landOwner/showLandOwner/{{$familyMember->landOwner_id}}" method="GET">
                                       @csrf
                                       @method('GET')
                                       <button id="btn" >See Land Owner</button>
                                     </form> 
                                </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/familyMember/deleteFamilyMember/{{$familyMember->id}}" method="POST">
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
