@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Land with their Non Productive Plant  Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Plant Name </td>
                                    <td>Plant Quantity</td>
                                    <td>Preservation Expense</td>
                                    <td>Growth Expense </td>
                                    <td>Land ID </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($landGrowsnonProductivePlants as $landGrowsnonProductivePlant)
                                <tr id="row">
                                    <td id="column">{{$landGrowsnonProductivePlant->name}}</td>
                                    <td id="column"> {{$landGrowsnonProductivePlant->Quantity}};</td>
                                    <td id="column"> {{$landGrowsnonProductivePlant->preservation}}</td>
                                    <td id="column"> {{$landGrowsnonProductivePlant->growth}}</td>
                                    <td id="column"> {{$landGrowsnonProductivePlant->land_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landGrowsNonProductivePlant/deleteLandGrowsNonProductivePlant/{{$landGrowsnonProductivePlant->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/landGrowsNonProductivePlant/showLandGrowsNonProductivePlant/{{$landGrowsnonProductivePlant->id}}" method="GET">
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
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
