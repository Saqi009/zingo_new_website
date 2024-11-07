<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\EmailController;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/service', 'service')->name('service');
    Route::get('/faq', 'faq')->name('faq');

    Route::get('/digital_marketing', 'digital_marketing')->name('service.digital_marketing');
    Route::get('/service/search_seo', 'search_seo')->name('service.search_seo');
    Route::get('/service/web_development', 'web_development')->name('service.web_development');
    Route::get('/service/graphic_design', 'graphic_design')->name('service.graphic_design');
    Route::get('/service/testimonials', 'testimonials')->name('service.testimonials');
    Route::get('/service/app_development', 'app_development')->name('service.app_development');
    Route::get('/service/crm_management', 'crm_management')->name('service.crm_management');
    Route::get('/service/it_support', 'it_support')->name('service.it_support');
    Route::get('/service/video_editing', 'video_editing')->name('service.video_editing');
    Route::get('/service/personal_assistance', 'personal_assistance')->name('service.personal_assistance');
    Route::get('/service/lead_generation', 'lead_generation')->name('service.lead_generation');
    Route::get('/service/cold_calling', 'cold_calling')->name('service.cold_calling');
});

Route::controller(EmailController::class)->group(function () {
    Route::post('/send_mail', 'send_mail')->name('send_mail');
});
