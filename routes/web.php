<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RouteController;
use App\Http\Middleware\LanguageManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SiteMapController;

Route::get('/{route?}', [RouteController::class, 'index'])
->where('route', '.*')
->name('route');

Route::get('/404', [RouteController::class, 'show404'])->name('pages.404');

Route::get('set-language/{lang}', function (Request $request, $lang) {
    $request->session()->put('locale', $lang);
    return redirect()->back();
})
->middleware(LanguageManager::class)
->name('set.language');

//E-MAil
Route::post('contacta', [ContactUsController::class, 'store'])->name('contact-us.store');

// Dil değiştirme rotası
Route::get('set-language/{lang}', [LangController::class, 'setLanguage'])->name('set.language');

Route::get('lang/home', [LangController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about'])->name('pages.about');
Route::get('/services', [PageController::class, 'services'])->name('pages.services');
Route::get('/contact-us', [PageController::class, 'contact'])->name('pages.contact');
Route::get('/galery', [PageController::class, 'galery'])->name('pages.galery');
Route::get('/ise-laser', [PageController::class, 'iceLaser'])->name('pages.iselaser');
Route::get('/manicure-pedicure', [PageController::class, 'manicurePedicure'])->name('pages.manicurepedicure');
Route::get('/gel-polish', [PageController::class, 'gelPolish'])->name('pages.gelpolish');
Route::get('/prosthetic-nails', [PageController::class, 'prostheticNails'])->name('pages.prostheticnails');
Route::get('/nail-art', [PageController::class, 'nailArt'])->name('pages.nailart');
Route::get('/eyelash-extensions', [PageController::class, 'eyelashExtensions'])->name('pages.eyelashextensions');
Route::get('/eyelash-lifting', [PageController::class, 'eyelashLifting'])->name('pages.eyelashlifting');
Route::get('/deepliner', [PageController::class, 'deepliner'])->name('pages.deepliner');
Route::get('/eyebrowlamination', [PageController::class, 'eyebrowLamination'])->name('pages.eyebrowlamination');
Route::get('/microblading', [PageController::class, 'microblading'])->name('pages.microblading');
Route::get('/shugaring', [PageController::class, 'shugaring'])->name('pages.shugaring');
Route::get('/skin-care', [PageController::class, 'skinCare'])->name('pages.skincare');
Route::get('/cellulite-massage', [PageController::class, 'celluliteMassage'])->name('pages.cellulitemassage');
Route::get('/rollshape', [PageController::class, 'rollShape'])->name('pages.rollshape');
Route::get('/lipcoloring', [PageController::class, 'lipColoring'])->name('pages.lipcoloring');
Route::get('/keratin-care', [PageController::class, 'keratinCare'])->name('pages.keratincare');
Route::get('/perma', [PageController::class, 'perma'])->name('pages.perma');
Route::get('/brazilianblowdry', [PageController::class, 'brazilianBlowDry'])->name('pages.brazilianblowdry');
Route::get('/highlight', [PageController::class, 'highlight'])->name('pages.highlight');
Route::get('/hair-dye', [PageController::class, 'hairDye'])->name('pages.hairdye');
Route::get('/hair-dip-dye', [PageController::class, 'hairDipDye'])->name('pages.hairdipdye');
Route::get('/hair-cut', [PageController::class, 'hairCut'])->name('pages.haircut');
Route::get('/hair-extension', [PageController::class, 'hairExtension'])->name('pages.hairextension');
Route::get('/bridal-hair', [PageController::class, 'bridalHair'])->name('pages.bridalhair');
Route::get('/policies', [PageController::class, 'policies'])->name('pages.policies');
