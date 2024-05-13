<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
//
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DeptAdminController;
use App\Http\Controllers\ContentCreatorController;
use App\Http\Controllers\draftController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ApproverController;
use App\Http\Controllers\SpotlightController;

//
use App\Http\Controllers\Department\DepartmentController;
//
use App\Http\Controllers\Organisation\OrganisationController;
//
use App\Http\Controllers\AdminController;
//
use App\Http\Controllers\Government\CouncilController;
use App\Http\Controllers\Government\IasController;
use App\Http\Controllers\Government\McsController;
use App\Http\Controllers\Government\DistrictController;
//
use App\Http\Controllers\Navbar\TenderController;
use App\Http\Controllers\Navbar\NotificationController;
use App\Http\Controllers\Navbar\CitizenCharterController;
use App\Http\Controllers\Navbar\KeycontactController;
use App\Http\Controllers\Navbar\NewsroomController;
//
use App\Http\Controllers\Gallery\GalleryController;
//
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HonourableController;
use App\Http\Controllers\Home\AboutController;

//
use App\Http\Controllers\category\SchemeController;
use App\Http\Controllers\category\FormController;
use App\Http\Controllers\category\ActController;
use App\Http\Controllers\category\DocumentController;
use App\Http\Controllers\category\CircularController;
use App\Http\Controllers\category\ServiceController;
use App\Http\Controllers\category\RuleController;
use App\Http\Controllers\category\GovorderController;

//
use App\Http\Controllers\UserController; //  user for draft user 

// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
Route::get('/',[IndexController::class,'Index']);
Route::get('/user', function () {
    return view('welcome');
});
//''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
//                                                                  super admin login                                                                 //
//''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
Route::get('superadminlogin',[AdminController::class,'index']);
Route::get('superadminregister',[AdminController::class,'superAdminRegister']);
Route::post('newsuperadminregister',[AdminController::class,'newSuperAdminRegister']);

Route::view('no-access','restrictedAccess');
// Route::get('superadmindashboard',[AdminController::class,'SuperAdminDash']);
//====================================================================================================================================================//
//                                                                 jobs of super admin                                                                //
//====================================================================================================================================================//
// Route::middleware(['web','auth'])->group(function () {
    // ...
    Route::post('newsuperadminlogin',[AdminController::class,'newSuperAdminLogin']);
    Route::get('admindashboard',[AdminController::class,'AdminDashboard']);
    Route::get('superadminsettings',[AdminController::class,'superAdminSettings']);
    
    // Routes for manage Departments
    Route::get('adddepartment',[AdminController::class,'addDepartmentIndex']);
    Route::post('adddepartment',[AdminController::class,'addNewDepartment']);
    Route::get('viewdepartment',[AdminController::class,'viewDepartment']);
    Route::get('editdept/{id}',[AdminController::class,'editDept'])->name('editdept');
    Route::post('updatedept/{id}',[AdminController::class,'updateDept'])->name('updatedept');
    Route::get('deletedept/{id}',[AdminController::class,'deleteDept'])->name('deletedept');

//Routes for Organisation types
    Route::get('addorganisationtype',[AdminController::class,'getOrganisationType']);
    Route::post('neworganisationtype',[AdminController::class,'postOrganisationType']);
    Route::get('vieworganisationtype',[AdminController::class,'viewOrganisationType']);
    Route::get('getorganisationbydeptid/{id}',[AdminController::class,'getorganisationbydeptid']);
    Route::get('editorgtype/{id}',[AdminController::class,'editOrganisationType']);
    Route::post('updateorganisationtype/{id}',[AdminController::class,'updateOrganisationType']);
    Route::get('deleteorgtype/{id}',[AdminController::class,'deleteOrganisationType']);

//Routes for Organisation names
    Route::get('addorganisation',[AdminController::class,'getOrgName']);
    Route::post('postorganisation',[AdminController::class,'postOrgName']);
    Route::get('vieworganisations',[AdminController::class,'viewOrgName']);
    Route::get('editorgname/{id}',[AdminController::class,'editOrgName']);
    Route::post('updateorganisation/{id}',[AdminController::class,'updateOrgName']);
    Route::get('deleteorgname/{id}',[AdminController::class,'deleteOrgName']);
    
//Routes for Category
Route::get('createcategory',[AdminController::class,'getContentCategory']);
Route::post('createnewcategory',[AdminController::class,'postContentCategory']);
Route::get('viewcategories',[AdminController::class,'viewCategory']);
Route::get('editcategory/{id}',[AdminController::class,'editCategory']);
Route::post('updatecategory/{id}',[AdminController::class,'updateCategory']);
Route::get('deletecategory/{id}',[AdminController::class,'deleteCategory']);


//Routes for Manage Department Admins/Publishers
    Route::get('adduser',[AdminController::class,'adduser']);
    Route::post('addnewuser',[AdminController::class,'addNewUser']);
    Route::get('viewuser',[AdminController::class,'viewuser']);
    Route::get('editpublisher/{id}',[AdminController::class,'editDeptAdmin']);
    Route::post('updatepublisher/{id}',[AdminController::class,'updateDeptAdmin']);
    Route::get('deletepublisher/{id}',[AdminController::class,'deleteDeptAdmin']); 
    Route::put('/activepub/{id}',[AdminController::class,'activePub']); 
    Route::put('/pendingpub/{id}',[AdminController::class,'pendingPub']);

	
//Route for Manage Language
    Route::get('addlanguage',[LanguageController::class,'getLanguage']);
    Route::post('newlanguage',[LanguageController::class,'postLanguage']);
    Route::get('viewLanguage',[LanguageController::class,'viewLanguage']);
    Route::get('editlang/{id}',[LanguageController::class,'getUpdateLanguage']);
    Route::post('updatelanguage/{id}',[LanguageController::class,'postUpdateLanguage']);
    Route::get('deletelang/{id}',[LanguageController::class,'deleteLanguage']);
    
//Route for Government contents
    Route::get('governmentcontents',[AdminController::class,'governmentContents']);
    Route::get('viewgovernmentcontents',[AdminController::class,'viewgovernmentContents']);

//Routes for Council of Ministers
    Route::post('addnewcom',[CouncilController::class,'newcom']);
    Route::get('viewcom',[CouncilController::class,'viewcom']);
    Route::get('editcom/{id}',[CouncilController::class,'editCom'])->name('editcom');
    Route::post('editcom/{id}',[CouncilController::class,'updateCom'])->name('editcom');
    Route::get('deletecom/{id}',[CouncilController::class,'deleteCom'])->name('deletecom');
    Route::get('viewcomdetails/{id}',[CouncilController::class,'viewMinisterDetails'])->name('viewcomdetails');
    /*
//Routes for IAS
    Route::post('addnewias',[IasController::class,'newias']);
    Route::get('viewias',[IasController::class,'viewias']);
    Route::get('editias/{id}',[IasController::class,'editias']);
    Route::post('updateias/{id}',[IasController::class,'updateias']);
    Route::get('deleteias/{id}',[IasController::class,'deleteias']);*/
    
    //Routes for MCS
    Route::post('addnewmcs',[McsController::class,'newmcs']);
    Route::get('viewmcs',[McsController::class,'viewmcs']);
    Route::get('editmcs/{id}',[McsController::class,'editmcs']);
    Route::post('updatemcs/{id}',[McsController::class,'updatemcs']);
    Route::get('deletemcs/{id}',[McsController::class,'deletemcs']);

    //Route for Districts
    Route::get('adddistricts',[AdminController::class,'getDistrict']);
    Route::post('addnewdist',[AdminController::class,'newdist']);
    Route::get('viewdist',[AdminController::class,'viewdist']);
    Route::get('editdist/{id}',[AdminController::class,'editDist']);
    Route::post('updatedist/{id}',[AdminController::class,'updateDist']);
    Route::get('deletedist/{id}',[AdminController::class,'deleteDist']);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Routes for About Meghalaya
    Route::get('editabout',[SuperAdminController::class,'editAbout']); 
    Route::get('editblocks',[SuperAdminController::class,'editB']);
    Route::post('editaboutmeghalaya',[SuperAdminController::class,'editAboutM']);
    Route::post('editblock',[SuperAdminController::class,'editBlock']);
//Routes for edit Gallery Contents
    Route::get('editgallery',[GalleryController::class,'editGallery']);
    Route::get('viewgallery',[GalleryController::class,'viewGallery']);
    //Routes for edit gallery Images 
    Route::get('viewimage',[GalleryController::class,'viewImages']);
    Route::post('addnewimages',[GalleryController::class,'addImage']);
    Route::get('editimage/{id}',[GalleryController::class,'editImage']);
    Route::post('updateimage/{id}',[GalleryController::class,'updateImage']);
    Route::get('deleteimage/{id}',[GalleryController::class,'deleteImage']);
    //Routes for edit gallery videos
    Route::get('viewvideo',[GalleryController::class,'viewVideos']);
    Route::post('addnewvideos',[GalleryController::class,'addVideo']);
    Route::get('editvideo/{id}',[GalleryController::class,'editVideo']);
    Route::post('updatevideo/{id}',[GalleryController::class,'updateVideo']);
    Route::get('deletevideo/{id}',[GalleryController::class,'deleteVideo']);

// Routes for edit Home page contents
    Route::get('edithomepage',[HomeController::class,'editHomePage']);
        //Routes for slides 
    Route::post('addnewslide',[HomeController::class,'addSlides']);
    Route::get('viewslide',[HomeController::class,'viewSlides']);
    Route::get('editslide/{id}',[HomeController::class,'editSlide']);
    Route::post('updateslide/{id}',[HomeController::class,'updateSlide']);
    Route::get('deleteslide/{id}',[HomeController::class,'deleteSlide']);
        //Route for honourabe
    Route::post('addhonourable',[HonourableController::class,'addHon']);
    Route::get('viewhonourable',[HonourableController::class,'viewHonourable']);
    Route::get('edithonourable/{id}',[HonourableController::class,'editHon']);
    Route::post('updatehonourable/{id}',[HonourableController::class,'updateHon']);
    Route::get('deletehon/{id}',[HonourableController::class,'viewHonourable']);
// });

// Route::get('superadmindashboard',[SuperAdminController::class,'SuperAdminDash'])->middleware('auth.super-auth');
//===========================================
Route::get('viewnavbarcontant',[SuperAdminController::class,'navBar']);
Route::get('addnavbarcontent',[SuperAdminController::class,'addNavBar']);
Route::get('editnavbar',[SuperAdminController::class,'addNavBar']);
//=============================================================================================

//''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
//                               departmnt admin/publisher login
//''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
Route::get('deptadminlogin',[DeptAdminController::class,'index']);
Route::post('adminlogin',[DeptAdminController::class,'deptAdminLogin']);
Route::get('approver',[ApproverController::class,'ApproverDashboard']);
Route::get('publisherlogout',[DeptAdminController::class,'publisherLogout']);
//==============================================================================================================//
//                               jobs of department admin/publisher
//==============================================================================================================//
Route::get('addsubdept',[DeptAdminController::class,'addSubDept']);
Route::post('addnewsubdept',[DeptAdminController::class,'addNewSubDept']);
//
Route::get('viewsubdept',[DeptAdminController::class,'viewSubDept']);

//Routes for manage content creators
Route::get('addcontentcreator',[DeptAdminController::class,'addCC']);
Route::post('addnewcontentcreator',[DeptAdminController::class,'postCC']);
Route::put('/activecc/{id}',[DeptAdminController::class,'activeCC']);
Route::put('/pendingcc/{id}',[DeptAdminController::class,'pendingCC']);
Route::get('viewcontentcreator',[DeptAdminController::class,'viewCC']);

//routes for category contents
//government Order
Route::get('viewgovcontent/{id}',[DeptAdminController::class,'viewGovContent']);
Route::put('approveorder/{id}',[DeptAdminController::class,'approveOrderContent']);
Route::put('recheckorder/{id}',[DeptAdminController::class,'recheckOrderContent']);
Route::put('rejectorder/{id}',[DeptAdminController::class,'rejectOrderContent']);
//act 
Route::get('viewactcontent/{id}',[DeptAdminController::class,'viewActContent']);
Route::put('approveact/{id}',[DeptAdminController::class,'approveActContent']);
Route::put('recheckact/{id}',[DeptAdminController::class,'recheckActContent']);
Route::put('rejectact/{id}',[DeptAdminController::class,'rejectActContent']);
Route::get('deleteactfrompub/{id}',[DeptAdminController::class,'delActFromPub']);
//document
Route::get('viewdoccontent/{id}',[DeptAdminController::class,'viewDocContent']);
Route::put('approvedocument/{id}',[DeptAdminController::class,'approveDocContent']);
Route::put('recheckdocument/{id}',[DeptAdminController::class,'recheckDocContent']);
Route::put('rejectdocument/{id}',[DeptAdminController::class,'rejectDocContent']);
//routes for navigation bar contents
Route::get('viewtendercontent/{id}',[DeptAdminController::class,'viewTenderContent']);
Route::put('approvetender/{id}',[DeptAdminController::class,'approveTenderContent']);
Route::put('rechecktender/{id}',[DeptAdminController::class,'recheckTenderContent']);
Route::put('rejecttender/{id}',[DeptAdminController::class,'rejectTenderContent']);
Route::get('deletetenderfrompub/{id}',[DeptAdminController::class,'delTenderFromPub']);
//routes for Notification contents
Route::get('viewnotificationcontent/{id}',[DeptAdminController::class,'viewNotificationContent']);
Route::put('approvenotification/{id}',[DeptAdminController::class,'approveNotificationContent']);
Route::put('rechecknotification/{id}',[DeptAdminController::class,'recheckNotificationContent']);
Route::put('rejectnotification/{id}',[DeptAdminController::class,'rejectNotificationContent']);
Route::get('deletenotificationfrompub/{id}',[DeptAdminController::class,'delNotificationFromPub']);

//'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
//                                                                      content creator login                                                              //
//'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
Route::get('contentcreatorlogin',[ContentCreatorController::class,'creatorLoginPage']);
Route::post('creatorlogin',[ContentCreatorController::class,'creatorLogin']);
Route::get('cdcdashboard',[ContentCreatorController::class,'CCIndex']);
Route::get('creatorlogout',[ContentCreatorController::class,'ccLogout']);
//===========================================================================================================================================================//
//                                                                      jobs of Content Creator
//===========================================================================================================================================================//
// Route::get('createcontent',[ContentCreatorController::class,'createContent']);
Route::get('creatorsettings',[ContentCreatorController::class,'ccSettings']);
Route::get('createcategorycontent',[ContentCreatorController::class,'createCategoryContent']);

//route for display recently created contents
Route::get('viewcontents',[ContentCreatorController::class,'viewContents']);
//routes for diffetent categories

//Routes for Schemes
Route::post('addnewscheme',[SchemeController::class,'addNewScheme']);                   // Schemes
Route::get('viewscheme',[SchemeController::class,'viewSchemes']);
Route::get('deletescheme/{id}',[SchemeController::class,'deleteScheme']);
Route::get('editscheme/{id}',[SchemeController::class,'editScheme']);
Route::post('updatescheme/{id}',[SchemeController::class,'updateScheme']);
//Routes for Forms
Route::post('addnewform',[FormController::class,'addNewForm']);                         // Forms
Route::get('viewform',[FormController::class,'viewForm']);
Route::get('deleteform/{id}',[FormController::class,'deleteForm']);
Route::get('editform/{id}',[FormController::class,'editForm']);
Route::post('updateform/{id}',[FormController::class,'updateForm']);

//Routes for Acts
Route::post('addnewact',[ContentCreatorController::class,'addNewAct']);                            // Acts             Done
Route::get('viewact',[ContentCreatorController::class,'viewAct']);
Route::get('viewactdetails/{id}',[ContentCreatorController::class,'viewActDetails'])->name('viewactdetails');
Route::get('downloadact/{file}',[ContentCreatorController::class,'downloadAct']);
Route::get('deleteact/{id}',[ContentCreatorController::class,'deleteAct']);
Route::get('editact/{id}',[ContentCreatorController::class,'editAct']);
Route::post('updateact/{id}',[ContentCreatorController::class,'updateAct']);
Route::put('sendtopubact/{id}',[ContentCreatorController::class,'sendToPublisher']);

//Routes for Spotlight
Route::post('addnewspot',[ContentCreatorController::class,'addNewSpotlight']);                         // spotlight            Done
Route::get('viewspot',[ContentCreatorController::class,'viewSpotlight']);
Route::get('viewspotdetails/{id}',[ContentCreatorController::class,'viewSpotlightDetails'])->name('viewspotdetails');
Route::get('downloadspot/{file}',[ContentCreatorController::class,'downloadSpotlight']);
Route::get('deletespot/{id}',[ContentCreatorController::class,'deleteSpotlight']);
Route::get('editspot/{id}',[ContentCreatorController::class,'editSpotlight']);
Route::post('updatespot/{id}',[ContentCreatorController::class,'updateSpotlight']);
Route::put('sendtopubspot/{id}',[ContentCreatorController::class,'sendToPub']);


//Routes for Map Category
Route::post('addnewmapcat',[ContentCreatorController::class,'addNewMapcategory']);                         // spotlight            Done
Route::get('viewmapcat',[ContentCreatorController::class,'viewMapcategory']);
Route::get('viewmapcatdetails/{id}',[ContentCreatorController::class,'viewMapcategoryDetails'])->name('viewmapcatdetails');
Route::get('downloadmapcat/{file}',[ContentCreatorController::class,'downloadMapcategory']);
Route::get('deletemapcat/{id}',[ContentCreatorController::class,'deleteMapcategory']);
Route::get('editmapcat/{id}',[ContentCreatorController::class,'editMapcategory']);
Route::post('updatemapcat/{id}',[ContentCreatorController::class,'updateMapcategory']);
Route::put('sendtopubmapcat/{id}',[ContentCreatorController::class,'publish']);

//Routes for Rules and regulation
Route::post('addnewrule',[RuleController::class,'addNewRule']);                         // Rules                       
Route::get('viewrule',[RuleController::class,'viewRule']);
Route::get('deleterule/{id}',[RuleController::class,'deleteRule']);
Route::get('editrule/{id}',[RuleController::class,'editRule']);
Route::post('updaterule/{id}',[RuleController::class,'updateRule']);
//Routes for Services
Route::post('addnewservice',[ServiceController::class,'addNewService']);                //  Services              
Route::get('viewservice',[ServiceController::class,'viewService']);
Route::get('deleteservice/{id}',[ServiceController::class,'deleteService']);
Route::get('editservice/{id}',[ServiceController::class,'editService']);
Route::post('updateservice/{id}',[ServiceController::class,'updateService']);
//Routes for Circular OMs
Route::post('addnewcircularoms',[CircularController::class,'addNewCircularoms']);       // Circular
Route::get('viewcircularoms',[CircularController::class,'viewCircularoms']);
Route::get('deletecircularoms/{id}',[CircularController::class,'deleteCircularoms']);
Route::get('editcircularom/{id}',[CircularController::class,'editCircular']);
Route::post('updatecircularom/{id}',[CircularController::class,'updateCircular']);
//Routes for documents
Route::post('addnewdocument',[DocumentController::class,'addNewDocument']);             // Document
Route::get('viewdocument',[DocumentController::class,'viewDocument']);
Route::get('downloaddocument/{file}',[DocumentController::class,'downloadDocument']);
Route::get('deletedocument/{id}',[DocumentController::class,'deleteDocument']);
Route::get('editdocument/{id}',[DocumentController::class,'editDocument']);
Route::post('updatedocument/{id}',[DocumentController::class,'updateDocument']);
Route::put('sendtopubdoc/{id}',[DocumentController::class,'sendToPublisher']);
// Route::post('changestatus/{id}',[DocumentController::class,'changeStatus']);

//Routes for Government Orders
Route::post('addnewgovorder',[GovorderController::class,'addNewGovOrder']);             // Gov orderd
Route::get('vieworder',[GovorderController::class,'viewGovOrder']);
Route::get('downloadorder/{file}',[GovorderController::class,'downloadOrder']);
Route::get('deleteorder/{id}',[GovorderController::class,'deleteGovOrder']);
Route::get('editorder/{id}',[GovorderController::class,'editGovOrder']);
Route::post('updateorder/{id}',[GovorderController::class,'updateGovOrder']);
Route::put('sendtopuborder/{id}',[GovorderController::class,'sendToPublisher']);
//=====================================================================================
//Navbar contents
Route::get('homepagecontents',[ContentCreatorController::class,'homePage']);

//Routes for Notifications
Route::post('addnewnotification',[NotificationController::class,'addNewNotification']);
Route::get('viewnotification',[NotificationController::class,'viewNotification']);
Route::get('editnotification/{id}',[NotificationController::class,'editNotification']);
Route::post('updatenotification/{id}',[NotificationController::class,'updateNotification']);
Route::get('deletenotification/{id}',[NotificationController::class,'deleteNotification']);
Route::get('downloadnoti/{id}',[NotificationController::class,'downloadNotification']);
Route::get('viewnotificationdetails/{id}',[NotificationController::class,'viewNotificationDetails']);
Route::put('sendtopubnoti/{id}',[NotificationController::class,'sendToPublisher']);
//Routes for Tenders                                                                                        //pending
Route::post('addnewtender',[TenderController::class,'addNewTender']);
Route::get('viewtender',[TenderController::class,'viewTender']);
Route::get('downloadtender/{file}',[TenderController::class,'downloadTender']);
Route::get('deletetender/{id}',[TenderController::class,'deleteTenders']);
Route::get('edittender/{id}',[TenderController::class,'editTender']);
Route::post('updatetender/{id}',[TenderController::class,'updateTender']);
Route::get('viewtenderdetails/{id}',[TenderController::class,'viewTenderDetails']);
Route::put('sendtopubtender/{id}',[TenderController::class,'sendToPublisher']);
//Routes for Citizen Charters
Route::post('addnewcitizencharter',[CitizenCharterController::class,'addNewCitizenCharter']);
Route::get('viewcitizencharter',[CitizenCharterController::class,'viewCitizenCharter']);
Route::get('deletecitizencharter/{id}',[CitizenCharterController::class,'deleteCitizenCharter']);
//Routes for key Contacts
Route::post('addnewcontact',[KeycontactController::class,'addNewContact']);
Route::get('viewcontact',[KeycontactController::class,'viewContact']);
Route::get('deletecontact/{id}',[KeycontactController::class,'deleteContact']);

//Routes for Profile form
Route::post('addnewprofile',[ContentCreatorController::class,'addNewProfile']);                            // Profileform    Done
Route::get('viewprofileform',[ContentCreatorController::class,'viewProfileform']);
Route::get('viewprofileformdetails/{id}',[ContentCreatorController::class,'viewProfileformDetails'])->name('viewprofileformdetails');
Route::get('deleteprofileform/{id}',[ContentCreatorController::class,'deleteProfileform']);
Route::get('editprofileform/{id}',[ContentCreatorController::class,'editProfileform']);
Route::post('updateprofileform/{id}',[ContentCreatorController::class,'updateProfileform']);
Route::put('sendtopubprofileform/{id}',[ContentCreatorController::class,'Publisher']);

////////////////////////////////////////////////////////////////////////////////////////////////////

//Routes for main portel show contents
Route::get('/acts',[ActController::class,'publicViewAct']);
Route::get('/aboutact/{id}',[ActController::class,'aboutAct']);

Route::get('/depts',[DepartmentController::class,'publicViewDept']);
Route::get('/aboutdept/{id}',[DepartmentController::class,'aboutDept']);

Route::get('/districts',[DistrictController::class,'publicViewDist']);
Route::get('/aboutdist/{id}',[DistrictController::class,'aboutDist']);

Route::get('/tenders',[TenderController::class,'publicViewTender']);
// Route::post('/searchtender',[TenderController::class,'searchTender']);
Route::get('/abouttender/{id}',[TenderController::class,'aboutTender']);

Route::get('/notifications',[NotificationController::class,'publicViewNotification']);
Route::get('/aboutnotification/{id}',[NotificationController::class,'aboutNotification']);

Route::get('/citizencharter',[CitizenCharterController::class,'publicViewCitizenCharter']);
Route::get('/aboutcitizencharter/{id}',[CitizenCharterController::class,'aboutCitizenCharter']);

Route::get('/keycontacts',[KeycontactController::class,'publicViewKeyContact']);
Route::get('/aboutkeycontact/{id}',[KeycontactController::class,'aboutKeyContact']);

Route::get('/viewministers',[CouncilController::class,'publicViewMinister']);

Route::get('/viewiaslist',[IasController::class,'publicViewIAS']);

Route::get('/viewmcslist',[McsController::class,'publicViewMCS']);

Route::get('/aboutmeg',[AboutController::class,'aboutMeg']);

Route::get('/newsroom',[NewsroomController::class,'getNewsRoom']);

Route::get('/spotlights',[ContentCreatorController::class,'publicViewSpot']);
Route::get('/aboutspot/{id}',[ContentCreatorController::class,'aboutSpotlight']);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//route for login for all Publisher/creator/draft user/admin/Final User 
Route::get('login',[LoginController::class,'getlogin']);
Route::post('getdashboard',[LoginController::class,'getdashboard']);

//Routes for Document types
Route::get('adddocumenttype',[AdminController::class,'getDocument_type']);
Route::post('newdocumenttype',[AdminController::class,'postDocument_type']);
Route::get('viewdocumenttype',[AdminController::class,'viewDocument_type']);
Route::get('editdoctype/{id}',[AdminController::class,'editDocument_type']);
Route::post('updatedocumenttype/{id}',[AdminController::class,'updateDocument_type']);
Route::get('deletedoctype/{id}',[AdminController::class,'deleteDocument_type']);

//ROUTE FOR ASSEMBLY DATA
Route::get('addassemblydata',[AdminController::class,'getAssembly_Data']);
Route::post('newassemblydata',[AdminController::class,'postAssembly_Data']);
Route::get('viewassemblydata',[AdminController::class,'viewAssembly_Data']);
Route::get('editassemdata/{id}',[AdminController::class,'editAssembly_Data']);
Route::post('updateassemdata/{id}',[AdminController::class,'updateAssembly_Data']);
Route::get('deleteassemdata/{id}',[AdminController::class,'deleteAssembly_Data']);

//ROUTE FOR COMMUNITY DATA
Route::get('addcommunitydata',[AdminController::class,'getCommunity_Data']);
Route::post('newcommunitydata',[AdminController::class,'postCommunity_Data']);
Route::get('viewcommunitydata',[AdminController::class,'viewCommunity_Data']);
Route::get('editcomdata/{id}',[AdminController::class,'editCommunity_Data']);
Route::post('updatecomdata/{id}',[AdminController::class,'updateCommunity_Data']);
Route::get('deletecomdata/{id}',[AdminController::class,'deleteCommunity_Data']);

//ROUTE FOR CONSTITUENCY DATA
Route::get('addconstituencydata',[AdminController::class,'getConstituency_Data']);
Route::post('newconstituencydata',[AdminController::class,'postConstituency_Data']);
Route::get('viewconstituencydata',[AdminController::class,'viewConstituency_Data']);
Route::get('editconsdata/{id}',[AdminController::class,'editConstituency_Data']);
Route::post('updateconsdata/{id}',[AdminController::class,'updateConstituency_Data']);
Route::get('deleteconsdata/{id}',[AdminController::class,'deleteConstituency_Data']);

//ROUTE FOR CONTACT TYPE DATA
Route::get('addcontactdata',[AdminController::class,'getContact_Data']);
Route::post('newcontactdata',[AdminController::class,'postContact_Data']);
Route::get('viewcontactdata',[AdminController::class,'viewContact_Data']);
Route::get('edittactdata/{id}',[AdminController::class,'editContact_Data']);
Route::post('updatetactdata/{id}',[AdminController::class,'updateContact_Data']);
Route::get('deletetactdata/{id}',[AdminController::class,'deleteContact_Data']);

//ROUTE FOR IAS BATCH DATA
Route::get('addiasbatchdata',[AdminController::class,'getIasbatch']);
Route::post('newiasbatchdata',[AdminController::class,'postIasbatch']);
Route::get('viewiasbatchdata',[AdminController::class,'viewIasbatch']);
Route::get('editiasdata/{id}',[AdminController::class,'editIasbatch']);
Route::post('updateiasdata/{id}',[AdminController::class,'updateIasbatch']);
Route::get('deleteiasdata/{id}',[AdminController::class,'deleteIasbatch']);

//ROUTE FOR LOKSABHA DATA
Route::get('addloksabhadata',[AdminController::class,'getLoksabha']);
Route::post('newloksabhadata',[AdminController::class,'postLoksabha']);
Route::get('viewloksabhadata',[AdminController::class,'viewLoksabha']);
Route::get('editlokdata/{id}',[AdminController::class,'editLoksabha']);
Route::post('updatelokdata/{id}',[AdminController::class,'updateLoksabha']);
Route::get('deletelokdata/{id}',[AdminController::class,'deleteLoksabha']);

//ROUTE FOR LOKSABHA CONSTITUENCY DATA
Route::get('addlokconstituencydata',[AdminController::class,'getLoksabhaConst']);
Route::post('newlokconstituencydata',[AdminController::class,'postLoksabhaConst']);
Route::get('viewlokconstituencydata',[AdminController::class,'viewLoksabhaConst']);
Route::get('editlokconstdata/{id}',[AdminController::class,'editLoksabhaConst']);
Route::post('updatelokconstdata/{id}',[AdminController::class,'updateLoksabhaConst']);
Route::get('deletelokconstdata/{id}',[AdminController::class,'deleteLoksabhaConst']);

//ROUTE FOR NOTIFICATION CATEGORY 
Route::get('addnotificationcategorydata',[AdminController::class,'getNotificationCategory']);
Route::post('newnotificationcategorydata',[AdminController::class,'postNotificationCategory']);
Route::get('viewnotificationcategorydata',[AdminController::class,'viewNotificationCategory']);
Route::get('editnotifieddata/{id}',[AdminController::class,'editNotificationCategory']);
Route::post('updatenotifieddata/{id}',[AdminController::class,'updateNotificationCategory']);
Route::get('deletenotifieddata/{id}',[AdminController::class,'deleteNotificationCategory']);


//ROUTE FOR RULES CATEGORY DATA
Route::get('addrulescategorydata',[AdminController::class,'getRules_Data']);
Route::post('newrulescategorydata',[AdminController::class,'postRules_Data']);
Route::get('viewrulescategorydata',[AdminController::class,'viewRules_Data']);
Route::get('editruledata/{id}',[AdminController::class,'editRules_Data']);
Route::post('updateruledata/{id}',[AdminController::class,'updateRules_Data']);
Route::get('deleteruledata/{id}',[AdminController::class,'deleteRules_Data']);

//ROUTE FOR SCHEME BENEFICIARIES DATA
Route::get('addschemebeneficiariesdata',[AdminController::class,'getSchemeBene_Data']);
Route::post('newschemebeneficiariesdata',[AdminController::class,'postSchemeBene_Data']);
Route::get('viewschemebeneficiariesdata',[AdminController::class,'viewSchemeBene_Data']);
Route::get('editschemedata/{id}',[AdminController::class,'editSchemeBene_Data']);
Route::post('updateschemedata/{id}',[AdminController::class,'updateSchemeBene_Data']);
Route::get('deleteschemedata/{id}',[AdminController::class,'deleteSchemeBene_Data']);

//ROUTE FOR SCHEME BENEFITS DATA
Route::get('addschemebenefitdata',[AdminController::class,'getSchemeBenefit_Data']);
Route::post('newschemebenefitdata',[AdminController::class,'postSchemeBenefit_Data']);
Route::get('viewschemebenefitdata',[AdminController::class,'viewSchemeBenefit_Data']);
Route::get('editschemebendata/{id}',[AdminController::class,'editSchemeBenefit_Data']);
Route::post('updateschemebendata/{id}',[AdminController::class,'updateSchemeBenefit_Data']);
Route::get('deleteschemebendata/{id}',[AdminController::class,'deleteSchemeBenefit_Data']);

//ROUTE FOR SCHEME NAME DATA
Route::get('addschemenamedata',[AdminController::class,'getSchemeName_Data']);
Route::post('newschemenamedata',[AdminController::class,'postSchemeName_Data']);
Route::get('viewschemenamedata',[AdminController::class,'viewSchemeName_Data']);
Route::get('editnamedata/{id}',[AdminController::class,'editSchemeName_Data']);
Route::post('updatenamedata/{id}',[AdminController::class,'updateSchemeName_Data']);
Route::get('deletenamedata/{id}',[AdminController::class,'deleteSchemeName_Data']);

//ROUTE FOR SCHEME NAME DATA
Route::get('addschemesponsordata',[AdminController::class,'getSchemesponsor_Data']);
Route::post('newschemesponsordata',[AdminController::class,'postSchemesponsor_Data']);
Route::get('viewschemesponsordata',[AdminController::class,'viewSchemesponsor_Data']);
Route::get('editsponsordata/{id}',[AdminController::class,'editSchemesponsor_Data']);
Route::post('updatesponsordata/{id}',[AdminController::class,'updateSchemesponsor_Data']);
Route::get('deletesponsordata/{id}',[AdminController::class,'deleteSchemesponsor_Data']);

//ROUTE FOR SERVICE CATEGORY 
Route::get('addservicecategorydata',[AdminController::class,'getServicecategory_Data']);
Route::post('newservicecategorydata',[AdminController::class,'postServicecategory_Data']);
Route::get('viewservicecategorydata',[AdminController::class,'viewServicecategory_Data']);
Route::get('editservicedata/{id}',[AdminController::class,'editServicecategory_Data']);
Route::post('updateservicedata/{id}',[AdminController::class,'updateServicecategory_Data']);
Route::get('deleteservicedata/{id}',[AdminController::class,'deleteServicecategory_Data']);


//ROUTE FOR POSITION TYPE DATA
Route::get('addpositiondata',[AdminController::class,'getPosition_Data']);
Route::post('newpositiondata',[AdminController::class,'postPosition_Data']);
Route::get('viewpositiondata',[AdminController::class,'viewPosition_Data']);
Route::get('editpositiondata/{id}',[AdminController::class,'editPosition_Data']);
Route::post('updatepositiondata/{id}',[AdminController::class,'updatePosition_Data']);
Route::get('deletepositiondata/{id}',[AdminController::class,'deletePosition_Data']);

//ROUTE FOR Map Category DATA
Route::get('addmapdata',[AdminController::class,'getMapcatData']);
Route::post('newmapdata',[AdminController::class,'postMapcat']);
Route::get('viewmapdata',[AdminController::class,'viewMapcat']);
Route::get('editmapdata/{id}',[AdminController::class,'editMapcat']);
Route::post('updatemapdata/{id}',[AdminController::class,'updateMapcat']);
Route::get('deletemapdata/{id}',[AdminController::class,'deleteMapcat']);

//ROUTE FOR ADMIN LOGOUT
Route::get('logout',function(){
    Session::flush();
    Auth::logout();
    return redirect('login');
});

////////////////////// CONTENT-CREATORS /////////////////////////

Route::get('addpublish',[PublisherController::class,'getPublisher']);
Route::post('newpublish',[PublisherController::class,'postPublisher']);
Route::get('viewpublish',[PublisherController::class,'viewPublisher']);
Route::get('editpublish/{id}',[PublisherController::class,'getUpdatePublisher']);
Route::post('updatepublish/{id}',[PublisherController::class,'postUpdatePublisher']);
Route::get('deletepublish/{id}',[PublisherController::class,'deletePublisher']);
