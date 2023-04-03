
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<!-- 
                <form action=" land/search" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >SEARCH LAND</button>
                     </form>
                    <form action=" ProReqToLand/ProReqToLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Make request </button>
                    </form>
                    <form action=" crop/addCrop" method="GET"> 
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Crop</button>
                    </form>
                    <form action="Notification/seeNotification" method="GET"> 
                        @csrf
                        @method('GET')
                        <button id="btn" >SEE</button>
                    </form>
                     <form action=" crop/seeCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Crop </button>
                    </form>
                    <form action=" land/addLand" method="GET"> 
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Land</button>
                    </form>
                     <form action=" land/seeLand" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Land </button>
                    </form>
                     <form action=" landOwner/addLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Land Owner </button>
                    </form> <form action=" landOwner/seeLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" > See Land Owner</button>
                    </form> <form action=" productivePlant/addProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register Productive Plant </button>
                    </form> 
                    <form action=" productivePlant/seeProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Productive Plant</button>
                    </form> 
                    <form action=" landGrowsProductivePlant/addLandGrowsProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register Counted Productive Plant </button>
                    </form>
                <form action=" landGrowsProductivePlant/seeLandGrowsProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Counted Productive Plant </button>
                    </form>
                    <form action=" nonProductivePlant/addNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register Non Productive Plant  </button>
                    </form>
                <form action=" nonProductivePlant/seeNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Non Productive Plant</button>
                    </form>
                    <form action=" landGrowsNonProductivePlant/addLandGrowsNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register Counted Non Productive Plant  </button>
                    </form>
                <form action=" landGrowsNonProductivePlant/seeLandGrowsNonProductivePlant" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Counted Non Productive Plant</button>
                    </form>
                    <form action=" house/addHouse" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register New House   </button>
                    </form>
                    <form action=" house/seeHouse" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See House Information </button>
                    </form>
                <form action=" movableProperty/addMovableProperty" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register New Movable Property</button>
                    </form>
                <form action=" movableProperty/seeMovableProperty" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Counted See Movable Priority</button>
                    </form>
                <form action=" BLDGMaterial/addBLDGMaterial" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" > New Building Material</button>
                    </form>
                
                    <form action=" BLDGMaterial/seeBLDGMaterial" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Building Material</button>
                    </form>
                    <form action=" MinuteDocument/MinuteDocument" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Make  Minute Document</button>
                    </form>
                <form action=" MinuteDocument/seeMinuteDocument" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Minute Document</button>
                    </form>
                <form action=" landGivesCrop/addLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register Counted Plant</button>
                    </form>
                <form action=" landGivesCrop/seeLandGivesCrop" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn">See Counted Crop</button>
                    </form>
                <form action=" project/Project" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Register New Project</button>
                    </form>
                <form action=" project/seeProject" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Project</button>
                    </form>
                <form action=" responsibility/Responsibility" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Job</button>
                    </form>
                    
                    <form action=" responsibility/seeResponsibility" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Jobs</button>
                    </form>
                    <form action=" familyMember/FamilyMember" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Family Member</button>
                    </form>
                    <form action=" familyMember/seeFamilyMember" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Family Member</button>
                    </form>
                    <form action=" RPRDirectorate/RPRDirectorate" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Directorate</button>
                    </form>
                    <form action=" RPRDirectorate/RPRDirectorate" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Directorates</button>
                    </form>
                    <form action=" Estimation/Estimation" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Make Estimation</button>
                    </form>
                    <form action=" Estimation/seeEstimation" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Estimation</button>
                    </form>
                    <form action=" TotalCompensation/TotalCompensation" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add Total Compensation</button>
                    </form>
                    <form action=" TotalCompensation/seeTotalCompensation" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Total Compensation</button>
                    </form>
                    <form action=" PaymentCheck/PaymentCheck" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" > Add Check Payment</button>
                    </form>

                    <form action=" PaymentCheck/seePaymentCheck" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Check Payment</button>
                    </form> -->

                    <form action=" /Account/Account" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Account</button>
                    </form>
                    <form action=" /Account/seeAccount" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Account Info</button>
                    </form>
                    <!-- <form action=" ProPaysToLandOwner/ProPaysToLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Payment To Land Owner</button>
                    </form>
                    
                    <form action=" ProPaysToLandOwner/seeProPaysToLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Payment</button>
                    </form>
                    
                    <form action=" InterestRequest/InterestRequest" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Interest Request</button>
                    </form>
                    
                    <form action=" InterestRequest/seeInterestRequest" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Interest </button>
                    </form>
                    
                    <form action=" Priority/Priority" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" > Fill Priority </button>
                    </form>
                    
                    <form action=" Priority/seePriority" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Priority</button>
                    </form>
                    <form action=" Team/Team" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Add New Team</button>
                    </form>
                    <form action=" Team/seeTeam" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See teams</button>
                    </form>
                    <form action=" TeamRehabilitatesOn/TeamRehabilitatesOn" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Group Land Owner</button>
                    </form>
                    <form action=" TeamRehabilitatesOn/seeTeamRehabilitatesOn" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Grouped Land Owner</button>
                    </form>
                    
                    <form action=" PrioritizedLandOwner/PrioritizedLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >Prioritize Land Owner</button>
                    </form>
                    
                    <form action=" PrioritizedLandOwner/seePrioritizedLandOwner" method="GET">
                        @csrf
                        @method('GET')
                        <button id="bttn" >See Prioritised Land Owner</button>
                    </form> -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
