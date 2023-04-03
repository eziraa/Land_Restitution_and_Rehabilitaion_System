<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\LandOwnerController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\LandGivesCropController;
use App\Http\Controllers\ProductivePlantController;
use App\Http\Controllers\LandGrowsProductivePlantController;
use App\Http\Controllers\LandGrowsNonProductivePlantController;
use App\Http\Controllers\MovablePropertyController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\BLDGMaterialController;
use App\Http\Controllers\BLDGMaterialBuildsHouseController;
use App\Http\Controllers\NonProductivePlantController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResponsibilityController;
use App\Http\Controllers\FamilyMemberController;
use App\Http\Controllers\RPRDirectorateController;
use App\Http\Controllers\ProReqToLandController;
use App\Http\Controllers\MinuteDocumentController;
use App\Http\Controllers\CountPropertyController;
use App\Http\Controllers\EstimationController;
use App\Http\Controllers\PaymentCheckController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TotalCompensationController;
use App\Http\Controllers\InterestRequestController;
use App\Http\Controllers\ProPaysToLandOwnerController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\TeamRehabilitatesOnController;
use App\Http\Controllers\PrioritizedLandOwnerController;
use App\Http\Controllers\NotifierController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\InterestController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return  ('/NotifierHome')
//     ;});
Route::get('/',function(){
   return  view("all");
});

Route::get('/UserHome', function () {
    return view('User.create',['groupName'=>'Group five ']);
});

Route::group(['prefix'=>'all'],function (){
    Route::get('/property',[AllController::class, 'property']);
    Route::get('/rehabilitation',[AllController::class, 'rehabilitation']);
    Route::get('/employee',[AllController::class, 'employee']);
    Route::get('/activities',[AllController::class, 'major_activities']);
});

Route::get('/NotifierHome', [NotificationController::class,'home']);
Route::get('/Answer/{id}', [NotificationController::class,'answer']);

//Address controller 
Route::group(['prefix'=>'address'], function () {
    Route::get('/homeAddress',[AddressController::class,'home']);
    Route::get('/seeAddress', [AddressController::class,'index']);
    Route::post('/storeAddress', [AddressController::class,'store']);
    Route::get('/addAddress', [AddressController::class,'create']);
    Route::delete('/deleteAddress/{id}', [AddressController::class, 'distroy']);
    Route::get('/showAddress/{id}', [AddressController::class, 'show']);
    // Route::get('/showAddresss/{id}', [AddressController::class, 'find']);
});

//Land Owner controller 
Route::group(['prefix'=>'landOwner'], function () {
    Route::get('/homeLandOwner',[LandOwnerController::class,'home']);
    Route::get('/seeLandOwner', [LandOwnerController::class,'index']);
    Route::post('/storeLandOwner', [LandOwnerController::class,'store']);
    Route::get('/addLandOwner', [LandOwnerController::class,'create']);
    Route::delete('/deleteLandOwner/{id}', [LandOwnerController::class, 'distroy']);
    Route::get('/showLandOwner/{id}', [LandOwnerController::class, 'show']);
});

//Employee
Route::group(['prefix'=>'Employee'], function () {
    Route::get('/relateEmployee',[EmployeeController::class,'choose']);
    Route::get('/homeEmployee',[EmployeeController::class,'home']);
    Route::get('/seeEmployee', [EmployeeController::class,'index']);
    Route::get('/seeEmployee/{id}', [EmployeeController::class,'see']);
    Route::post('/storeEmployee', [EmployeeController::class,'store']);
    Route::get('/addEmployee', [EmployeeController::class,'create']);
    Route::delete('/deleteEmployee/{id}', [EmployeeController::class, 'distroy']);
    Route::get('/showEmployee/{id}', [EmployeeController::class, 'show']);
});

//Land  controller 
Route::group(['prefix'=>'crop'], function () {
    Route::get('/homeCrop',[CropController::class,'home']);
    Route::get('/seeCrop', [CropController::class,'index']);
    Route::post('/storeCrop', [CropController::class,'store']);
    Route::get('/addCrop', [CropController::class,'create']);
    Route::delete('/deleteCrop/{id}', [CropController::class, 'distroy']);
    Route::get('/showCrop/{id}', [CropController::class, 'show']);
});


//Crop  controller 
Route::group(['prefix'=>'land'], function () {
    Route::get('/homeLand',[LandController::class,'home']);
    Route::post('/searchLand', [LandController::class, 'seeLand']);
    Route::get('/seeLand', [LandController::class,'index']);
    Route::post('/storeLand', [LandController::class,'store']);
    Route::get('/addLand', [LandController::class,'create']);
    Route::delete('/deleteLand/{id}', [LandController::class, 'distroy']);
    Route::get('/showLand/{id}', [LandController::class, 'show']);
    // Route::post('/seeLand', [LandController::class, 'seeLand']);
    Route::get('/search', function(){
        return view('Land.see',['groupName'=>'Group five ']);
    }
    );
});


//landGivesCrop  controller 
Route::group(['prefix'=>'landGivesCrop'], function () {
    Route::get('/LandCropHomwe',function(){return view('landGivesCrop.Home');});
    Route::get('/seeLandGivesCrop', [LandGivesCropController::class,'index']);
    Route::post('/storeLandGivesCrop', [LandGivesCropController::class,'store']);
    Route::post('/addLandGivesCrop', [LandGivesCropController::class,'create']);
    // Route::get('/addLandGivesCrop', [LandGivesCropController::class,'create']);
    Route::delete('/deleteLandGivesCrop/{id}', [LandGivesCropController::class, 'distroy']);
    Route::get('/showLandGivesCrop/{id}', [LandGivesCropController::class, 'show']);
});



//ProductivePlant  controller 
Route::group(['prefix'=>'productivePlant'], function () {
    Route::get('/homeProductivePlant',[ProductivePlantController::class,'home']);
    Route::get('/seeProductivePlant', [ProductivePlantController::class,'index']);
    Route::post('/storeProductivePlant', [ProductivePlantController::class,'store']);
    Route::get('/addProductivePlant', [ProductivePlantController::class,'create']);
    Route::delete('/deleteProductivePlant/{id}', [ProductivePlantController::class, 'distroy']);
    Route::get('/showProductivePlant/{id}', [ProductivePlantController::class, 'show']);
});



//LandGrowsProductivePlant  controller 
Route::group(['prefix'=>'landGrowsProductivePlant'], function () {
    
    Route::get('/seeLandGrowsProductivePlant', [LandGrowsProductivePlantController::class,'index']);
    Route::post('/storeLandGrowsProductivePlant', [LandGrowsProductivePlantController::class,'store']);
    Route::post('/addLandGrowsProductivePlant', [LandGrowsProductivePlantController::class,'create']);
    Route::delete('/deleteLandGrowsProductivePlant/{id}', [LandGrowsProductivePlantController::class, 'distroy']);
    Route::get('/showLandGrowsProductivePlant/{id}', [LandGrowsProductivePlantController::class, 'show']);
});



//LandGrowsProductivePlant  controller 
Route::group(['prefix'=>'landGrowsNonProductivePlant'], function () {
    
    Route::get('/seeLandGrowsNonProductivePlant', [LandGrowsNonProductivePlantController::class,'index']);
    Route::post('/storeLandGrowsNonProductivePlant', [LandGrowsNonProductivePlantController::class,'store']);
    Route::post('/addLandGrowsNonProductivePlant', [LandGrowsNonProductivePlantController::class,'create']);
    Route::delete('/deleteLandGrowsNonProductivePlant/{id}', [LandGrowsNonProductivePlantController::class, 'distroy']);
    Route::get('/showLandGrowsNonProductivePlant/{id}', [LandGrowsNonProductivePlantController::class, 'show']);
});

//NonProductivePlant  controller 
Route::group(['prefix'=>'nonProductivePlant'], function () {
    Route::get('/homeNonProductivePlant',[NonProductivePlantController::class,'home']);
    Route::get('/seeNonProductivePlant', [NonProductivePlantController::class,'index']);
    Route::post('/storeNonProductivePlant', [NonProductivePlantController::class,'store']);
    Route::get('/addNonProductivePlant', [NonProductivePlantController::class,'create']);
    Route::delete('/deleteNonProductivePlant/{id}', [NonProductivePlantController::class, 'distroy']);
    Route::get('/showNonProductivePlant/{id}', [NonProductivePlantController::class, 'show']);
});


//MovableProperty  controller 
Route::group(['prefix'=>'movableProperty'], function () {    
    Route::get('/seeMovableProperty', [MovablePropertyController::class,'index']);
    Route::post('/storeMovableProperty', [MovablePropertyController::class,'store']);
    Route::post('/addMovableProperty', [MovablePropertyController::class,'create']);
    Route::delete('/deleteMovableProperty/{id}', [MovablePropertyController::class, 'distroy']);
    Route::get('/showMovableProperty/{id}', [MovablePropertyController::class, 'show']);
});

//House  controller 
Route::group(['prefix'=>'house'], function () {
    
    Route::get('/seeHouse', [HouseController::class,'index']);
    Route::post('/storeHouse', [HouseController::class,'store']);
    Route::post('/addHouse', [HouseController::class,'create']);
    Route::delete('/deleteHouse/{id}', [HouseController::class, 'distroy']);
    Route::get('/showHouse/{id}', [HouseController::class, 'show']);
});



//BLDGMaterial  controller 
Route::group(['prefix'=>'BLDGMaterial'], function () {
    Route::get('/homeBLDGMaterial',[BLDGMaterialController::class,'home']);
    Route::get('/seeBLDGMaterial', [BLDGMaterialController::class,'index']);
    Route::post('/storeBLDGMaterial', [BLDGMaterialController::class,'store']);
    Route::get('/addBLDGMaterial', [BLDGMaterialController::class,'create']);
    Route::delete('/deleteBLDGMaterial/{id}', [BLDGMaterialController::class, 'distroy']);
    Route::get('/showBLDGMaterial/{id}', [BLDGMaterialController::class, 'show']);
    Route::get('/findBLDGMaterial/{id}', [BLDGMaterialController::class, 'find']);
});




//BLDGMaterialBuildsHouse  controller 
Route::group(['prefix'=>'BLDGMaterialBuildsHouse'], function () {
    
    Route::get('/seeBLDGMaterialBuildsHouse', [BLDGMaterialBuildsHouseController::class,'index']);
    Route::post('/storeBLDGMaterialBuildsHouse', [BLDGMaterialBuildsHouseController::class,'store']);
    Route::get('/BLDGMaterialBuildsHouse', [BLDGMaterialBuildsHouseController::class,'create']);
    Route::delete('/deleteBLDGMaterialBuildsHouse/{id}', [BLDGMaterialBuildsHouseController::class, 'distroy']);
    Route::get('/showBLDGMaterialBuildsHouse/{id}', [BLDGMaterialBuildsHouseController::class, 'show']);
});




//Project  controller 
Route::group(['prefix'=>'project'], function () {
    Route::get('/homeProject',[ProjectController::class,'home']);
    Route::get('/seeProject', [ProjectController::class,'index']);
    Route::post('/storeProject', [ProjectController::class,'store']);
    Route::get('/Project', [ProjectController::class,'create']);
    Route::delete('/deleteProject/{id}', [ProjectController::class, 'distroy']);
    Route::get('/showProject/{id}', [ProjectController::class, 'show']);
});




//Responsiblity  controller 
Route::group(['prefix'=>'responsibility'], function () {
    Route::get('/homeResponsibility',[ResponsibilityController::class,'home']);
    Route::get('/seeResponsibility', [ResponsibilityController::class,'index']);
    Route::post('/storeResponsibility', [ResponsibilityController::class,'store']);
    Route::get('/Responsibility', [ResponsibilityController::class,'create']);
    Route::delete('/deleteResponsibility/{id}', [ResponsibilityController::class, 'distroy']);
    Route::get('/showResponsibility/{id}', [ResponsibilityController::class, 'show']);
});



//FamilyMember  controller 
Route::group(['prefix'=>'familyMember'], function () {
    Route::get('/homeFamilyMember',[FamilyMemberController::class,'home']);
    Route::get('/seeFamilyMember', [FamilyMemberController::class,'index']);
    Route::post('/storeFamilyMember', [FamilyMemberController::class,'store']);
    Route::get('/FamilyMember', [FamilyMemberController::class,'create']);
    Route::delete('/deleteFamilyMember/{id}', [FamilyMemberController::class, 'distroy']);
    Route::get('/showFamilyMember/{id}', [FamilyMemberController::class, 'show']);
});


//RPRDirectorate  controller 
Route::group(['prefix'=>'RPRDirectorate'], function () {
    Route::get('/homeRPRDirectorate',[RPRDirectorateController::class,'home']);
    Route::get('/seeRPRDirectorate', [RPRDirectorateController::class,'index']);
    Route::post('/storeRPRDirectorate', [RPRDirectorateController::class,'store']);
    Route::get('/RPRDirectorate', [RPRDirectorateController::class,'create']);
    Route::delete('/deleteRPRDirectorate/{id}', [RPRDirectorateController::class, 'distroy']);
    Route::get('/showRPRDirectorate/{id}', [RPRDirectorateController::class, 'show']);
});




