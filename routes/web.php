<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

//Auth
Auth::routes(['register' => false,'reset' => false]);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){

//Home Routes
Route::get('/', 'Back\DashboardController@index')->name('home');

//Messages Routes
Route::get('/mesajlar','Back\MessageController@index')->name('messages');
Route::get('/mesajlar/{id}','Back\MessageController@Single')->name('messages.single');
Route::get('/mesajlar/sil/{id}','Back\MessageController@HardDelete')->name('messages.delete');

//Qeydiyyatlar Routes
Route::get('/qeydiyyatlar','Back\QeydiyyatController@index')->name('qeydiyyat');
Route::get('/qeydiyyatlar/{id}','Back\QeydiyyatController@Single')->name('qeydiyyat.single');
Route::get('/qeydiyyatlar/sil/{id}','Back\QeydiyyatController@HardDelete')->name('qeydiyyat.delete');


//Profile Routes
Route::get('/profile','Back\ProfileController@Getir')->name('profile');
Route::post('/profile/update','Back\ProfileController@RedakteEt')->name('profile.update');

//About Routes
Route::get('/haqqinda/men-kimem','Back\AboutController@Getir')->name('about');
Route::post('/haqqinda/men-kimem/update','Back\AboutController@RedakteEt')->name('about.update');


//Conference Routes

Route::get('/klinikalar','Back\ConferenceController@Getir')->name('conference');
Route::post('/klinikalar','Back\ConferenceController@ElaveEt')->name('conference.create');
Route::get('/klinikalar/status','Back\ConferenceController@Status')->name('conference.status');
Route::get('/klinikalar/silinenler','Back\ConferenceController@Silinenler')->name('conference.trashed');
Route::get('/klinikalar/sil/{id}','Back\ConferenceController@Sil')->name('conference.delete');
Route::get('/klinikalar/harddelete/{id}','Back\ConferenceController@HardDelete')->name('conference.harddelete');
Route::get('/klinikalar/geriqaytar/{id}','Back\ConferenceController@Recover')->name('conference.recover');
Route::post('/klinikalar/yenile/{id}','Back\ConferenceController@RedakteEt')->name('conference.update');
Route::get('/klinikalar/redaktegetir/{id}','Back\ConferenceController@RedakteGetir')->name('conference.getData');
 


//Departments SubCategories Routes

Route::get('/departmets','Back\PSubCategoryController@Getir')->name('psubcategories');
Route::post('/departmets','Back\PSubCategoryController@ElaveEt')->name('psubcategories.create');
Route::get('/departmets/redaktegetir','Back\PSubCategoryController@RedakteGetir')->name('psubcategories.getData');
Route::post('/departmets/yenile','Back\PSubCategoryController@RedakteEt')->name('psubcategories.update');
Route::get('/departmets/status','Back\PSubCategoryController@Status')->name('psubcategories.status');
Route::get('/departmets/silinenler','Back\PSubCategoryController@Silinenler')->name('psubcategories.trashed');
Route::get('/departmets/sil/{id}','Back\PSubCategoryController@Sil')->name('psubcategories.delete');
Route::get('/departmets/harddelete/{id}','Back\PSubCategoryController@HardDelete')->name('psubcategories.harddelete');
Route::get('/departmets/geriqaytar/{id}','Back\PSubCategoryController@Recover')->name('psubcategories.recover');

//Doctors Routes

Route::get('/hekimler','Back\PictureController@Getir')->name('picture');
Route::post('/hekimler','Back\PictureController@ElaveEt')->name('picture.create');
Route::get('/hekimler/status','Back\PictureController@Status')->name('picture.status');
Route::get('/hekimler/silinenler','Back\PictureController@Silinenler')->name('picture.trashed');
Route::get('/hekimler/sil/{id}','Back\PictureController@Sil')->name('picture.delete');
Route::get('/hekimler/harddelete/{id}','Back\PictureController@HardDelete')->name('picture.harddelete');
Route::get('/hekimler/geriqaytar/{id}','Back\PictureController@Recover')->name('picture.recover');
Route::post('/hekimler/yenile{id}','Back\PictureController@RedakteEt')->name('picture.update');
Route::get('/hekimler/redaktegetir{id}','Back\PictureController@RedakteGetir')->name('picture.getData');
 

//News SubCategories Routes

Route::get('/xeberler/kateqoriyalar','Back\SSubCategoryController@Getir')->name('ssubcategories');
Route::post('/xeberler/kateqoriyalar','Back\SSubCategoryController@ElaveEt')->name('ssubcategories.create');
Route::get('/xeberler/kateqoriyalar/redaktegetir','Back\SSubCategoryController@RedakteGetir')->name('ssubcategories.getData');
Route::post('/xeberler/kateqoriyalar/yenile','Back\SSubCategoryController@RedakteEt')->name('ssubcategories.update');
Route::get('/xeberler/kateqoriyalar/status','Back\SSubCategoryController@Status')->name('ssubcategories.status');
Route::get('/xeberler/kateqoriyalar/silinenler','Back\SSubCategoryController@Silinenler')->name('ssubcategories.trashed');
Route::get('/xeberler/kateqoriyalar/sil/{id}','Back\SSubCategoryController@Sil')->name('ssubcategories.delete');
Route::get('/xeberler/kateqoriyalar/harddelete/{id}','Back\SSubCategoryController@HardDelete')->name('ssubcategories.harddelete');
Route::get('/xeberler/kateqoriyalar/geriqaytar/{id}','Back\SSubCategoryController@Recover')->name('ssubcategories.recover');


//News Content Routes

Route::get('/xeberler/mezmun','Back\ServiceContentController@Getir')->name('serviceContent');
Route::post('/xeberler/mezmun','Back\ServiceContentController@ElaveEt')->name('serviceContent.create');
Route::get('/xeberler/mezmun/status','Back\ServiceContentController@Status')->name('serviceContent.status');
Route::get('/xeberler/mezmun/silinenler','Back\ServiceContentController@Silinenler')->name('serviceContent.trashed');
Route::get('/xeberler/mezmun/redaktegetir/{id}','Back\ServiceContentController@RedakteGetir')->name('serviceContent.getUpdate');
Route::post('/xeberler/mezmun/yenile/{id}','Back\ServiceContentController@RedakteEt')->name('serviceContent.update');
Route::get('/xeberler/mezmun/sil/{id}','Back\ServiceContentController@Sil')->name('serviceContent.delete');
Route::get('/xeberler/mezmun/harddelete/{id}','Back\ServiceContentController@HardDelete')->name('serviceContent.harddelete');
Route::get('/xeberler/mezmun/geriqaytar/{id}','Back\ServiceContentController@Recover')->name('serviceContent.recover');

//Philosophy Content Routes

Route::get('/felsefe','Back\PhilosophyController@Getir')->name('philosophy');
Route::post('/felsefe/update','Back\PhilosophyController@RedakteEt')->name('philosophy.update');

//Messages Routes

//Nizam Routes                   
Route::get('/nizam/umumi','Back\NizamController@UmumiGetir')->name('nizam.umumi');
Route::get('/nizam/elaqe','Back\NizamController@ElaqeGetir')->name('nizam.elaqe');
Route::get('/nizam/sosial','Back\NizamController@SosialGetir')->name('nizam.sosial');
Route::post('/nizam/update','Back\NizamController@RedakteEt')->name('nizam.update');


//Sliders Categories Routes

Route::get('/slider','Back\SliderController@Getir')->name('slider');
Route::post('/slider','Back\SliderController@ElaveEt')->name('slider.create');
Route::get('/slider/status','Back\SliderController@Status')->name('slider.status');
Route::get('/slider/silinenler','Back\SliderController@Silinenler')->name('slider.trashed');
Route::get('/slider/redaktegetir/{id}','Back\SliderController@RedakteGetir')->name('slider.getUpdate');
Route::post('/slider/yenile/{id}','Back\SliderController@RedakteEt')->name('slider.update');
Route::get('/slider/sil/{id}','Back\SliderController@Sil')->name('slider.delete');
Route::get('/slider/harddelete/{id}','Back\SliderController@HardDelete')->name('slider.harddelete');
Route::get('/slider/geriqaytar/{id}','Back\SliderController@Recover')->name('slider.recover');



});
/*
|--------------------------------------------------------------------------
| Front Routes h
|--------------------------------------------------------------------------

*/
Route::get('locale/{locale}',function($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
}); 

 


    Route::get('/','Front\Homepage@index')->name('homepage');
    Route::get('/elaqe','Front\Homepage@Contact')->name('contact');
    Route::post('/elaqe','Front\Homepage@contactMessage')->name('contact.message');
    Route::get('/qeydiyyat','Front\Homepage@Qeydiyyat')->name('qeydiyyat');
    Route::post('/qeydiyyat','Front\Homepage@QeydiyyatPost')->name('qeydiyyat.post');
    Route::get('/haqqimizda','Front\Homepage@About')->name('about');
    Route::get('/hekimler','Front\Homepage@Doctors')->name('doctor');
    Route::get('/klinikalar','Front\Homepage@Clinics')->name('clinic');
    
    Route::get('/klinikalar-{slug}','Front\Homepage@ClinicSingle')->name('clinic.single');
    Route::get('/xeberler-{slug}','Front\Homepage@News')->name('news');
    Route::get('/departments-{slug}','Front\Homepage@Departments')->name('department');
    Route::get('/hekimler-{slug}','Front\Homepage@DoctorSingle')->name('doctor.single');
    
    Route::get('/{category}/{slug}','Front\Homepage@NewsSingle')->name('news.single');


    