@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
    <h2>
        Counting Property</h2>
        <table>
            <tr>
               <td>  <form action="/landGivesCrop/addLandGivesCrop" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >Register Counted Crop</button>
                    </form> </td>
               <td>  <form action=" /landGivesCrop/seeLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn">See Counted Crop</button>
                    </form> </td>
            </tr>
            <tr>
                   <td>  <form action=" /landGrowsProductivePlant/addLandGrowsProductivePlant" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >Register Counted Productive Plant </button>
                    </form> </td>
               <td>  <form action=" /landGrowsProductivePlant/seeLandGrowsProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <!-- <input type="hidden" name = 'id' value="{{$id}}"> -->
                        <button id="btttn" >See Counted Productive Plant </button>
                    </form> </td>
            </tr>
            <tr>
                   <td>  <form action=" /landGrowsNonProductivePlant/addLandGrowsNonProductivePlant" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >Register Counted Non Productive Plant  </button>
                    </form> </td>
               <td>  <form action=" /landGrowsNonProductivePlant/seeLandGrowsNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <!-- <input type="hidden" name = 'id' value="{{$id}}"> -->
                        <button id="btttn" >See Counted Non Productive Plant</button>
                    </form> </td>
            </tr>
            <tr>
                   <td>  <form action=" /house/addHouse" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >Register New House   </button>
                    </form> </td>
                   <td>  <form action="/house/seeHouse" method="GET">
                        @csrf
                        @method('GET')
                        <!-- <input type="hidden" name = 'id' value="{{$id}}"> -->
                        <button id="btttn" >See House Information </button>
                    </form> </td>
            </tr>
            <tr>
               <td>  <form action=" /movableProperty/addMovableProperty" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >Register New Movable Property</button>
                    </form> </td>
               <td>  <form action=" /movableProperty/seeMovableProperty" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="btttn" >See Counted See Movable Priority</button>
                    </form> </td>
            </tr>
            <tr>
                   <td>  <form action=" /CountProperty/CounterHome" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="bttn" >Finished</button>
                    </form> </td>
            </tr>
        </table>
                <!--<td>  <form action=" BLDGMaterial/addBLDGMaterial" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" > New Building Material</button>
                    </form> </td> -->
       <!-- <td>  <form action=" /ProReqToLand/seeProReqToLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >See request </button>
                    </form> </td>

                   <td>  <form action=" Notification/seeNotification" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >See Notification </button>
                    </form> </td>
                   <td>  <form action=" MinuteDocument/MinuteDocument" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >Make Minute Document</button>
                     </form> </td>
                    <td>  <form action="MinuteDocument/seeMinuteDocument" method="GET"> 
                        @csrf
                        @method('GET')
                        <button id="btn" >SEE MinuteDocument</button>
                    </form> </td> -->
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection