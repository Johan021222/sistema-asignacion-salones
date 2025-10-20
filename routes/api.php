use App\Http\Controllers\GroupController;

Route::post('/grupos', [GroupController::class, 'store']);
