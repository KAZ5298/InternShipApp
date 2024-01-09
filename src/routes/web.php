<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCreate;
use App\Http\Controllers\PageStore;
use App\Http\Controllers\PageShow;
use App\Http\Controllers\PageEdit;
use App\Http\Controllers\PageUpdate;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 保護者ユーザーのルート
Route::middleware(['gurdian'])->group(function () {
    // 登録フォーム表示
    Route::get('page_01/{user}/create', [PageCreate::class, 'page_01_create'])->name('page_01.create'); // ページ１_受取後記入
    Route::get('page_02/{user}/create', [PageCreate::class, 'page_02_create'])->name('page_02.create'); // ページ２_妊婦の健康状態
    Route::get('page_03/{user}/create', [PageCreate::class, 'page_03_create'])->name('page_03.create'); // ページ３_妊婦の職業と環境
    Route::get('page_04/{user}/create', [PageCreate::class, 'page_04_create'])->name('page_04.create'); // ページ４_妊娠中の記録
    Route::get('page_07/{user}/create', [PageCreate::class, 'page_07_create'])->name('page_07.create'); // ページ７_父親や周囲の方の記録
    Route::get('page_08/{user}/create', [PageCreate::class, 'page_08_create'])->name('page_08.create'); // ページ８_両親学級などの受講記録
    Route::get('page_14/{user}/create', [PageCreate::class, 'page_14_create'])->name('page_14.create'); // ページ１４_保護者の記録
    Route::get('page_15/{user}/create', [PageCreate::class, 'page_15_create'])->name('page_15.create'); // ページ１５_健康診査

    // 登録メソッド
    Route::post('page_01/{user}/create', [PageStore::class, 'page_01_store'])->name('page_01.store'); // ページ１_受取後記入
    Route::post('page_02/{user}/create', [PageStore::class, 'page_02_store'])->name('page_02.store'); // ページ２_妊婦の健康状態
    Route::post('page_03/{user}/create', [PageStore::class, 'page_03_store'])->name('page_03.store'); // ページ３_妊婦の職業と環境
    Route::post('page_04/{user}/create', [PageStore::class, 'page_04_store'])->name('page_04.store'); // ページ４_妊娠中の記録
    Route::post('page_07/{user}/create', [PageStore::class, 'page_07_store'])->name('page_07.store'); // ページ７_父親や周囲の方の記録
    Route::post('page_08/{user}/create', [PageStore::class, 'page_08_store'])->name('page_08.store'); // ページ８_両親学級などの受講記録
    Route::post('page_14/{user}/create', [PageStore::class, 'page_14_store'])->name('page_14.store'); // ページ１４_保護者の記録
    Route::post('page_15/{user}/create', [PageStore::class, 'page_15_store'])->name('page_15.store'); // ページ１５_健康診査

    // 編集フォーム表示
    Route::get('page_02/{user}/edit', [PageEdit::class, 'page_02_edit'])->name('page_02.edit'); // ページ２_妊婦の健康状態
    Route::get('page_03/{user}/edit', [PageEdit::class, 'page_03_edit'])->name('page_03.edit'); // ページ３_妊婦の職業と環境
    Route::get('page_04/{user}/edit', [PageEdit::class, 'page_04_edit'])->name('page_04.edit'); // ページ４_妊娠中の記録
    Route::get('page_07/{user}/edit', [PageEdit::class, 'page_07_edit'])->name('page_07.edit'); // ページ７_父親や周囲の方の記録
    Route::get('page_08/{page_08}/{user}/edit', [PageEdit::class, 'page_08_edit'])->name('page_08.edit'); // ページ８_両親学級などの受講記録
    Route::get('page_14/{user}/edit', [PageEdit::class, 'page_14_edit'])->name('page_14.edit'); // ページ１４_保護者の記録
    Route::get('page_15/{user}/edit', [PageEdit::class, 'page_15_edit'])->name('page_15.edit'); // ページ１５_健康診査

    // 保存メソッド
    Route::patch('page_02/{page_02}/{user}/edit', [PageUpdate::class, 'page_02_update'])->name('page_02.update'); // ページ２_妊婦の健康状態
    Route::patch('page_03/{page_03}/{user}/edit', [PageUpdate::class, 'page_03_update'])->name('page_03.update'); // ページ３_妊婦の職業と環境
    Route::patch('page_04/{page_04}/{user}/edit', [PageUpdate::class, 'page_04_update'])->name('page_04.update'); // ページ４_妊娠中の記録
    Route::patch('page_07/{page_07}/{user}/edit', [PageUpdate::class, 'page_07_update'])->name('page_07.update'); // ページ７_父親や周囲の方の記録
    Route::patch('page_08/{page_08}/{user}/edit', [PageUpdate::class, 'page_08_update'])->name('page_08.update'); // ページ８_両親学級などの受講記録
    Route::patch('page_14/{page_14}/{user}/edit', [PageUpdate::class, 'page_14_update'])->name('page_14.update'); // ページ１４_保護者の記録
    Route::patch('page_15/{page_15}/{user}/edit', [PageUpdate::class, 'page_15_update'])->name('page_15.update'); // ページ１５_健康診査
});

