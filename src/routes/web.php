<?php

use Illuminate\Support\Facades\Route;

use splittlogic\pv\Http\Controllers\bs5extrasController;

Route::get(
  'splittlogic/bs5extras',
  [bs5extrasController::class, 'index']
)->name('splittlogic.bs5extras');
