
<?php
//  use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
// use Illuminate\Support\Facades\DB;
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/books/create', function () {
    return view('create_book'); 

});
Route::post('/books', function (Request $request) {
    return response()->json([
        'message' => 'Form submitted successfully!',
        'data' => $request->all() // Yehha $request (dollar sign ke sath) hona chahiye
    ]);
});