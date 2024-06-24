<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IDcardController;
use App\Http\Controllers\GatepassController;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\EmployeeInfoController;

// home
Route::get('/', [UserController::class, 'index'])->name('user#home');

// contact
Route::get('contact', [UserController::class, 'contactPage'])->name('user#contactPage');

// Joining form
Route::get('joining', [UserController::class, 'joiningPage'])->name('user#joiningPage');
// login register routes
Route::middleware(['guest'])->group(function() {
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'adminDashboard'])->name('admin#dashboard');

    // Admin routes (only IT role can access)
    Route::prefix('admin')->group(function () {
        // User routes
        Route::prefix('user')->middleware(['role:it'])->group(function () {
            Route::get('list', [AdminUserController::class, 'userListPage'])->name('admin#userListPage');
            Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
        });

        // Applyer routes (HR, TL, and IT roles can access)
        Route::prefix('applyer')->middleware(['role:hr,tl,it'])->group(function () {
            Route::get('jobseeker/list', [JobApplyController::class, 'jobSeekerListPage'])->name('admin#jobSeekerListPage');
            Route::get('interview/appoint', [InterviewController::class, 'interviewAppointListPage'])->name('admin#interviewAppointListPage');
            Route::get('applicants/selected', [InterviewController::class, 'selectedApplicantListPage'])->name('admin#selectedApplicantListPage');
            Route::get('joining', [EmployeeInfoController::class, 'joiningFormListPage'])->name('admin#joiningFormListPage');
        });

        // ID card routes (HR and IT roles can access)
        Route::prefix('idcard')->middleware(['role:hr,it'])->group(function () {
            Route::get('list', [IDcardController::class, 'idCardListPage'])->name('admin#idCardListPage');
            Route::get('add', [IDcardController::class, 'idCardCreatePage'])->name("admin#idCardCreatePage");
        });

        // Gate pass card routes (Admin and IT roles can access)
        Route::prefix('gatepass')->middleware(['role:admin,it'])->group(function () {
            Route::get('list', [GatepassController::class, 'gatePassListPage'])->name('admin#gatePassListPage');
            Route::get('add', [GatepassController::class, 'gatePassCreatePage'])->name('admin#gatePassCreatePage');
        });

        // Training card routes (HR, Admin, and IT roles can access)
        Route::prefix('training')->middleware(['role:hr,admin,it'])->group(function () {
            Route::get('list', [TrainingController::class, 'trainingCardListPage'])->name('admin#trainingCardListPage');
        });

        Route::get('profile', [AdminUserController::class, 'userProfilePage'])->name('admin#userProfilePage');
    });
});
