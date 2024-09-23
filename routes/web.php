<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Example;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\Auth\LoginController;
use App\Models\Topic;

Route::get('/', function () {
    return view('welcome');
}
);


Auth::routes(['verify'=>true]);

Route::prefix('public')->group(function () {
    // Topic details page
    Route::get('topics/{id}/detail', [PublicController::class, 'topicsDetails'])->name('topicsDetails'); 
    // Index page
    Route::get('index', [PublicController::class, 'index'])->name('index');
    // Custom route to show the list of topics
    Route::get('topiclist', [TopicController::class, 'toplist'])->name('topics_list');
    // Show testimonials page (if this is a different view)
    Route::get('testimonialsp', [TestimonialController::class, 'show'])->name('testimonials.show');
     // Display create message form
     Route::get('contact', [MessageController::class, 'create'])->name('email_create');
     // Send the email
    Route::post('contact', [MessageController::class, 'sendEmail'])->name('send_email');
});


// Group topic-related routes under a prefix and middleware
Route::middleware(['auth', 'verified'])->prefix('topics')->group(function () {
    // Display create topic form
    Route::get('create', [TopicController::class, 'create'])->name('topics.create');
    
    // Store a newly created topic
    Route::post('/', [TopicController::class, 'store'])->name('topics.store');
    
    // Show a specific topic
    Route::get('{id}/show', [TopicController::class, 'show'])->name('topics.show');
    
    // List all topics
    Route::get('/', [TopicController::class, 'index'])->name('topics.index');
    
    // Show the edit form for a specific topic
    Route::get('{id}/edit', [TopicController::class, 'edit'])->name('topics.edit');
    
    // Update a specific topic
    Route::put('{id}/update', [TopicController::class, 'update'])->name('topics.update');
    
    // Delete a specific topic
    Route::delete('{id}', [TopicController::class, 'forceDelete'])->name('topics.forceDelete');
    
    
});

Route::middleware(['auth', 'verified'])->prefix('categories')->group(function () {
    // Display create category form
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    
    // Store a newly created category
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    
    // List all categories
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    
    // Show the edit form for a specific category
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    
    // Update a specific category
    Route::put('{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    
    // Delete a specific category
    Route::delete('{id}', [CategoryController::class, 'destroy'])->name('categories.forceDelete');
});

Route::middleware(['auth', 'verified'])->prefix('testimonials')->group(function () {
    // Display create testimonial form
    Route::get('create', [TestimonialController::class, 'create'])->name('testimonials.create');
    
    // Store a newly created testimonial
    Route::post('/', [TestimonialController::class, 'store'])->name('testimonials.store');
    
    // List all testimonials
    Route::get('/', [TestimonialController::class, 'index'])->name('testimonials.index');
    
    // Show the edit form for a specific testimonial
    Route::get('{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    
    // Update a specific testimonial
    Route::put('{id}/update', [TestimonialController::class, 'update'])->name('testimonials.update');
    
    // Delete a specific testimonial
    Route::delete('{id}', [TestimonialController::class, 'destroy'])->name('testimonials.forceDelete');
    
    
});


Route::middleware(['auth', 'verified'])->prefix('users')->group(function () {
    // Display create user form
    Route::get('create', [UserController::class, 'create'])->name('users.create');
    
    // Store a newly created user
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    
    // List all users (only for verified users)
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    
    // Show the edit form for a specific user
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    
    // Update a specific user
    Route::put('{id}/update', [UserController::class, 'update'])->name('users.update');
    
    // Delete a specific user
    Route::delete('{id}', [UserController::class, 'destroy'])->name('users.forceDelete');
});

Route::middleware(['auth', 'verified'])->prefix('contact')->group(function () {
    
    
    // List all messages
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    
    // Delete a specific message
    Route::delete('messages/{id}', [MessageController::class, 'forceDelete'])->name('messages.forceDelete');
    
    // Show details of a specific message
    Route::get('messagesdetail/{id}', [MessageController::class, 'show'])->name('messages.show');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
