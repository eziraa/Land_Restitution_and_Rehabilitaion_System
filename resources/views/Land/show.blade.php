@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Land Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Type : </td>
                                    <td id="column">{{$land->type}}</td>
                            </tr>
                            <tr>
                                <td>Land Use : </td>
                                <td id="column"> {{$land->use}};</td>
                            </tr>
                            <tr>
                                <td>Land Area : </td>
                                <td id="column"> {{$land->area}}</td>
                            </tr>
                            <tr>
                                <td>Land Owner ID </td>
                                <td id="column">{{$land->landOwner_id}}</td>
                                @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                <td>
                                    <form action="/landOwner/showLandOwner/{{$land->landOwner_id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See land owner </button>
                                    </form>
                               </td>
                               @endif
                            </tr>
                            <tr>
                                <td>Sub Kebele</td>
                                <td id="column">{{$land->sub_kebele}}</td>
                                <td id="column">
                                    <form action="/address/showAddress/{{$land->sub_kebele}}" method="GET">
                                       @csrf
                                       @method('GET')
                                       <button id="btn" >See Address</button>
                                     </form> 
                                </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/land/deleteLand/{{$land->id}}" method="POST">
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
