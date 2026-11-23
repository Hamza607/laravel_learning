<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\productController;
use App\Http\Controllers\StudentController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;

Route::get("/products", [productController::class, "index"]);
// Route::get("/products/{id}", [productController::class, "show"]);
Route::get("/products/create", [productController::class, "create"]);
// Route::post("/products", [productController::class, "store"]);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get("/students", [StudentController::class, "index"]);


Route::get("/test-relationship", function () {
    $category = Category::first();

    $product = $category->products()->create([
        'name' => 'Laptop',
        'price' => 80000,
        'description' => 'Dell Laptop'
    ]);

    return $product;
});

Route::get('/category-products', function () {

    $category = Category::with('products')->first();

    return $category;
});

Route::get('/product-category', function () {

    $product = Product::with('category')->first();

    return $product;
});

Route::get('/add-products', function () {

    $category = Category::firstOrCreate([
        'name' => 'Electronics'
    ]);

    $category->products()->createMany([
        [
            'name' => 'Dell Laptop',
            'price' => 80000,
            'description' => 'Dell Core i5 Laptop'
        ],
        [
            'name' => 'Samsung Mobile',
            'price' => 50000,
            'description' => 'Samsung Android Mobile'
        ]
    ]);

    return response()->json([
        'message' => 'Two products added successfully!',
        'category' => $category->load('products')
    ]);
});


Route::get("/test-many-to-many", function () {

    $product = Product::first();

    $electronics = Tag::firstorCreate(['name' => 'Electronics']);

    $popular = Tag::firstorCreate(['name' => 'Popular']);

    $product->tags()->sync([$electronics->id, $popular->id]);

    return $product->load('tags');
});



Route::view('/about', 'about');

Route::get("/", [UserController::class, "index"]);
Route::get("/user", [UserController::class, "index"]);
Route::get("/adduser", [UserController::class, "AddUser"]);
Route::get("/userdetails/{name}", [UserController::class, "UserDetails"]);
Route::get("/userview", [UserController::class, "showData"]);
Route::get("/usercomponent", [UserController::class, "showUserComponent"]);

Route::get('/hello', function () {
    return 'Hello Laravel Developer!';
});



Route::get('/user/{name}', function ($name) {
    return 'Welcome ' . $name;
});

Route::get("/login", [AuthController::class, "login"]);



// Route::get("/login/{type}" , function($type) {
//     return view("login", ["type" => $type]);
// } );
