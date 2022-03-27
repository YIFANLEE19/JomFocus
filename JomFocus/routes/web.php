<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jom-focus/about-us', function () {
    return view('about');
});
Route::get('/jom-block', function () {
    return view('jomBlock.jomBlock');
});
Route::get('/faqs-page', function () {
    return view('faqs');
});
Route::get('/contact-us', function () {
    return view('contactUs');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/user-privacy', function () {
    return view('userPrivacy');
});

Route::get('/pomodoro-timer',[App\Http\Controllers\TimerController::class,'viewPomodoroTimer'])->name('viewPomodoroTimer');
Route::get('/countdown-timer',[App\Http\Controllers\TimerController::class,'viewCountdownTimer'])->name('viewCountdownTimer');
Route::post('/pomodoro-timer',[App\Http\Controllers\TimerController::class, 'pClaimPoint'])->name('pClaimPoint');
Route::post('/countdown-timer',[App\Http\Controllers\TimerController::class, 'cClaimPoint'])->name('cClaimPoint');

Route::get('/to-do-app', function () {
    return view('todoApp.todolist');
});
Route::post('/to-do-app',[App\Http\Controllers\TodoController::class, 'store'])->name('storeTodo');
Route::get('/to-do-app',[App\Http\Controllers\TodoController::class, 'show'])->name('showTodo');
Route::get('/to-do-app/delete/{id}',[App\Http\Controllers\TodoController::class, 'delete'])->name('deleteTodo');
Route::get('/notebook',function(){
    return view('notebookSystem.notebook');
});
Route::post('/notebook',[App\Http\Controllers\NotebookController::class, 'store'])->name('storeNotebook');
Route::get('/notebook',[App\Http\Controllers\NotebookController::class, 'show'])->name('showNotebook');
Route::get('/notebook/remove/{id}', [App\Http\Controllers\NotebookController::class, 'removeNotebook'])->name('removeNotebook');
Route::get('/notebook/{id}',[App\Http\Controllers\NotebookController::class, 'openNote'])->name('openNote');
Route::post('/notebook/note',[App\Http\Controllers\NoteController::class, 'store'])->name('storeNote');
Route::get('/notebook/note',[App\Http\Controllers\NoteController::class, 'showNote'])->name('showNote');
Route::get('/notebook/note/remove/{id}', [App\Http\Controllers\NoteController::class, 'removeNote'])->name('removeNote');
Route::get('/notebook/note/detail/{id}', [App\Http\Controllers\NoteController::class, 'showNoteDetail'])->name('showNoteDetail');
Route::get('/notebook/note/edit/{id}',[App\Http\Controllers\NoteController::class, 'editNote'])->name('editNote');
Route::post('/notebook/note/update',[App\Http\Controllers\NoteController::class, 'updateNote'])->name('updateNote');
Route::post('/notebook/note/upload',[App\Http\Controllers\NoteController::class, 'uploadPhoto'])->name('note.imageUpload');

Route::get('/four-quadrant-matrix',function(){
    return view('fourQuadrantMatrix.matrix');
});
Route::post('/four-quadrant-matrix/store/ImportantUrgent',[App\Http\Controllers\MatrixController::class, 'storeIUrgent'])->name('storeIUrgent');
Route::post('/four-quadrant-matrix/store/ImportantNotUrgent',[App\Http\Controllers\MatrixController::class, 'storeINUrgent'])->name('storeINUrgent');
Route::post('/four-quadrant-matrix/store/NotImportantUrgent',[App\Http\Controllers\MatrixController::class, 'storeNIUrgent'])->name('storeNIUrgent');
Route::post('/four-quadrant-matrix/store/NotImportantNotUrgent',[App\Http\Controllers\MatrixController::class, 'storeNINUrgent'])->name('storeNINUrgent');
Route::get('/four-quadrant-matrix',[App\Http\Controllers\MatrixController::class, 'showMatrix'])->name('showMatrix');
Route::get('/four-quadrant-matrix/remove/ImportantUrgent/{id}', [App\Http\Controllers\MatrixController::class, 'deleteIUrgent'])->name('deleteIUrgent');
Route::get('/four-quadrant-matrix/remove/ImportantNotUrgent/{id}', [App\Http\Controllers\MatrixController::class, 'deleteINUrgent'])->name('deleteINUrgent');
Route::get('/four-quadrant-matrix/remove/NotImportantUrgent/{id}', [App\Http\Controllers\MatrixController::class, 'deleteNIUrgent'])->name('deleteNIUrgent');
Route::get('/four-quadrant-matrix/remove/NotImportantNotUrgent/{id}', [App\Http\Controllers\MatrixController::class, 'deleteNINUrgent'])->name('deleteNINUrgent');

Route::get('/jomfocus/jomShop', [App\Http\Controllers\RedeemListController::class, 'index'])->name('shop');
Route::get('/jomfocus/jomShop', [App\Http\Controllers\RewardController::class, 'showReward'])->name('shop');
Route::post('/jomFocus/jomShop/search',[App\Http\Controllers\RedeemListController::class, 'search'])->name('rewardList.search');
Route::get('/jomFocus/jomShop/redeem/{id}',[App\Http\Controllers\RedeemListController::class, 'redeem'])->name('redeemReward');
Route::post('/jomFocus/jomShop/redeem',[App\Http\Controllers\RedeemListController::class, 'confirmRedeem'])->name('confirmRedeem');
Route::get('/jomfocus/my-reward', [App\Http\Controllers\RedeemListController::class, 'myReward'])->name('myReward');
Route::get('/jomfocus/my-reward', [App\Http\Controllers\RedeemListController::class, 'showMyReward'])->name('showMyReward');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.route')->middleware('admin');
Route::get('/user/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('usernameEdit');
Route::put('/user/update',[App\Http\Controllers\UserController::class, 'update'])->name('usernameUpdate');
Route::get('/admin/user-list',[App\Http\Controllers\UserController::class, 'showUser'])->name('admin.userList')->middleware('admin');
Route::post('/admin/user-list/search',[App\Http\Controllers\UserController::class, 'userSearch'])->name('userList.search')->middleware('admin');
Route::get('/admin/admin-list',[App\Http\Controllers\UserController::class, 'showAdmin'])->name('admin.adminList')->middleware('admin');
Route::post('/admin/admin-list/search',[App\Http\Controllers\UserController::class, 'adminSearch'])->name('adminList.search')->middleware('admin');
Route::get('/admin/user-list/remove/User/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('admin.deleteUser')->middleware('admin');
Route::get('/admin/admin-list/remove/User/{id}', [App\Http\Controllers\UserController::class, 'deleteAdmin'])->name('admin.deleteAdmin')->middleware('admin');

Route::get('/admin/user-feedback',[App\Http\Controllers\FeedbackController::class, 'showFeedback'])->name('admin.feedback')->middleware('admin');
Route::get('/admin/user-feedback/remove/Feedback/{id}', [App\Http\Controllers\FeedbackController::class, 'deleteFeedback'])->name('admin.deleteFeedback')->middleware('admin');
Route::post('/contact-us',[App\Http\Controllers\FeedbackController::class, 'store'])->name('storeFeedback');
Route::post('/admin/user-feedback/search',[App\Http\Controllers\FeedbackController::class, 'search'])->name('search')->middleware('admin');


Route::get('/admin/news-list',[App\Http\Controllers\NewsController::class, 'showNews'])->name('admin.newsList')->middleware('admin');
Route::get('/admin/news',[App\Http\Controllers\NewsController::class, 'index'])->name('admin.news')->middleware('admin');
Route::post('/admin/news',[App\Http\Controllers\NewsController::class, 'store'])->name('admin.storeNews')->middleware('admin');
Route::get('/admin/news/remove/{id}', [App\Http\Controllers\NewsController::class, 'delete'])->name('admin.deleteNews')->middleware('admin');
Route::get('/admin/news/edit/{id}',[App\Http\Controllers\NewsController::class, 'edit'])->name('admin.editNews')->middleware('admin');
Route::post('/admin/news/update',[App\Http\Controllers\NewsController::class, 'update'])->name('admin.updateNews')->middleware('admin');
Route::get('/news',[App\Http\Controllers\NewsController::class, 'show'])->name('news');
Route::get('/news/{id}',[App\Http\Controllers\NewsController::class, 'showNewsDetail'])->name('newsDetail');
Route::post('/admin/news/upload',[App\Http\Controllers\NewsController::class, 'uploadPhoto'])->name('admin.imageUpload')->middleware('admin');
Route::post('/admin/news/search',[App\Http\Controllers\NewsController::class, 'search'])->name('news.search')->middleware('admin');

Route::get('/admin/rewards',[App\Http\Controllers\RewardController::class, 'index'])->name('admin.rewards')->middleware('admin');
Route::post('/admin/rewards',[App\Http\Controllers\RewardController::class, 'store'])->name('admin.storeRewards')->middleware('admin');
Route::post('/admin/rewards/upload',[App\Http\Controllers\RewardController::class, 'uploadPhoto'])->name('rewards.imageUpload')->middleware('admin');
Route::get('/admin/rewards/remove/{id}', [App\Http\Controllers\RewardController::class, 'delete'])->name('admin.deleteReward')->middleware('admin');
Route::get('/admin/rewards/edit/{id}',[App\Http\Controllers\RewardController::class, 'edit'])->name('admin.editReward')->middleware('admin');
Route::post('/admin/rewards/update',[App\Http\Controllers\RewardController::class, 'update'])->name('admin.updateReward')->middleware('admin');
Route::get('/admin/reward-list',[App\Http\Controllers\RewardController::class, 'showRewardList'])->name('admin.rewardList')->middleware('admin');
Route::post('/admin/rewards/search',[App\Http\Controllers\RewardController::class, 'search'])->name('reward.search')->middleware('admin');
