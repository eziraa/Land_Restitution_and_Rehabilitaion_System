@extends('layouts.app')
@section('content')

<div class ="flex-center position-ref full-height">
    <div class ="content" >
    <!-- <img src="/img/pizzahouse.jpg" alt="pizz house image"> -->
        <div class="title m-b-md">
            Compensation and Rahabilitaion
        </div>
    <div>
        <div>
            <ul>
            <li>
                    <form action="address/addAddress" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Address</button>
                    </form>
                </li> <li>
                    <form action="landOwner/addLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Land Owner</button>
                    </form>
                </li> <li>
                    <form action="crop/addCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Crop</button>
                    </form>
                </li> <li>
                    <form action="land/addLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Land</button>
                    </form>
                    </li> <li>
                    <form action="landGivesCrop/addLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Fill table LandGivesCrop </button>
                    </form>
                </li> <li>
                    <form action="productivePlant/addProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Productive Plant</button>
                    </form>
                </li> </li> <li>
                    <form action="landGrowsProductivePlant/addLandGrowsProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Fill table LandGivesProductive  </button>
                    </form>
                </li> <li>
                <form action="productivePlant/addProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Address</button>
                    </form>
                </li> </li> <li>
                    <form action="landGivesCrop/addLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Fill table LandGivesCrop </button>
                    </form>
                </li> <li>
                    <form action="landGrowsNonProductivePlant/addLandGrowsNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Fill Table LandGrowsNonProductivePlant</button>
                    </form>     <form action="nonProductivePlant/addNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Non-Productive Info</button>
                    </form>
                </li> </li> <li>
                    <form action="landGivesCrop/seeLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Fill table LandGivesCrop </button>
                    </form>
                </li> <li>
                    <form action="movableProperty/storeMovableProperty" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Movable Property</button>
                    </form>
                </li>
                <li>
                    <form action="house/storeHouse" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add House</button>
                    </form>
                </li> <li>
                    <form action="BLDGMaterial/storeBLDGMaterial" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Building Material</button>
                    </form>
                    <li>
                    <form action="land/search" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >SEARCH LAND</button>
                    </form>
                    </li> 
            </ul>
        </div>
    <div class="mssg">{{session('mssg')}}</div>
    <div class="msg">{{session('msg')}}</div>
</div>
@endsection


<!-- 
 
<a href="address/storeAddress">Add Address</a>
<a href="landOwner/storeLandOwner">Add Address</a>
<a href="crop/storeCrop">Add Address</a>
<a href="land/storeLand">Add Address</a>
<a href="landGivesCrop/seeLandGivesCrop">Add Address</a>
<a href="productivePlant/storeProductivePlant">Add Address</a>
<a href="landGrowsProductivePlant/storeLandGrowsProductivePlant">Add Address</a>
<a href="landGrowsNonProductivePlant/storeLandGrowsNonProductivePlant">Add Address</a>
<a href="nonProductivePlant/storeNonProductivePlant">Add Address</a>
<a href="movableProperty/storeMovableProperty">Add Address</a>
<a href="house/storeHouse">Add Address</a>
<a href="BLDGMaterial/storeBLDGMaterial">Add Address</a> -->








