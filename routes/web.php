<?php

use App\Models\Cta;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Stats;
use App\Models\Berita;
use App\Models\Ctalist;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Listbiasa;
use App\Models\Statelemen;
use App\Models\Listspecial;
use App\Models\Pricingcard;
use App\Models\Servicescard;
use App\Models\Programstudyitem;
use App\Models\Programstudycontent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontenController;

// ========== Halaman publik ==========
Route::get('/', [AuthController::class,'showIndex'])->name('index');
Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/postLogin', [AuthController::class,'login'])->name('postLogin');
// Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
// Route::post('/postRegister', [AuthController::class,'register'])->name('postRegister');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/downloads', function () {
    return view('download');
})->name('downloads');
Route::get('/konsentrasi', function () {
    $konsentrasis = \App\Models\Konsentrasi::all();
    return view('konsentrasi', compact('konsentrasis'));
})->name('konsentrasi');
Route::get('/megamenu/alur-pendaftaran', function () {
    return view('megamenu.alur-pendaftaran');
})->name('alur-pendaftaran');
Route::get('/megamenu/beasiswa', function () {
    $beasiswas = \App\Models\Beasiswas::all();
    return view('megamenu.beasiswa', compact('beasiswas'));
})->name('beasiswa');
Route::get('/megamenu/pilihan-kelas', function () {
    $pilihankelass = \App\Models\Pilihankelas::all();
    return view('megamenu.pilihan-kelas', compact('pilihankelass'));
})->name('pilihan-kelas');
Route::get('/megamenu/profil-lulusan', function () {
    $profillulusans = \App\Models\Profillulusan::all();
    return view('megamenu.profil-lulusan', compact('profillulusans'));
})->name('profil-lulusan');


// Berita selengkapnya bisa diakses publik
// Route::get('/berita/beritaselengkapnya', [BeritaController::class, 'beritaSelengkapnya'])
//     ->name('beritaSelengkapnya');

// ========== Halaman yang butuh login ==========
Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AuthController::class,'logout'])->name('logout');

    // Admin (pakai resource, sudah termasuk index, create, store, edit, update, destroy, show)
    Route::resource('admin', AdminController::class)->only(['index', 'store', 'update']);
    Route::get('/dashboard', function() {
       $title = "";
        $stats = Stats::all();
        $heroes = Hero::all();
        $services = Services::all();
        $servicescards = Servicescard::all();
        $statelemens = Statelemen::all();
        $pricings = Pricing::all();
        $pricingcards = Pricingcard::all();
        $listbiasas = Listbiasa::all();
        $listspecials = Listspecial::all();   
        $ctas = Cta::all();  
        $ctalists = Ctalist::all(); 
        $faqs = Faq::all(); 
        $programstudyitems = Programstudyitem::all();
        $programstudycontents = Programstudycontent::all();
        $berita = Berita::all();
        return view('admin.dashboard', compact('stats', 'heroes', 'services', 'servicescards', 'statelemens', 'pricings', 'pricingcards', 'listbiasas', 'listspecials', 'ctas', 'ctalists', 'faqs', 'programstudyitems', 'programstudycontents', 'berita'));
    })->name('dashboard');

    // Konten Home
    Route::get('/edit/home/hero', [KontenController::class,'showHomeHeroForm'])->name('editHomeHero');
    Route::post('/edit/home/hero/update', [KontenController::class, 'updateHomeHero'])->name('updateHomeHero');

    Route::get('/edit/home/services', [KontenController::class,'showHomeServicesForm'])->name('editHomeServices');
    Route::post('/edit/home/services/update', [KontenController::class, 'updateHomeServices'])->name('updateHomeServices');

    Route::get('/edit/home/features', [KontenController::class,'showHomeFeaturesForm'])->name('editHomeFeatures');
    Route::post('/edit/home/features/update', [KontenController::class, 'updateHomeFeatures'])->name('updateHomeFeatures');

    Route::get('/edit/home/stats', [KontenController::class,'showHomeStatsForm'])->name('editHomeStats');
    Route::post('/edit/home/stats/update', [KontenController::class, 'updateHomeStats'])->name('updateHomeStats');

    Route::get('/edit/home/pricing', [KontenController::class,'showHomePricingForm'])->name('editHomePricing');
    Route::post('/edit/home/pricing/update', [KontenController::class, 'updateHomePricing'])->name('updateHomePricing');

    Route::get('/edit/home/cta', [KontenController::class,'showHomeCtaForm'])->name('editHomeCta');
    Route::post('/edit/home/cta/update', [KontenController::class, 'updateHomeCta'])->name('updateHomeCta');

    Route::get('/edit/home/faq', [KontenController::class,'showHomeFaqForm'])->name('editHomeFaq');
    Route::post('/edit/home/faq/update', [KontenController::class, 'updateHomeFaqs'])->name('updateHomeFaqs');
    Route::post('/edit/berita/berita/update', [BeritaController::class, 'updateBerita'])->name('updateBerita');
    Route::post('/edit/berita/beritaurl/update', [BeritaController::class, 'updateBeritaurl'])->name('updateBeritaurl');

    Route::get('/edit/berita/editberitaselengkapnya', [BeritaController::class, 'editBeritaSelengkapnya'])
    ->name('editBeritaSelengkapnya');

    Route::get('/edit/berita/editberita', [BeritaController::class, 'showEditBerita'])
    ->name('editBerita');
    Route::get('/edit/berita/editberitaurl', [BeritaController::class, 'showEditBeritaurl'])
    ->name('editBeritaurl');
    Route::get('/edit/berita', [BeritaController::class, 'editBeritaSelengkapnyaIndex'])->name('edit.berita.index');
