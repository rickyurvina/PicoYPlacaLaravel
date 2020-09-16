<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestrictionController;

route::redirect('/','/restriction');
route::get('/restriction',[RestrictionController::class,'index']);
route::post('/restriction',[RestrictionController::class,'restrictions'])->name('contacto');
