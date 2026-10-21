
<?php
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

//  use App\Http\Controllers\UserController;

// Route::get('/users', [UserController::class, 'index']);
// use App\Http\Controllers\ProductController;
// use Illuminate\Support\Facades\DB;
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

// Route::get('/books/create', function () {
//     return view('create_book'); 

// });
// Route::post('/books', function (Request $request) {
//     return response()->json([
//         'message' => 'Form submitted successfully!',
//         'data' => $request->all() // Yehha $request (dollar sign ke sath) hona chahiye
//     ]);
// });
// use App\Http\Controllers\PostController;


// Route::resource('posts', PostController::class);


// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');