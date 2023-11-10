<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect("login");
});

Route::get('/dashboard', function () {
    return redirect()->route("product.index");
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    # Product
    Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function () {
        Route::get("/","index")->name("index");
        Route::get("/create", "create")->name("create");
        Route::post("/store", "store")->name("store");
        Route::get("/show/{product}","show")->name("show");
        Route::get("/edit/{product}", "edit")->name("edit");
        Route::put("/update/{product}", "update")->name("update");
        Route::delete("/destroy/{product}", "destroy")->name("destroy");
    });


});

require __DIR__.'/auth.php';