<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceAreaController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/manage-reviews', [AdminController::class, 'manage_reviews'])->name('manage-reviews');

    Route::post('approve-review', [AdminController::class, 'approve_review']);
    Route::post('delete-review', [AdminController::class, 'delete_review']);
});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/facebook_feed', [FacebookController::class, 'displayFacebookPosts']);

Route::get('/local-plumbers-water-heater-repairs-and-installations', [ServicesController::class, 'water_heaters'])->name('water-heaters');
Route::get('/local-plumbers-drain-and-mainline-rodding', [ServicesController::class, 'drain_services'])->name('drain-services');
Route::get('/local-plumbers-toilet-sink-faucet-installations-and-repairs', [ServicesController::class, 'sinks_toilets'])->name('sinks-toilets');
Route::get('/local-plumbers-sump-pump-and-battery-backup-systems', [ServicesController::class, 'sump_pumps'])->name('sump-pumps');
Route::get('/local-plumbers-garbage-disposal-installations', [ServicesController::class, 'garbage_disposals'])->name('garbage-disposals');
Route::get('/local-plumbers-rpz-backflow-testing', [ServicesController::class, 'rpz_backflow'])->name('rpz-backflow');
Route::get('/local-plumbers-our-plumbing-services', [ServicesController::class, 'all_services'])->name('all-services');

Route::get('/service-area/local-plumbers-arlington-heights-il', [ServiceAreaController::class, 'arlington_heights'])->name('arlington-heights');
Route::get('/service-area/local-plumbers-barrington-il', [ServiceAreaController::class, 'barrington'])->name('barrington');
Route::get('/service-area/local-plumbers-buffalo-grove-il', [ServiceAreaController::class, 'buffalo_grove'])->name('buffalo-grove');
Route::get('/service-area/local-plumbers-vernon-hills-il', [ServiceAreaController::class, 'vernon_hills'])->name('vernon-hills');

Route::get('/local-plumbers-lake-zurich-il-reviews', [ReviewController::class, 'testimonials'])->name('testimonials');
Route::get('/leave-review', [ReviewController::class, 'index'])->name('leave-review');
Route::get('/preview', [ReviewController::class, 'preview']);

Route::post('feedback-preview', [ReviewController::class, 'submitPreview'])->middleware('honeypot', 'time_bot');
Route::post('feedback-submission', [ReviewController::class, 'submitFeedback']);

Route::get('contact-local-plumbers-lake-zurich-il', [ContactController::class, 'index'])->name('contact');
Route::get('thank-you', [ContactController::class, 'requestSubmitted'])->name('thank-you');

Route::post('request-submitted', [ContactController::class, 'submitForm'])->middleware('honeypot', 'time_bot');