// 役所ユーザーのルート
Route::middleware(['city_office'])->group(function () {
    // 登録フォーム表示
    Route::get('page_cover/{user}/create', [PageCreate::class, 'page_cover_create'])->name('page_00.create'); // 表紙

    // 登録メソッド
    Route::post('page_cover/{user}/create', [PageStore::class, 'page_cover_store'])->name('page_00.store'); // 表紙
});

// 支援者ユーザーのルート
Route::middleware(['supporter'])->group(function () {
    // 登録フォーム表示
    Route::get('page_05/{user}/create', [PageCreate::class, 'page_05_create'])->name('page_05.create'); // ページ５_妊娠中の経過
    Route::get('page_06/{user}/create', [PageCreate::class, 'page_06_create'])->name('page_06.create'); // ページ６_検査の記録
    Route::get('page_09/{user}/create', [PageCreate::class, 'page_09_create'])->name('page_09.create'); // ページ９_妊娠中と産後の歯の状態
    Route::get('page_10/{user}/create', [PageCreate::class, 'page_10_create'])->name('page_10.create'); // ページ１０_出産の状態
    Route::get('page_11/{user}/create', [PageCreate::class, 'page_11_create'])->name('page_11.create'); // ページ１１_出産後の母体の経過
    Route::get('page_12/{user}/create', [PageCreate::class, 'page_12_create'])->name('page_12.create'); // ページ１２_サービス利用記録
    Route::get('page_13/{user}/create', [PageCreate::class, 'page_13_create'])->name('page_13.create'); // ページ１３_早期・後期新生児期の記録

    // 登録メソッド
    Route::post('page_05/{user}/create', [PageStore::class, 'page_05_store'])->name('page_05.store'); // ページ５_妊娠中の経過
    Route::post('page_06/{user}/create', [PageStore::class, 'page_06_store'])->name('page_06.store'); // ページ６_検査の記録
    Route::post('page_09/{user}/create', [PageStore::class, 'page_09_store'])->name('page_09.store'); // ページ９_妊娠中と産後の歯の状態
    Route::post('page_10/{user}/create', [PageStore::class, 'page_10_store'])->name('page_10.store'); // ページ１０_出産の状態
    Route::post('page_11/{user}/create', [PageStore::class, 'page_11_store'])->name('page_11.store'); // ページ１１_出産後の母体の経過
    Route::post('page_12_1/{user}/create', [PageStore::class, 'page_12_1_store'])->name('page_12_1.store'); // ページ１２_サービス利用記録１（産後ケア）
    Route::post('page_12_2/{user}/create', [PageStore::class, 'page_12_2_store'])->name('page_12_2.store'); // ページ１２_サービス利用記録２（相談機関）
    Route::post('page_13/{user}/create', [PageStore::class, 'page_13_store'])->name('page_13.store'); // ページ１３_早期・後期新生児期の記録

    // 編集フォーム表示
    Route::get('page_05/{page_05}/{user}/edit', [PageEdit::class, 'page_05_edit'])->name('page_05.edit'); // ページ５_妊娠中の経過
    Route::get('page_06/{page_06}/{user}/edit', [PageEdit::class, 'page_06_edit'])->name('page_06.edit'); // ページ６_検査の記録
    Route::get('page_09_1/{user}/edit', [PageEdit::class, 'page_09_edit1'])->name('page_09.edit1'); // ページ９_妊娠中と産後の歯の状態（初回情報）
    Route::get('page_09_2/{page_09_2}/{user}/edit', [PageEdit::class, 'page_09_edit2'])->name('page_09.edit2'); // ページ９_妊娠中と産後の歯の状態
    Route::get('page_10/{user}/edit', [PageEdit::class, 'page_10_edit'])->name('page_10.edit'); // ページ１０_出産の状態
    Route::get('page_12_1/{page_12_1}/{user}/edit', [PageEdit::class, 'page_12_edit1'])->name('page_12.edit1'); // ページ１２_サービス利用記録１（産後ケア）
    Route::get('page_12_2/{page_12_2}/{user}/edit', [PageEdit::class, 'page_12_edit2'])->name('page_12.edit2'); // ページ１２_サービス利用記録２（相談機関）
    Route::get('page_13/{user}/edit', [PageEdit::class, 'page_13_edit'])->name('page_13.edit'); // ページ１３_早期・後期新生児期の記録

    // 保存メソッド
    Route::patch('page_05/{page_05}/{user}/edit', [PageUpdate::class, 'page_05_update'])->name('page_05.update'); // ページ５_妊娠中の経過
    Route::patch('page_06/{page_06}/{user}/edit', [PageUpdate::class, 'page_06_update'])->name('page_06.update'); // ページ６_検査の記録
    Route::patch('page_09_1/{page_09_1}/{user}/edit', [PageUpdate::class, 'page_09_update1'])->name('page_09.update1'); // ページ９_妊娠中と産後の歯の状態（初回情報）
    Route::patch('page_09_2/{page_09_2}/{user}/edit', [PageUpdate::class, 'page_09_update2'])->name('page_09.update2'); // ページ９_妊娠中と産後の歯の状態
    Route::patch('page_10/{page_10}/{user}/edit', [PageUpdate::class, 'page_10_update'])->name('page_10.update'); // ページ１０_出産の状態
    Route::patch('page_12_1/{page_12_1}/{user}/edit', [PageUpdate::class, 'page_12_update1'])->name('page_12.update1'); // ページ１２_サービス利用記録１（産後ケア）
    Route::patch('page_12_2/{page_12_2}/{user}/edit', [PageUpdate::class, 'page_12_update2'])->name('page_12.update2'); // ページ１２_サービス利用記録２（相談機関）
    Route::patch('page_13/{page_13}/{user}/edit', [PageUpdate::class, 'page_13_update'])->name('page_13.update'); // ページ１３_早期・後期新生児期の記録
});

// 支援者ユーザー以外のルート
Route::middleware(['g_or_co'])->group(function () {
    // 編集フォーム表示
    Route::get('page_cover/{user}/edit', [PageEdit::class, 'page_cover_edit'])->name('page_00.edit'); // 表紙
    Route::get('page_01/{user}/edit', [PageEdit::class, 'page_01_edit'])->name('page_01.edit'); // ページ１_受取後記入

    // 保存メソッド
    Route::patch('page_cover/{page_00}/{user}/edit', [PageUpdate::class, 'page_cover_update'])->name('page_00.update'); // 表紙
    Route::patch('page_01/{page_01}/{user}/edit', [PageUpdate::class, 'page_01_update'])->name('page_01.update'); // ページ１_受取後記入
});

// 役所ユーザー以外のルート
Route::middleware(['g_or_s'])->group(function () {
    // 編集フォーム表示
    Route::get('page_11_1/{page_11_1}/edit', [PageEdit::class, 'page_11_edit1'])->name('page_11.edit1'); // ページ１１_出産後の母体の経過
    Route::get('page_11_2/{user}/edit', [PageEdit::class, 'page_11_edit2'])->name('page_11.edit2'); // ページ１１_出産後の母体の経過（母親自身の記録）

    // 保存メソッド
    Route::patch('page_11_1/{page_11_1}/{user}/edit', [PageUpdate::class, 'page_11_update1'])->name('page_11.update1'); // ページ１１_出産後の母体の経過
    Route::patch('page_11_2/{page_11_2}/{user}/edit', [PageUpdate::class, 'page_11_update2'])->name('page_11.update2'); // ページ１１_出産後の母体の経過（母親自身の記録）
});

// 保護者ユーザー一覧
Route::get('gurdian_users', [UserController::class, 'index'])->name('user.index');

// ログイン関連
Route::get('redirects', [LoginController::class, 'index'])->name('login.index');

// メインページ
Route::get('main/{user}', [MainPageController::class, 'index'])->name('main.index');

// 表示メソッド
Route::get('page_cover/{user}/show', [PageShow::class, 'page_cover_show'])->name('page_00.show'); // 表紙
Route::get('page_01/{user}/show', [PageShow::class, 'page_01_show'])->name('page_01.show'); // ページ１_受取後記入
Route::get('page_02/{user}/show', [PageShow::class, 'page_02_show'])->name('page_02.show'); // ページ２_妊婦の健康状態
Route::get('page_03/{user}/show', [PageShow::class, 'page_03_show'])->name('page_03.show'); // ページ３_妊婦の職業と環境
Route::get('page_04/{user}/show', [PageShow::class, 'page_04_show'])->name('page_04.show'); // ページ４_妊娠中の記録
Route::get('page_05/{user}/show', [PageShow::class, 'page_05_show'])->name('page_05.show'); // ページ５_妊娠中の経過
Route::get('page_06/{user}/show', [PageShow::class, 'page_06_show'])->name('page_06.show'); // ページ６_検査の記録
Route::get('page_07/{user}/show', [PageShow::class, 'page_07_show'])->name('page_07.show'); // ページ７_父親や周囲の方の記録
Route::get('page_08/{user}/show', [PageShow::class, 'page_08_show'])->name('page_08.show'); // ページ８_両親学級などの受講記録
Route::get('page_09/{user}/show', [PageShow::class, 'page_09_show'])->name('page_09.show'); // ページ９_妊娠中と産後の歯の状態
Route::get('page_10/{user}/show', [PageShow::class, 'page_10_show'])->name('page_10.show'); // ページ１０_出産の状態
Route::get('page_11/{user}/show', [PageShow::class, 'page_11_show'])->name('page_11.show'); // ページ１１_出産後の母体の経過
Route::get('page_12/{user}/show', [PageShow::class, 'page_12_show'])->name('page_12.show'); // ページ１２_サービス利用記録
Route::get('page_13/{user}/show', [PageShow::class, 'page_13_show'])->name('page_13.show'); // ページ１３_早期・後期新生児期の記録
Route::get('page_14/{user}/show', [PageShow::class, 'page_14_show'])->name('page_14.show'); // ページ１４_保護者の記録
Route::get('page_15/{user}/show', [PageShow::class, 'page_15_show'])->name('page_15.show'); // ページ１５_健康診査

require __DIR__ . '/auth.php';
