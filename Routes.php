-------------------------ROUTE--------------------------
<?PHP 
Route::get('/', function () {
    return view('face.home');
});
Route::get('/', [CrudController::class, 'show'])->name('home');
Route::get('/delete/{id}', [CrudController::class, 'delete']);
Route::get('/edit', [CrudController::class, 'edit']);

Route::post('/update', [CrudController::class, 'update']);

Route::post('/addNew', [CrudController::class, 'addNew']);
Route::get('/addNewForm' , function(){
    return view('face.addnewform');
});
?>

 
 
