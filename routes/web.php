<?php

use Illuminate\Support\Facades\Route;

/*We need to import all Controllers*/
use App\Http\Controllers\LoginController;       #Ready
use App\Http\Controllers\AdminController;       #Ready
use App\Http\Controllers\CashierController;     #Ready
use App\Http\Controllers\ConsumerController;    #Ready
use App\Http\Controllers\DollarController;      #Ready
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;     #Ready
use App\Http\Controllers\ProductController;     #Ready
use App\Http\Controllers\ReportController;


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

Route::get('/', function () {
    return view('welcome');
});

/** LOGIN
 * HTTP     URI          Method     Reponse    Description
 * -----------------------------------------------------------------------
 * get      '/login'     index      View       Form to login
 * post     '/login'     auth       Action     Check the credentials put by user
 * get      '/logout'    logout     Action     Close the session
*/
Route::controller(LoginController::class)->group(function () {
    Route::get('/login',  'index')->name('login.index');
    Route::post('/login', 'auth')->name('login.auth');
    Route::get('/logout', 'logout')->name('login.logout');
});


/** Dollar
 * HTTP     URI                    Method     Reponse   Description
 * -----------------------------------------------------------------------
 * get      /dollar                index      View      Return all the elements. 
 * get      /dollar/create         create     View      Form to create a new element. 
 * post     /dollar                store      Action    Create a new element. 
 * get      /dollar/{item}/edit    edit       View      Form to update a element. 
 * put      /dollar/{item}         update     Action    Update a element. 
 * get      /dollar/check          check      Action    Check if dollar price has already been entered.
*/
Route::controller(DollarController::class)->group(function () {
    Route::get( '/dollar',        'index')->name('dollar.index');
    Route::get( '/dollar/create', 'create')->name('dollar.create');
    Route::post('/dollar',        'store')->name('dollar.store');
    Route::get( '/dollar/{item}/edit', 'edit')->name('dollar.edit');
    Route::put( '/dollar/{item}', 'update')->name('dollar.update');
    Route::delete('/dollar/check', 'check')->name('dollar.check');
});


/** Admin
 * HTTP     URI             Method    Reponse   Description
 * -----------------------------------------------------------------------
 * get      /admin          index     View      Return a main page. 
 * get      /admin/show     show      View      It shows a element. 
 * get      /admin/edit     edit      View      Form to update a element. 
 * put      /admin/{item}   update    Action    Update a element. 
 */
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin',      'index')->name('admin.index');
    Route::get('/admin/show', 'show')->name('admin.show');
    Route::get('/admin/edit', 'edit')->name('admin.edit');
    Route::put('/admin/{item}', 'update')->name('admin.update');
});


/** Product
 * HTTP     URI                     Method      Reponse   Description
 * -----------------------------------------------------------------------
 * get      /product                index       View      Return all the elements. 
 * get      /product/create         create      View      Form to create a new element. 
 * post     /product                store       Action    Create a new element. 
 * get      /product/{item}/edit    edit        View      Form to update a element. 
 * get      /product/{item}         show        View      It shows a element.
 * put      /product/{item}         update      Action    Update a element. 
 * delete   /product/{item}         delete      Action    Delete a element. 
 * patch    /product/{item}         disabled    Action    Disable a element.  
 */
Route::controller(ProductController::class)->group(function () {
    Route::get( '/product', 'index')->name('product.index');
    Route::get( '/product/create', 'create')->name('product.create');
    Route::post('/product', 'store')->name('product.store');
    Route::get( '/product/{item}/edit', 'edit')->name('product.edit');
    Route::get( '/product/{item}', 'show')->name('product.show');
    Route::put( '/product/{item}', 'update')->name('product.update');
    Route::delete('/product/{item}', 'destroy')->name('product.destroy');
    Route::patch( '/product/{item}', 'disabled')->name('product.disabled');
});


/** Cashier
 * HTTP     URI                     Method      Reponse   Description
 * -----------------------------------------------------------------------
 * get      /cashier                index       View      Return all the elements. 
 * get      /cashier/create         create      View      Form to create a new element. 
 * post     /cashier                store       Action    Create a new element. 
 * get      /cashier/{item}/edit    edit        View      Form to update a element. 
 * get      /cashier/{item}         show        View      It shows a element.
 * put      /cashier/{item}         update      Action    Update a element. 
 * delete   /cashier/{item}         delete      Action    Delete a element. 
 * patch    /cashier/{item}         disabled    Action    Disable a element.   
 */
Route::controller(CashierController::class)->group(function () {
    Route::get( '/cashier', 'index')->name('cashier.index');
    Route::get( '/cashier/create', 'create')->name('cashier.create');
    Route::post('/cashier', 'store')->name('cashier.store');
    Route::get( '/cashier/{item}/edit', 'edit')->name('cashier.edit');
    Route::get( '/cashier/{item}', 'show')->name('cashier.show');
    Route::put( '/cashier/{item}', 'update')->name('cashier.update');
    Route::delete('/cashier/{item}', 'destroy')->name('cashier.destroy');
    Route::patch('/cashier/{item}', 'disabled')->name('cashier.disabled');
});


/** Payment
 * HTTP     URI                     Method      Reponse   Description
 * -----------------------------------------------------------------------
 * get      /payment                index       View      Return all the elements. 
 * get      /payment/create         create      View      Form to create a new element. 
 * post     /payment                store       Action    Create a new element. 
 * get      /payment/{item}/edit    edit        View      Form to update a element. 
 * get      /payment/{item}         show        View      It shows a element.
 * put      /payment/{item}         update      Action    Update a element. 
 * delete   /payment/{item}         delete      Action    Delete a element. 
 * patch    /payment/{item}         disabled    Action    Disable a element.  
 */
Route::controller(PaymentController::class)->group(function () {
    Route::get( '/payment', 'index')->name('payment.index');
    Route::get( '/payment/create', 'create')->name('payment.create');
    Route::post('/payment', 'store')->name('payment.store');
    Route::get( '/payment/{item}/edit', 'edit')->name('payment.edit');
    Route::get( '/payment/{item}', 'show')->name('payment.show');
    Route::put( '/payment/{item}', 'update')->name('payment.update');
    Route::delete('/payment/{item}', 'destroy')->name('payment.destroy');
    Route::patch('/payment/{item}', 'disabled')->name('payment.disabled');
});


/** Reports - AdminController
 * HTTP       URI                   Method      Description
 * -----------------------------------------------------------------------
 * get      /report                index       Retornamos la vista principal. 
 * get      /report/daily          index       Retornamos un reporte diario. 
 * get      /report/weekly         index       Retornamos un reporte semanal. 
 * get      /report/montly         index       Retornamos un reporte mensual. 
 */
Route::controller(ReportController::class)->group(function () {
    Route::get('/report', 'index')->name('index.report');
    Route::get('/report/daily', 'daily')->name('daily.report');
    Route::get('/report/weekly', 'weekly')->name('weekly.report');
    Route::get('/report/montly', 'montly')->name('montly.report');
});


/** Invoice
 * HTTP     URI                     Method      Reponse   Description
 * -----------------------------------------------------------------------
 * get      /invoice                index       View      Return all the elements. 
 * get      /invoice/create         create      View      Form to create a new element. 
 * post     /invoice                store       Action    Create a new element. 
 * get      /invoice/{item}         show        View      It shows a element.
 */
Route::controller(InvoiceController::class)->group(function () {
    Route::get( '/invoice', 'index')->name('invoice.index');
    Route::get( '/invoice/create', 'create')->name('invoice.create');
    Route::post('/invoice', 'store')->name('invoice.store');
    Route::get( '/invoice/{id_invoice}', 'show')->name('invoice.show');
});


/** Consumer
 * HTTP     URI                     Method      Reponse   Description
 * -----------------------------------------------------------------------
 * get      /consumer/create         create      View      Form to create a new element. 
 * post     /consumer                store       Action    Create a new element. 
 * get      /consumer/{item}/edit    edit        View      Form to update a element. 
 * get      /consumer/{item}         show        View      It shows a element.
 * put      /consumer/{item}         update      Action    Update a element. 
 */
Route::controller(ConsumerController::class)->group(function () {
    Route::get( '/consumer/create', 'create')->name('consumer.create');
    Route::post('/consumer', 'store')->name('consumer.store');
    Route::get( '/consumer/{item}/edit', 'edit')->name('consumer.edit');
    Route::get( '/consumer/{item}', 'show')->name('consumer.show');
    Route::put( '/consumer/{item}', 'update')->name('consumer.update');
});