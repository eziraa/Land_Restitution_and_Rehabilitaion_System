@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Familiy Mebmber Info Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Family Member Name </td>
                                    <td>Gender</td>
                                    <td>Age</td>
                                    <td>Relationship</td>
                                    <td>Phone Number</td>
                                    <td>Land Owner ID</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($familyMembers as $familyMember)
                                <tr id="row">
                                    <td id="column">{{$familyMember->Name}}</td>
                                    <td id="column"> {{$familyMember->gender}};</td>
                                    <td id="column"> {{$familyMember->age}}</td>
                                    <td id="column"> {{$familyMember->relation}}</td>
                                    <td id="column">{{$familyMember->phone_number}}</td>
                                    <td id="column">{{$familyMember->landOwner_id}}</td>
                                    
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <td id="column">
                                    <form action="/familyMember/deleteFamilyMember/{{$familyMember->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/familyMember/showFamilyMember/{{$familyMember->id}}" method="GET">
                                        @csrf
                                        @method('POST')
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
