<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rapports\RapportController;
use App\Http\Controllers\rapports\SalesOrderController;

Route::get('/intelligence',[RapportController::class,'rapports'])->name('rapports');
Route::get('/intelligence/sales-orders/reserved-products',[SalesOrderController::class,'listReservedProducts'])->name('intelligence.sales-orders.reserved-products');
Route::get('/intelligence/sales-orders/uninvoiced-products',[SalesOrderController::class,'listUninvoicedproducts'])->name('intelligence.sales-orders.uninvoiced-products');


?>