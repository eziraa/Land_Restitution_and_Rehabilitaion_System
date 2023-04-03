@extends('layouts.app')
@section('content')
<img src="pizzahouse.jpg" alt="">
<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
    <table>
        <tr>
            <td>
            <form action="/NotifierHome" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Manage Notification</button>
                        </form>
            </td>
            <td>
            <form action=" /MinuteDocument/MinuteDocument" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Take Minute Document </button>
                        </form>
            </td>
        </tr>
        <tr>
            <td> <form action=" /CountProperty/CounterHome" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Manage Counting </button></td>
                        </form>
            <td>
            <form action="/Estimation/selectEstimation" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Manage Estimation </button>
                        </form>
            </td>
        </tr>
        <tr>
            <td> <form action=" /TotalCompensation/verify" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Make Total Compensation </button></td>
                        </form>
                </td>
                <td> <form action=" /Account/homeAccount" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Account </button></td>
                        </form>
                </td>
        </tr>

    </table>
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection