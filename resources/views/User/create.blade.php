@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
        <form action=" ProReqToLand/ProReqToLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >Make a request </button>
                    </form>
                    <form action=" land/search" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >SEARCH LAND</button>
                     </form>
                     <form action=" ProPaysToLandOwner/ProPaysToLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >Pay To Land Owner</button>
                    </form>
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection