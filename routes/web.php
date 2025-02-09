<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConnexionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

////////////////////////////////////////////////////////////home
Route::get('/home', function () {
    return view('home'); // Ensure you have a "home.blade.php" file in "resources/views/"
})->name('home');

Route::get('/', [CategoryController::class, 'index']);
//////////////////////////////////////////////////////////connexion 
Route::get('/connexion', function(){
    return view('connexion');
})->name('connexion');
Route::post('/connexion',[ConnexionController::class, 'login']);

/////////////////////////////////////////////////////////signup
Route::get('/signup', function(){
    return view('signup');
});
Route::post('/signup',[ConnexionController::class, 'signup']);


/////////////////////////////////////////////////////////categories
Route::get('/hijabs', function () {
    $hijabs = Product::where('category_id', 1)->get(); // Get products with category_id 1 (hijab)
    return view('hijabs', compact('hijabs'));
});
Route::get('/abayas', function(){
    $abayas = Product::where('category_id', 2)->get(); 
    return view('abayas', compact('abayas'));
});
Route::get('/skirts', function(){
    $skirts = Product::where('category_id', 3)->get(); 
    return view('skirts', compact('skirts'));
});


// Route to add a product to the cart
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');

// Route to view the cart
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.index');

// Route to update the quantity of a product in the cart
Route::post('/cart/update/{productId}', [CartController::class, 'updateQuantity'])->name('cart.update');

// Route to proceed to checkout
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');


