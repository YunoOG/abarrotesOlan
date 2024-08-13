<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\Checkout\DiscountCheckoutController;
use App\Http\Controllers\Checkout\PaymentCheckoutController;
use App\Http\Controllers\Dashboard\DashboardProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Profile\ProfileOrderController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Livewire\Attribute\ListAttribute;
use App\Http\Livewire\Banner\ListBanner;
use App\Http\Livewire\Blog\CreatePost;
use App\Http\Livewire\Blog\ListAuthor;
use App\Http\Livewire\Blog\ListPost;
use App\Http\Livewire\Brand\ListBrand;
use App\Http\Livewire\Category\ListCategory;
use App\Http\Livewire\Dashboard\DashboardPage;
use App\Http\Livewire\DiscountCode\ListDiscountCode;
use App\Http\Livewire\Image\ListImage;
use App\Http\Livewire\Order\ListOrder;
use App\Http\Livewire\Order\ShowOrder;
use App\Http\Livewire\Page\CreatePage;
use App\Http\Livewire\Page\ListPage;
use App\Http\Livewire\Product\CreateProduct;
use App\Http\Livewire\Product\ListProduct;
use App\Http\Livewire\Settings\EditSettings;
use App\Http\Livewire\Specification\ListSpecification;
use App\Http\Livewire\User\ListUser;
use App\Http\Middleware\ProductInSession;
use Illuminate\Support\Facades\Redirect;

use Illuminate\resources\views\principal\welcome;






Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/products', function () {
    return view('products');
});

/*Route::get('/accesos', function () {
    return view('accesos');
});*/

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/ventas', function () {
    return view('ventas');
});

Route::get('/accesos', function () {
    return view('accesos');
})->name('accesos');


Route::get('/productos1', function () {
    return view('productos1');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
