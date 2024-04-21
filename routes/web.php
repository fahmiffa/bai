<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'sign'])->name('sign');
Route::get('/sign-up', [App\Http\Controllers\AuthController::class, 'signUp'])->name('signUp');
Route::post('/sign-up', [App\Http\Controllers\AuthController::class, 'reg'])->name('reg');
Route::get('/', [App\Http\Controllers\AuthController::class, 'login'])->name('home');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function() {    

    Route::group(['prefix'=>'home'],function() {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('user', App\Http\Controllers\UserController::class);
        Route::resource('agency', App\Http\Controllers\AgencyController::class);     
        
        Route::resource('independent', App\Http\Controllers\IndependentController::class);  
        Route::get('setting', [App\Http\Controllers\IndependentController::class, 'setting'])->name('peserta.setting');
        Route::get('peserta-job', [App\Http\Controllers\IndependentController::class, 'job'])->name('peserta.jobs');
        Route::get('pendaftaran', [App\Http\Controllers\IndependentController::class, 'reg'])->name('peserta.reg');
        Route::post('apply', [App\Http\Controllers\IndependentController::class, 'apply'])->name('peserta.apply');
        Route::get('peserta-job/{id}', [App\Http\Controllers\IndependentController::class, 'piles'])->name('peserta.job');     
    });

    Route::group(['prefix'=>'admin'],function() {
        Route::get('file-excel\{par}', [App\Http\Controllers\Admin::class, 'excel'])->name('admin.excel');
        Route::get('file-pdf\{par}', [App\Http\Controllers\Admin::class, 'pdf'])->name('admin.pdf');
        Route::get('agency', [App\Http\Controllers\Admin::class, 'agency'])->name('admin.agency');
        Route::get('mitra', [App\Http\Controllers\Admin::class, 'mitra'])->name('admin.mitra');
        Route::get('job', [App\Http\Controllers\Admin::class, 'job'])->name('admin.job');
        Route::get('setting', [App\Http\Controllers\Admin::class, 'setting'])->name('admin.setting');    
        Route::post('setting', [App\Http\Controllers\Admin::class, 'store'])->name('setting.store');          
        Route::get('siswa', [App\Http\Controllers\Admin::class, 'siswa'])->name('admin.siswa');       
        Route::get('siswa/detail/{id}', [App\Http\Controllers\Admin::class, 'detail'])->name('admin.siswa.detail');
        Route::resource('invoice', App\Http\Controllers\InvoiceController::class);   
        Route::post('invoice-bill/{id}', [App\Http\Controllers\InvoiceController::class, 'bill'])->name('admin.bill');    
        Route::get('step/{id}', [App\Http\Controllers\InvoiceController::class, 'step'])->name('admin.step');    
        Route::get('pdf-invoice/{id}', [App\Http\Controllers\InvoiceController::class, 'pile'])->name('invoice.pile');  
        Route::post('pdf-bill', [App\Http\Controllers\InvoiceController::class, 'billStore'])->name('bill.invoice');  
        Route::post('repay/{id}', [App\Http\Controllers\InvoiceController::class, 'repay'])->name('repay');  
        Route::resource('broadcast', App\Http\Controllers\BroadcastController::class);     
        Route::get('mou/{id}', [App\Http\Controllers\Admin::class, 'mou'])->name('admin.mou'); 
        Route::get('create-mou/{id}', [App\Http\Controllers\Admin::class, 'mouCreate'])->name('mou.create');    
        Route::get('edit-mou/{id}', [App\Http\Controllers\Admin::class, 'mouEdit'])->name('mou.edit');    
        Route::post('mou/{id}', [App\Http\Controllers\Admin::class, 'mouStore'])->name('mou.store');   
        Route::post('mou-update/{id}', [App\Http\Controllers\Admin::class, 'mouUpdate'])->name('mou.update');  
        Route::post('mou-destroy/{id}', [App\Http\Controllers\Admin::class, 'mouDestroy'])->name('mou.destroy');   
        Route::get('pdf-mou/{id}', [App\Http\Controllers\Admin::class, 'pile'])->name('mou.pile');  

        Route::post('padang/{user}', [App\Http\Controllers\Admin::class, 'padangStore'])->name('padang.store');  
        Route::get('padang', [App\Http\Controllers\Admin::class, 'padang'])->name('padang.index');   
        Route::get('padang-job/{id}', [App\Http\Controllers\Admin::class, 'piles'])->name('padang.job');       
        
        Route::get('padang-bill', [App\Http\Controllers\Admin::class, 'bill'])->name('padang.bill');   
        Route::post('bill-store', [App\Http\Controllers\Admin::class, 'billStore'])->name('padang.billStore');   
        Route::get('padang-job/{id}', [App\Http\Controllers\Admin::class, 'piles'])->name('padang.job');       
    });

    Route::group(['prefix'=>'mitra'],function() {
        Route::get('/', [App\Http\Controllers\Partner::class, 'index'])->name('mitra.index'); 
        Route::get('job', [App\Http\Controllers\Partner::class, 'job'])->name('mitra.job');   
        Route::get('document-job/{id}', [App\Http\Controllers\Partner::class, 'pile'])->name('document.job');          
        Route::resource('patrner', App\Http\Controllers\PatrnerController::class);    
        Route::resource('bill', App\Http\Controllers\BillController::class);           
        Route::get('invoice-bill/{id}', [App\Http\Controllers\BillController::class, 'bill'])->name('mitra.bill');   
        Route::group(['prefix'=>'pendaftaran-peserta'],function() {            
            Route::resource('document', App\Http\Controllers\DocumentController::class);   
            Route::resource('field', App\Http\Controllers\FieldController::class); 
            Route::get('Interview', [App\Http\Controllers\Interview::class, 'index'])->name('interview.index');  
            Route::get('Interview-create', [App\Http\Controllers\Interview::class, 'create'])->name('interview.create');
            Route::get('Interview-next/{id}', [App\Http\Controllers\Interview::class, 'next'])->name('interview.next'); 
            Route::get('Interview-edit/{id}', [App\Http\Controllers\Interview::class, 'edit'])->name('interview.edit');      
            Route::post('Interview-store/{id}', [App\Http\Controllers\Interview::class, 'store'])->name('interview.store');  
            Route::post('Interview-update/{id}', [App\Http\Controllers\Interview::class, 'update'])->name('interview.update');  
            Route::get('job', [App\Http\Controllers\Reg::class, 'index'])->name('reg.index');  
            Route::get('add-job', [App\Http\Controllers\Reg::class, 'reg'])->name('reg.job');  
            Route::post('job/{id}', [App\Http\Controllers\Reg::class, 'store'])->name('reg.store');  

        });
        Route::get('setting', [App\Http\Controllers\Partner::class, 'setting'])->name('mitra.setting');      
    });

    Route::group(['prefix'=>'agency'],function() {
        Route::get('/', [App\Http\Controllers\Agency::class, 'index'])->name('agen.index');  
        Route::resource('company', App\Http\Controllers\CompanyController::class);     
        Route::resource('job', App\Http\Controllers\JobController::class);     
        Route::resource('complaint', App\Http\Controllers\ComplaintController::class);   
        Route::resource('payment', App\Http\Controllers\PaymentController::class);     
        Route::post('pay/{id}', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');     
        Route::get('pdf-invoice/{id}', [App\Http\Controllers\PaymentController::class, 'pile'])->name('payment.pile');  
        Route::get('setting', [App\Http\Controllers\Agency::class, 'setting'])->name('agen.setting');             
    });
});