//ProReqToLandController  controller 
Route::group(['prefix'=>'ProReqToLand'], function () {
    
    Route::get('/seeProReqToLand', [ProReqToLandController::class,'index']);
    Route::post('/storeProReqToLand', [ProReqToLandController::class,'store']);
    Route::get('/ProReqToLand', [ProReqToLandController::class,'create']);
    Route::delete('/deleteProReqToLand/{id}', [ProReqToLandController::class, 'distroy']);
    Route::get('/showProReqToLand/{id}', [ProReqToLandController::class, 'show']);
});



//NotificationController  controller 
Route::group(['prefix'=>'Notification'], function () {
    
    Route::get('/seeNotification', [NotificationController::class,'index']);
    Route::post('/storeNotification', [NotificationController::class,'store']);
    Route::post('/findNotification', [NotificationController::class,'find']);
    Route::post('/seeNotification', [NotificationController::class,'see']);
    Route::get('/Notification', [NotificationController::class,'create']);
    Route::delete('/deleteNotification/{id}', [NotificationController::class, 'distroy']);
    Route::get('/showNotification/{id}', [NotificationController::class, 'show']);
});




//MinuteDocument  controller 
Route::group(['prefix'=>'MinuteDocument'], function () {
    
    Route::get('/seeMinuteDocument', [MinuteDocumentController::class,'index']);
    Route::post('/seeMinuteDocument', [MinuteDocumentController::class,'see']);
    Route::post('/findMinuteDocument', [MinuteDocumentController::class,'find']);
    Route::post('/storeMinuteDocument', [MinuteDocumentController::class,'store']);
    Route::get('/MinuteDocument', [MinuteDocumentController::class,'create']);
    Route::delete('/deleteMinuteDocument/{id}', [MinuteDocumentController::class, 'distroy']);
    Route::get('/showMinuteDocument/{id}', [MinuteDocumentController::class, 'show']);
});
Route::get('/MinuteDocumentHolderHome', [MinuteDocumentController::class,'home']);



//CountProperty  controller 
Route::group(['prefix'=>'CountProperty'], function () {
    Route::get('/addLandGivesCrop', [LandGivesCropController::class,'create']);
    Route::get('/CounterHome', [CountPropertyController::class,'select']);
    Route::get('/seeCountProperty', [CountPropertyController::class,'index']);
    Route::post('/findCountProperty', [CountPropertyController::class,'find']);
    Route::post('/storeCountProperty', [CountPropertyController::class,'store']);
    Route::post('/featchCountProperty', [CountPropertyController::class,'featch']);
    Route::get('/CountProperty', [CountPropertyController::class,'create']);
    Route::delete('/deleteCountProperty/{id}', [CountPropertyController::class, 'distroy']);
    Route::get('/showCountProperty/{id}', [CountPropertyController::class, 'show']);
    Route::get('/count/{id}', [CountPropertyController::class, 'count']);
    Route::get('/check', [CountPropertyController::class, 'check']);
});


//Estimation  controller 
Route::group(['prefix'=>'Estimation'], function () {
    
    Route::get('/seeEstimation', [EstimationController::class,'index']);
    Route::post('/storeEstimation', [EstimationController::class,'store']);
    Route::post('/findEstimation', [EstimationController::class,'find']);
    Route::get('/Estimation', [EstimationController::class,'create']);
    Route::get('/selectEstimation', [EstimationController::class,'select']);
    Route::delete('/deleteEstimation/{id}', [EstimationController::class, 'distroy']);
    Route::get('/showEstimation/{id}', [EstimationController::class, 'show']);
});


//TotalCompensation  controller 
Route::group(['prefix'=>'TotalCompensation'], function () {
    
    Route::get('/seeTotalCompensation', [TotalCompensationController::class,'index']);
    Route::get('/verify', [TotalCompensationController::class,'verify']);
    Route::post('/storeTotalCompensation', [TotalCompensationController::class,'store']);
    Route::get('/TotalCompensation', [TotalCompensationController::class,'create']);
    Route::delete('/deleteTotalCompensation/{id}', [TotalCompensationController::class, 'distroy']);
    Route::get('/showTotalCompensation/{id}', [TotalCompensationController::class, 'show']);
});


//PaymentCheck  controller 
Route::group(['prefix'=>'PaymentCheck'], function () {
    
    Route::get('/seePaymentCheck', [PaymentCheckController::class,'index']);
    Route::post('/storePaymentCheck', [PaymentCheckController::class,'store']);
    Route::get('/PaymentCheck', [PaymentCheckController::class,'create']);
    Route::delete('/deletePaymentCheck/{id}', [PaymentCheckController::class, 'distroy']);
    Route::get('/showPaymentCheck/{id}', [PaymentCheckController::class, 'show']);
});



//Account  controller 
Route::group(['prefix'=>'Account'], function () {
    Route::get('/homeAccount',[AccountController::class,'home']);
    Route::get('/seeAccount', [AccountController::class,'index']);
    Route::post('/storeAccount', [AccountController::class,'store']);
    Route::get('/Account', [AccountController::class,'create']);
    Route::delete('/deleteAccount/{id}', [AccountController::class, 'distroy']);
    Route::get('/showAccount/{id}', [AccountController::class, 'show']);
});




//ProPaysToLandOwner  controller 
Route::group(['prefix'=>'ProPaysToLandOwner'], function () {
    Route::get('/homeProPaysToLandOwner',[ProPaysToLandOwnerController::class,'home']);
    Route::get('/seeProPaysToLandOwner', [ProPaysToLandOwnerController::class,'index']);
    Route::post('/storeProPaysToLandOwner', [ProPaysToLandOwnerController::class,'store']);
    Route::get('/ProPaysToLandOwner', [ProPaysToLandOwnerController::class,'create']);
    Route::delete('/deleteProPaysToLandOwner/{id}', [ProPaysToLandOwnerController::class, 'distroy']);
    Route::get('/showProPaysToLandOwner/{id}', [ProPaysToLandOwnerController::class, 'show']);
});




//InterestRequest  controller 
Route::group(['prefix'=>'InterestRequest'], function () {
    
    Route::get('/seeInterestRequest', [InterestRequestController::class,'index']);
    Route::get('/homeInterestRequest', [InterestRequestController::class,'home']);
    Route::post('/storeInterestRequest', [InterestRequestController::class,'store']);
    Route::get('/InterestRequest', [InterestRequestController::class,'create']);
    Route::delete('/deleteInterestRequest/{id}', [InterestRequestController::class, 'distroy']);
    Route::get('/showInterestRequest/{id}', [InterestRequestController::class, 'show']);
});




//Priority  controller 
Route::group(['prefix'=>'Priority'], function () {
    
    Route::get('/seePriority', [PriorityController::class,'index']);
    Route::get('/homePriority', [PriorityController::class,'home']);
    Route::post('/storePriority', [PriorityController::class,'store']);
    Route::get('/Priority', [PriorityController::class,'create']);
    Route::delete('/deletePriority/{id}', [PriorityController::class, 'distroy']);
    Route::get('/showPriority/{id}', [PriorityController::class, 'show']);
});



//Team  controller 
Route::group(['prefix'=>'Team'], function () {
    Route::get('/homeTeam',[TeamController::class,'home']);
    Route::get('/seeTeam', [TeamController::class,'index']);
    Route::post('/storeTeam', [TeamController::class,'store']);
    Route::get('/Team', [TeamController::class,'create']);
    Route::delete('/deleteTeam/{id}', [TeamController::class, 'distroy']);
    Route::get('/showTeam/{id}', [TeamController::class, 'show']);
});



//TeamRehabilitatesOn  controller 
Route::group(['prefix'=>'TeamRehabilitatesOn'], function () {
    Route::get('/homeNonTeamRehabilitatesOn',[TeamRehabilitatesOnController::class,'home']);
    Route::get('/seeTeamRehabilitatesOn', [TeamRehabilitatesOnController::class,'index']);
    Route::post('/storeTeamRehabilitatesOn', [TeamRehabilitatesOnController::class,'store']);
    Route::get('/TeamRehabilitatesOn', [TeamRehabilitatesOnController::class,'create']);
    Route::delete('/deleteTeamRehabilitatesOn/{id}', [TeamRehabilitatesOnController::class, 'distroy']);
    Route::get('/showTeamRehabilitatesOn/{id}', [TeamRehabilitatesOnController::class, 'show']);
});


//PrioritizedLandOwner  controller 
Route::group(['prefix'=>'PrioritizedLandOwner'], function () {
    
    Route::get('/seePrioritizedLandOwner', [PrioritizedLandOwnerController::class,'index']);
    Route::get('/homePrioritizedLandOwner', [PrioritizedLandOwnerController::class,'home']);
    Route::post('/storePrioritizedLandOwner', [PrioritizedLandOwnerController::class,'store']);
    Route::get('/PrioritizedLandOwner', [PrioritizedLandOwnerController::class,'create']);
    Route::delete('/deletePrioritizedLandOwner/{id}', [PrioritizedLandOwnerController::class, 'distroy']);
    Route::get('/showPrioritizedLandOwner/{id}', [PrioritizedLandOwnerController::class, 'show']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