Route::get('/edit/berita/{slug}', [BeritaController::class, 'editBeritaSelengkapnyaShow'])->name('edit.berita.show');
Route::get('/admin/downloads', function () {
    $downloads = \App\Models\Download::all();
    return view('admin.download', compact('downloads'));
})->name('admin.downloads');
Route::get('/admin/konsentrasi', function () {
    $konsentrasis = \App\Models\Konsentrasi::all();
    return view('megamenuadmin.konsentrasi', compact('konsentrasis'));
})->name('admin.konsentrasi');
Route::get('/admin/alur-pendaftaran', function () {
    $alurpendaftarans = \App\Models\Alurpendaftaran::all();
    return view('megamenuadmin.alur-pendaftaran', compact('alurpendaftarans'));
})->name('admin.alur-pendaftaran');
Route::get('/admin/beasiswa', function () {
        $beasiswas = \App\Models\Beasiswas::all();
        return view('megamenuadmin.beasiswa', compact('beasiswas'));
})->name('admin.beasiswa');
Route::get('/admin/pilihan-kelas', function () {
    $pilihankelass = \App\Models\Pilihankelas::all();
    return view('megamenuadmin.pilihan-kelas', compact('pilihankelass'));
})->name('admin.pilihan-kelas');
Route::get('/admin/profil-lulusan', function () {
    $profillulusans = \App\Models\Profillulusan::all();
    return view('megamenuadmin.profil-lulusan', compact('profillulusans'));
})->name('admin.profil-lulusan');
Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
Route::post('/postRegister', [AuthController::class,'register'])->name('postRegister');
Route::get('/edit/megamenu/konsentrasi/tambah', [KontenController::class,'showMegamenuKonsentrasiFormTambah'])->name('editMegamenuKonsentrasiTambah');
Route::post('/edit/megamenu/konsentrasi/tambah/prosesTambah', [KontenController::class,'tambahMegamenuKonsentrasi'])->name('tambahMegamenuKonsentrasi');
Route::post('/edit/megamenu/konsentrasi/update', [KontenController::class,'updateMegamenuKonsentrasi'])->name('updateMegamenuKonsentrasi');
Route::delete('/edit/konsentrasi/hapus/{id}', [KontenController::class, 'hapusMegamenuKonsentrasi'])->name('hapusMegamenuKonsentrasi');
Route::get('/edit/konsentrasi/update/form/{id}', [KontenController::class, 'showupdateMegamenuKonsentrasi'])->name('showupdateMegamenuKonsentrasi');
Route::put('/edit/konsentrasi/update/{id}', [KontenController::class, 'updateMegamenuKonsentrasi'])->name('updateMegamenuKonsentrasi');
Route::get('/edit/megamenu/profillulusan/tambah', [KontenController::class,'showMegamenuProfilLulusanFormTambah'])->name('editMegamenuProfilLulusanTambah');
Route::post('/edit/megamenu/profillulusan/tambah/prosesTambah', [KontenController::class,'tambahMegamenuProfilLulusan'])->name('tambahMegamenuProfilLulusan');
Route::get('/edit/profillulusan/update/form/{id}', [KontenController::class, 'showupdateMegamenuProfilLulusan'])->name('showupdateMegamenuProfilLulusan');
Route::put('/edit/profillulusan/update/{id}', [KontenController::class, 'updateMegamenuProfilLulusan'])->name('updateMegamenuProfilLulusan');
Route::delete('/edit/profillulusan/hapus/{id}', [KontenController::class, 'hapusMegamenuProfilLulusan'])->name('hapusMegamenuProfilLulusan');
Route::get('/edit/megamenu/pilihankelas/tambah', [KontenController::class,'showMegamenuPilihanKelasFormTambah'])->name('editMegamenuPilihanKelasTambah');
Route::post('/edit/megamenu/pilihankelas/tambah/prosesTambah', [KontenController::class,'tambahMegamenuPilihanKelas'])->name('tambahMegamenuPilihanKelas');
Route::get('/edit/pilihankelas/update/form/{id}', [KontenController::class, 'showupdateMegamenuPilihanKelas'])->name('showupdateMegamenuPilihanKelas');
Route::put('/edit/pilihankelas/update/{id}', [KontenController::class, 'updateMegamenuPilihanKelas'])->name('updateMegamenuPilihanKelas');
Route::delete('/edit/pilihankelas/hapus/{id}', [KontenController::class, 'hapusMegamenuPilihanKelas'])->name('hapusMegamenuPilihanKelas');
Route::get('/edit/megamenu/beasiswa/tambah', [KontenController::class,'showMegamenuBeasiswaFormTambah'])->name('editMegamenuBeasiswaTambah');
Route::post('/edit/megamenu/beasiswa/tambah/prosesTambah', [KontenController::class,'tambahMegamenuBeasiswa'])->name('tambahMegamenuBeasiswa');
Route::get('/edit/beasiswa/update/form/{id}', [KontenController::class, 'showupdateMegamenuBeasiswa'])->name('showupdateMegamenuBeasiswa');
Route::put('/edit/beasiswa/update/{id}', [KontenController::class, 'updateMegamenuBeasiswa'])->name('updateMegamenuBeasiswa');
Route::delete('/edit/beasiswa/hapus/{id}', [KontenController::class, 'hapusMegamenuBeasiswa'])->name('hapusMegamenuBeasiswa');
Route::get('/edit/megamenu/alurpendaftaran/tambah', [KontenController::class,'showMegamenuAlurPendaftaranFormTambah'])->name('editMegamenuAlurPendaftaranTambah');
Route::post('/edit/megamenu/alurpendaftaran/tambah/prosesTambah', [KontenController::class,'tambahMegamenuAlurPendaftaran'])->name('tambahMegamenuAlurPendaftaran');
Route::get('/edit/alurpendaftaran/update/form/{id}', [KontenController::class, 'showupdateMegamenuAlurPendaftaran'])->name('showupdateMegamenuAlurPendaftaran');
Route::put('/edit/alurpendaftaran/update/{id}', [KontenController::class, 'updateMegamenuAlurPendaftaran'])->name('updateMegamenuAlurPendaftaran');
Route::delete('/edit/alurpendaftaran/hapus/{id}', [KontenController::class, 'hapusMegamenuAlurPendaftaran'])->name('hapusMegamenuAlurPendaftaran');
Route::get('/edit/alurpendaftaran/gambar/update/form/{id}', [KontenController::class, 'showupdateMegamenuAlurPendaftaranGambar'])->name('showupdateMegamenuAlurPendaftaranGambar');
Route::put('/edit/alurpendaftaran/gambar/update/{id}', [KontenController::class, 'updateMegamenuAlurPendaftaranGambar'])->name('updateMegamenuAlurPendaftaranGambar');
Route::get('/edit/admin/download/tambah', [KontenController::class,'showDownloadFormTambah'])->name('editDownloadTambah');
Route::post('/edit/download/tambah/prosesTambah', [KontenController::class,'tambahDownload'])->name('tambahDownload');
Route::get('/edit/download/update/form/{id}', [KontenController::class, 'showupdateDownload'])->name('showupdateDownload');
Route::put('/edit/download/update/{id}', [KontenController::class, 'updateDownload'])->name('updateDownload');
Route::delete('/edit/download/hapus/{id}', [KontenController::class, 'hapusDownload'])->name('hapusDownload');

});
