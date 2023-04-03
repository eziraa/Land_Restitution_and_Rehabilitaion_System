@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
    <h2>The notifier home page</h2>
        <form action=" ProReqToLand/seeProReqToLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >See request </button>
                    </form>
                    <form action=" land/search" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >SEARCH LAND</button>
                     </form>
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection