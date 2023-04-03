@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
    <h2>Minute Document Holder page</h2>
        <form action=" ProReqToLand/seeProReqToLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >See request </button>
                    </form>

                    <form action=" Notification/seeNotification" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >See Notification </button>
                    </form>
                    <form action=" MinuteDocument/MinuteDocument" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >Make Minute Document</button>
                     </form>
                     <form action="MinuteDocument/seeMinuteDocument" method="GET"> 
                        @csrf
                        @method('GET')
                        <button id="btn" >SEE MinuteDocument</button>
                    </form>
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection