<?php



use App\Http\Controllers\GenelAyar\SmtpAyarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayilerController;
use App\Http\Controllers\BelgelerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Diller\DilEkleController;
use App\Http\Controllers\Diller\TurkceController;
use App\Http\Controllers\Diller\EnglishController;
use App\Http\Controllers\EkatalogController;
use App\Http\Controllers\FotogalerController;
use App\Http\Controllers\FotoSliderController;
use App\Http\Controllers\GelenMesaj\GelenMesajlarController;
use App\Http\Controllers\GenelAyar\SiteAyarController;
use App\Http\Controllers\GenelAyar\SiteBilgiController;
use App\Http\Controllers\HaberVeDuyuruController;
use App\Http\Controllers\HizmetlerController;
use App\Http\Controllers\MenuAyarController;
use App\Http\Controllers\ReferanslarController;
use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\SubelerController;
use App\Http\Controllers\UrunlerController;
use App\Http\Controllers\VideoGalerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/gelen-mesaj', [GelenMesajlarController::class, 'mesageShow'])->name('mesageShow');
    Route::get('/haber-duyuru', [HaberVeDuyuruController::class, 'hbrDuyuruShow'])->name('hbrDuyuruShow');
    Route::get('/blog-show', [BlogController::class, 'blogShow'])->name('blogShow');
    Route::get('/sayfalar', [SayfalarController::class, 'sayfalarShow'])->name('sayfalarShow');
    Route::get('/urunler', [UrunlerController::class, 'urunlerShow'])->name('urunlerShow');
    Route::get('/hizmetler', [HizmetlerController::class, 'hizmetShow'])->name('hizmetShow');
    Route::get('/fotoSlider-show', [FotoSliderController::class, 'fotoSliderShow'])->name('fotoSliderShow');
    Route::get('/fotoGaleri-show', [FotogalerController::class, 'fotoGaleriShow'])->name('fotoGaleriShow');
    Route::get('/video-galeri', [VideoGalerController::class, 'videoGaleriShow'])->name('videoGaleriShow');
    Route::get('/referans', [ReferanslarController::class, 'referanShow'])->name('referanShow');
    Route::get('/subeler', [SubelerController::class, 'subelerShow'])->name('subelerShow');
    Route::get('/bayiler-show', [BayilerController::class, 'bayilerShow'])->name('bayilerShow');
    Route::get('/belgeler-show', [BelgelerController::class, 'belgelerShow'])->name('belgelerShow');
    Route::get('/ekatalog-show', [EkatalogController::class, 'eKatalogShow'])->name('eKatalogShow');
    Route::get('/menu-ayar', [MenuAyarController::class, 'menuAyarShow'])->name('menuAyarShow');
    Route::get('/diller-show', [DilEkleController::class, 'dillerShow'])->name('dillerShow');
    Route::get('/diller-showTr',[TurkceController::class, 'dillerShowTr'])->name('dillerShowTr');
    Route::get('/diller-showEng',[EnglishController::class, 'dillerShowEng'])->name('dillerShowEng');

    Route::delete("/msg-delete/{id}",[GelenMesajlarController::class, 'mesageDelete'])->name("mesageDelete");

    Route::get('/genel-ayar', [SiteAyarController::class, 'optionShow'])->name('optionShow');
    Route::post('/genelayar-update', [SiteAyarController::class, 'optionUpdate'])->name('optionUpdate');
    Route::post('/genelayarinfo-update', [SiteBilgiController::class, 'optInfoUpdate'])->name('optInfoUpdate');
    Route::post('/genelayarSmpt-update', [SmtpAyarController::class, 'optSmptUpdate'])->name('optSmptUpdate');


    Route::get('/blog-strShow', [BlogController::class, 'blogStoreShow'])->name('blogStoreShow');
    Route::post('/blog-store', [BlogController::class, 'blogStore'])->name('blogStore');
    Route::get('/blog-edit/{id}', [BlogController::class, 'blogEditShow'])->name('blogEditShow');
    Route::post('/blog-update/{id}', [BlogController::class, 'blogUpdate'])->name('blogUpdate');
    Route::delete("/blog-delete/{id}",[BlogController::class, 'blogDelete'])->name("blogDelete");
    Route::delete("/blog-deleteAll",[BlogController::class, 'blogDeleteAll'])->name("blogDeleteAll");

    Route::get('/news-edit/{id}', [HaberVeDuyuruController::class, 'haberEditShow'])->name('haberEditShow');
    Route::post('/news-update/{id}', [HaberVeDuyuruController::class, 'haberUpdate'])->name('haberUpdate');
    Route::delete("/news-delete/{id}",[HaberVeDuyuruController::class, 'haberDelete'])->name("haberDelete");
    Route::get('/news-strShow', [HaberVeDuyuruController::class, 'haberStoreShow'])->name('haberStoreShow');
    Route::post('/news-store', [HaberVeDuyuruController::class, 'haberStore'])->name('haberStore');
});
