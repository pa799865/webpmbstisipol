<?php

namespace App\Http\Controllers;

use App\Models\Alurpendaftaran;
use App\Models\Beasiswas;
use App\Models\Cta;
use App\Models\Download;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Pilihankelas;
use App\Models\Stats;
use App\Models\Ctalist;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Listbiasa;
use App\Models\Statelemen;
use App\Models\Konsentrasi;
use App\Models\Listspecial;
use App\Models\Pricingcard;
use App\Models\Profillulusan;
use App\Models\Servicescard;
use Illuminate\Http\Request;
use App\Models\Programstudyitem;
use App\Models\Programstudycontent;

class KontenController extends Controller
{
    public function showHomeHeroForm()
    {
        $title = "Edit Konten Home Hero";
        $heroes = Hero::all();
        $stats = Stats::all();
        return view('edit.home.hero', compact('heroes', 'stats'));
    }
    public function showHomeServicesForm()
    {
        $title = "Edit Konten Home Hero";
        $services = Services::all();
        $servicescards = Servicescard::all();
        return view('edit.home.services', compact('services', 'servicescards'));
    }
    public function showHomeFeaturesForm()
    {
        $title = "Edit Konten Home Hero";
        $programstudyitems = Programstudyitem::all();
        $programstudycontents = Programstudycontent::all();
        return view('edit.home.features', compact('programstudyitems', 'programstudycontents'));
    }
    public function showHomeStatsForm()
    {
        $title = "Edit Konten Home Hero";
        $stats = Stats::all();
        $statelemens = Statelemen::all();
        return view('edit.home.stats', compact('stats', 'statelemens'));
    }
    public function showHomePricingForm()
    {
        $title = "Edit Konten Home Hero";
        $pricings = Pricing::all();
        $pricingcards = Pricingcard::all();
        $listbiasas = Listbiasa::all();
        $listspecials = Listspecial::all();  
        return view('edit.home.pricing', compact('title', 'pricings', 'pricingcards', 'listbiasas', 'listspecials'));
    }
    public function showHomeCtaForm()
    {
        $ctas = Cta::all();  
        $ctalists = Ctalist::all(); 
        $title = "Edit Konten Home Hero";
        return view('edit.home.cta', compact('title', 'ctas', 'ctalists'));
    }
    public function showHomeFaqForm()
    {
        $faqs = Faq::all();
        $title = "Edit FAQ";
        return view('edit.home.faq', compact('title', 'faqs'));
    }
    public function statsShow(Stats $stats)
    {
        return view('edit.home.stats', compact('stats'));
    }

    public function updateHomeHero(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('heroes')) {
        $this->updateHeroes($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('stats')) {
        $this->updateStats($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Hero berhasil diperbarui');
}

private function updateHeroes(Request $request)
{
    foreach ($request->input('heroes', []) as $heroData) {
        $hero = Hero::find($heroData['id']);
        if ($hero && $hero->content !== $heroData['content']) {
            $hero->update(['content' => $heroData['content']]);
        }
    }
}

private function updateStats(Request $request)
{
    $stats = $request->input('stats', []);

    foreach ($stats as $statData) {
        if (isset($statData['id'])) {
            // update data lama
            $stat = Stats::find($statData['id']);
            if ($stat) {
                $stat->update([
                    'number' => $statData['number'],
                    'label'  => $statData['label'],
                ]);
            }
        } else {
            // insert data baru
            Stats::create([
                'number' => $statData['number'],
                'label'  => $statData['label'],
            ]);
        }
    }
    foreach ($request->input('deleteStats', []) as $id) {
        $stat = Stats::find($id);
        if ($stat) {
            $stat->delete();
        }
    }
}

public function updateHomeServices(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('services')) {
        $this->updateServices($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('servicescard')) {
        $this->updateServicesCards($request);
    }

    if ($request->hasFile('img_services_visual')) {
        $this->updateServicesImg($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Services berhasil diperbarui');
}

private function updateServices(Request $request)
{
    foreach ($request->input('services', []) as $servicesData) {
        $service = Services::find($servicesData['id']);
        if ($service && $service->content !== $servicesData['content']) {
            $service->update(['content' => $servicesData['content']]);
        }
    }
}

private function updateServicesCards(Request $request)
{
    $servicescards = $request->input('servicescard', []);

    foreach ($servicescards as $servicescard) {
        if (isset( $servicescard['id'])) {
            // update data lama
            $stat = Servicescard::find( $servicescard['id']);
            if ($stat) {
                $stat->update([
                    'title' =>  $servicescard['title'],
                    'description'  =>  $servicescard['description'],
                ]);
            }
        } else {
            // insert data baru
            Servicescard::create([
                'title' =>  $servicescard['title'],
                'description'  =>  $servicescard['description'],
            ]);
        }
    }
    foreach ($request->input('deleteStats', []) as $id) {
        $stat = Servicescard::find($id);
        if ($stat) {
            $stat->delete();
        }
    }
}

private function updateServicesImg(Request $request)
{
    $id = $request->input('img_services_id');
    $service = Services::find($id);

    if ($service && $request->hasFile("img_services_visual")) {
        $file = $request->file("img_services_visual");
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/services'), $filename);

        if ($service->content && file_exists(public_path('assets/img/services/' . $service->content))) {
            unlink(public_path('assets/img/services/' . $service->content));
        }

        $service->update(['content' => $filename]);
    }
}


    public function updateHomeFeatures(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('programstudyitem')) {
        $this->updateProgramstudyItem($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('programstudycontent')) {
        $this->updateProgramstudyContent($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Features berhasil diperbarui');
}

private function updateProgramstudyItem(Request $request)
{
    foreach ($request->input('programstudyitem', []) as $programStudyItemData) {
        $programStudyItem = Programstudyitem::find($programStudyItemData['id']);
        if ($programStudyItem && $programStudyItem->title !== $programStudyItemData['title']) {
            $programStudyItem->update(['title' => $programStudyItemData['title']]);
        }
        if ($programStudyItem && $programStudyItem->description !== $programStudyItemData['description']) {
            $programStudyItem->update(['description' => $programStudyItemData['description']]);
        }
    }
}

private function updateProgramstudyContent(Request $request)
{
    foreach ($request->input('programstudycontent', []) as $index => $programStudyContentData) {
        $programStudyContent = Programstudycontent::find($programStudyContentData['id']);
        
        if (!$programStudyContent) continue;

        // update teks
        $programStudyContent->update([
            'title' => $programStudyContentData['title'],
            'description' => $programStudyContentData['description'],
            'list1' => $programStudyContentData['list1'] ?? null,
            'list2' => $programStudyContentData['list2'] ?? null,
            'list3' => $programStudyContentData['list3'] ?? null,
            'list4' => $programStudyContentData['list4'] ?? null,
        ]);

        // update gambar kalau ada
        if ($request->hasFile("programstudycontent.$index.img")) {
            $file = $request->file("programstudycontent.$index.img");
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/img/features'), $filename);

            // hapus file lama
            if ($programStudyContent->img && file_exists(public_path('assets/img/features/'.$programStudyContent->img))) {
                unlink(public_path('assets/img/features/'.$programStudyContent->img));
            }

            $programStudyContent->update([
                'img' => $filename,
            ]);
        }
    }
}

public function updateHomeStats(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('statelemens')) {
        $this->updateStatsElement($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('stats')) {
        $this->updateStatsCards($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Stats berhasil diperbarui');
}

private function updateStatsElement(Request $request)
{
    foreach ($request->input('statelemens', []) as $statelemensData) {
        $statelemens = Statelemen::find($statelemensData['id']);
        if ($statelemens && $statelemens->content !== $statelemensData['content']) {
            $statelemens->update(['content' => $statelemensData['content']]);
        }
    }
}

private function updateStatsCards(Request $request)
{
    // hapus dulu
    foreach ($request->input('hapusStats', []) as $id) {
        $stat = Stats::find($id);
        if ($stat) {
            $stat->delete();
        }
    }

    // kalau ada data stats baru / update → baru jalanin ini
    if ($request->has('stats')) {
        $stats = $request->input('stats', []);

        foreach ($stats as $statData) {
            if (isset($statData['id'])) {
                // update data lama
                $stat = Stats::find($statData['id']);
                if ($stat) {
                    $stat->update([
                        'number' => $statData['number'],
                        'label'  => $statData['label'] ,
                    ]);
                }
            } else {
                // insert data baru
                Stats::create([
                    'number' => $statData['number'],
                    'label'  => $statData['label'],
                ]);
            }
        }
    }
}


 public function updateHomePricing(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('pricings')) {
        $this->updatePricing($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('pricingcard')) {
        $this->updatePricingCard($request);
    }
    if ($request->has('listbiasa')) {
        $this->updateListBiasa($request);
    }
    if ($request->has('listspecial')) {
        $this->updateListSpecial($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Pricing berhasil diperbarui');
}

private function updatePricing(Request $request)
{
    foreach ($request->input('pricings', []) as $pricingsData) {
        $pricings = Pricing::find($pricingsData['id']);
        if ($pricings && $pricings->content !== $pricingsData['content']) {
            $pricings->update(['content' => $pricingsData['content']]);
        }
    }
}

private function updatePricingCard(Request $request)
{
    $pricingCards = $request->input('pricingcard', []);

    foreach ($pricingCards as $pricingcardData) {
        if (isset($pricingcardData['id'])) {
            // update data lama
            $pricingCard = Pricingcard::find($pricingcardData['id']);
            if (isset($pricingcardData['tipe'])) {
                        $special = 'featured';
                        $special2 = '-featured';
                        $special3 = 'feature-li';
                        $special4 = 'feature-i';
                        $special5 = 'special';
                        $tipe = 'special';
                    } else {
                        $special = null;
                        $special2 = null;
                        $special3 =null;
                        $special4 =null;
                        $special5 = null;
                        $tipe = null;
                    } 

                $pricingCard->update([
                    'badge' => $pricingcardData['badge'],
                    'title'  => $pricingcardData['title'],
                    'description'  => $pricingcardData['description'],
                    'price'  => $pricingcardData['price'],
                    'period'  => $pricingcardData['period'],
                    'special'  => $special,
                    'special2'  => $special2,
                    'special3'  => $special3,
                    'special4'  => $special4,
                    'special5'  => $special5,
                    'special6'  => $special5,
                    'tipe'  => $tipe,
                ]);
        } else {
            // insert data baru
            if (isset($pricingcardData['tipe'])) {
                        $special = 'featured';
                        $special2 = '-featured';
                        $special3 = 'feature-li';
                        $special4 = 'feature-i';
                        $special5 = 'special';
                        $tipe = 'special';
                    } else {
                        $special = null;
                        $special2 = null;
                        $special3 =null;
                        $special4 =null;
                        $special5 = null;
                        $tipe = null;
                    } 
            Pricingcard::create([
               'badge' => $pricingcardData['badge'],
                    'title'  => $pricingcardData['title'],
                    'description'  => $pricingcardData['description'],
                    'price'  => $pricingcardData['price'],
                    'period'  => $pricingcardData['period'],
                    'special'  => $special,
                    'special2'  => $special2,
                    'special3'  => $special3,
                    'special4'  => $special4,
                    'special5'  => $special5,
                    'special6'  => $special5,
                    'tipe'  => $tipe,
            ]);
        }
    }
    foreach ($request->input('deleteStats', []) as $id) {
        $pricingCard = Pricingcard::find($id);
        if ($pricingCard) {
            $pricingCard->delete();
        }
    }
}
private function updateListBiasa(Request $request)
{
    $listbiasa = $request->input('listbiasa', []);

    foreach ($listbiasa as $listbiasaData) {
        if (isset($listbiasaData['id'])) {
            // update data lama
            $listbiasa = Listbiasa::find($listbiasaData['id']);
            if ($listbiasa) {
                $listbiasa->update([
                    'content' => $listbiasaData['content']  
                ]);
            }
        } else {
            // insert data baru
            Listbiasa::create([
               'content' => $listbiasaData['content']  
            ]);
        }
    }
    foreach ($request->input('deleteStats', []) as $id) {
        $listbiasa = Listbiasa::find($id);
        if ($listbiasa) {
            $listbiasa->delete();
        }
    }
}
private function updateListSpecial(Request $request)
{
    $listspecial = $request->input('listspecial', []);

    foreach ($listspecial as $listspecialData) {
        if (isset($listspecialData['id'])) {
            // update data lama
            $listspecial = Listspecial::find($listspecialData['id']);
            if ($listspecial) {
                $listspecial->update([
                    'content' => $listspecialData['content']
                ]);
            }
        } else {
            // insert data baru
            Listspecial::create([
               'content' => $listspecialData['content']
            ]);
        }
    }
    foreach ($request->input('deleteStats', []) as $id) {
        $listspecial = Listspecial::find($id);
        if ($listspecial) {
            $listspecial->delete();
        }
    }
}

public function updateHomeCta(Request $request)
{
    // update CTA content utama
    if ($request->has('ctas')) {
        $this->updateCtas($request);
    }

    // update CTA list
    if ($request->has('ctalist')) {
        $this->updateCtaList($request);
    }

    // update CTA image (cari field yg ada "img_*_visual")
    if ($request->hasFile('img_cta_visual')) {
    $this->updateCtasImg($request);
}

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Cta berhasil diperbarui');
}

private function updateCtas(Request $request)
{
    foreach ($request->input('ctas', []) as $ctasData) {
        $cta = Cta::find($ctasData['id']);
        if ($cta && $cta->content !== $ctasData['content']) {
            $cta->update(['content' => $ctasData['content']]);
        }
    }
}


private function updateCtaList(Request $request)
{
    $ctalists = $request->input('ctalist', []);

    foreach ($ctalists as $ctalist) {
        if (isset($ctalist['id'])) {
            // update data lama
            $stat = Ctalist::find($ctalist['id']);
            if ($stat) {
                $stat->update([
                    'content' => $ctalist['content'],
                ]);
            }
        } else {
            // insert data baru
            Ctalist::create([
                'content' => $ctalist['content'],
            ]);
        }
    }

    // hapus data kalau ada delete request
    foreach ($request->input('deleteStats', []) as $id) {
        $stat = Ctalist::find($id);
        if ($stat) {
            $stat->delete();
        }
    }
}

private function updateCtasImg(Request $request)
{
    $cta = Cta::find($request->input('img_cta_id'));

    if ($cta && $request->hasFile('img_cta_visual')) {
        $file = $request->file('img_cta_visual');

        // nama file baru
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/cta'), $filename);

        // hapus file lama
        $oldPath = public_path('assets/img/cta/' . $cta->content);
        if ($cta->content && file_exists($oldPath)) {
            unlink($oldPath);
        }

        // update database dengan nama baru
        $cta->update(['content' => $filename]);
    }
}




public function updateHomeFaqs(Request $request)
{
    // kalau ada input hero → jalankan update hero
    if ($request->has('heroes')) {
        $this->updateHeroes($request);
    }

    // kalau ada input stats → jalankan update stats
    if ($request->has('stats')) {
        $this->updateStats($request);
    }

    // kalau ada input faqs → jalankan update faq
    if ($request->has('faqs')) {
        $this->updateFaqs($request);
    }

    return redirect()->route('admin.index')->with('success', 'primary')->with('message', 'Konten Faqs berhasil diperbarui');
}

private function updateFaqs(Request $request)
{
    $faqs = $request->input('faqs', []);

    foreach ($faqs as $faqData) {
        if (isset($faqData['id'])) {
            // update data lama
            $faq = Faq::find($faqData['id']);
            if ($faq) {
                $faq->update([
                    'title'       => $faqData['title'],
                    'description' => $faqData['description'],
                ]);
            }
        } else {
            // insert data baru
            Faq::create([
                'title'       => $faqData['title'],
                'description' => $faqData['description'],
            ]);
        }
    }

    // hapus FAQ
    foreach ($request->input('deleteFaqs', []) as $id) {
        $faq = Faq::find($id);
        if ($faq) {
            $faq->delete();
        }
    }
}

public function showMegamenuKonsentrasiFormTambah()
    {
        return view('edit.megamenu.konsentrasi.tambahkonsentrasi');
    }

    
public function tambahMegamenuKonsentrasi(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,jpeg,png,webp',
            'judul' => 'required',
            'deskripsi' => 'required',
            'akreditasi' => 'required',
            'konsentrasi1' => 'required',
        ]);

if ($request->hasFile('img')) {
    // Nama file unik
    $imgName = time() . '_' . $request->file('img')->getClientOriginalName();

    // Simpan langsung ke folder public/assets/img/konsentrasi
    $request->file('img')->move(public_path('assets/img/konsentrasi'), $imgName);
}


        Konsentrasi::create([
            'img' => $imgName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'akreditasi' => $request->akreditasi,
            'konsentrasi1' => $request->konsentrasi1,
            'konsentrasi2' => $request->konsentrasi2,
            'konsentrasi3' => $request->konsentrasi3,
            'konsentrasi4' => $request->konsentrasi4,
            'konsentrasi5' => $request->konsentrasi5,
            'background_card' => $request->has('tipe') ? 'darker' : 'light',
            'background_akreditasi' => $request->has('tipe') ? '-light' : null,
            'background_akreditasi2' => $request->has('tipe') ? 'text-accent' : null,
        ]);

        return redirect()->route('admin.konsentrasi')->with('success', 'primary')->with('message', 'Konten Konsentrasi berhasil diperbarui');
        
        
    }

    public function hapusMegamenuKonsentrasi($id)
{
    // Cari data berdasarkan ID
    $konsentrasi = Konsentrasi::findOrFail($id);

    // Cek apakah file gambar ada di folder public
    $gambarPath = public_path('assets/img/konsentrasi/' . $konsentrasi->img);
    if (file_exists($gambarPath)) {
        unlink($gambarPath); // Hapus file fisik dari folder public
    }

    // Hapus data dari database
    $konsentrasi->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.konsentrasi')->with('success', 'primary')->with('message', 'Konten Konsentrasi berhasil diperbarui');
}

public function showupdateMegamenuKonsentrasi($id)
{
    $konsentrasi = Konsentrasi::findOrFail($id);
    return view('edit.megamenu.konsentrasi.updatekonsentrasi', compact('konsentrasi'));
}

public function updateMegamenuKonsentrasi(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'akreditasi' => 'required',
        'konsentrasi1' => 'required',
    ]);

    $konsentrasi = Konsentrasi::findOrFail($id);

    if ($request->hasFile('img')) {
        // hapus file lama
        $oldPath = public_path('assets/img/konsentrasi/' . $konsentrasi->img);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload baru
        $imgName = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('assets/img/konsentrasi'), $imgName);
        $konsentrasi->img = $imgName;
    }

    // update field lain
    $konsentrasi->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'akreditasi' => $request->akreditasi,
        'konsentrasi1' => $request->konsentrasi1,
        'konsentrasi2' => $request->konsentrasi2,
        'konsentrasi3' => $request->konsentrasi3,
        'konsentrasi4' => $request->konsentrasi4,
        'konsentrasi5' => $request->konsentrasi5,
        'background_card' => $request->has('tipe') ? 'darker' : 'light',
        'background_akreditasi' => $request->has('tipe') ? '-light' : null,
        'background_akreditasi2' => $request->has('tipe') ? 'text-accent' : null,
    ]);

    return redirect()->route('admin.konsentrasi')->with('success', 'primary')->with('message', 'Konten Konsentrasi berhasil diperbarui');
}

public function showMegamenuProfilLulusanFormTambah()
    {
        return view('edit.megamenu.profillulusan.tambahprofillulusan');
    }

public function tambahMegamenuProfilLulusan (Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,jpeg,png,webp',
            'judul' => 'required',
            'deskripsi' => 'required',
            'list1' => 'required',
        ]);

if ($request->hasFile('img')) {
    // Nama file unik
    $imgName = time() . '_' . $request->file('img')->getClientOriginalName();

    // Simpan langsung ke folder public/assets/img/konsentrasi
    $request->file('img')->move(public_path('assets/img/lainnya/profil_lulusan'), $imgName);
}


        Profillulusan::create([
            'img' => $imgName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'list1' => $request->list1,
            'list2' => $request->list2,
            'list3' => $request->list3,
            'list4' => $request->list4,
            'list5' => $request->list5,
            'list6' => $request->list6,
            'list7' => $request->list7,
            'list8' => $request->list8,
            'list9' => $request->list9,
            'list10' => $request->list10,
            'background' => $request->has('tipe') ? 'highlighted' : null,
        ]);

        return redirect()->route('admin.profil-lulusan')->with('success', 'primary')->with('message', 'Konten Profil Lulusan berhasil diperbarui');
        
        
    }

    public function showupdateMegamenuProfilLulusan($id)
{
    $profillulusan = Profillulusan::findOrFail($id);
    return view('edit.megamenu.profillulusan.updateprofillulusan', compact('profillulusan'));
}
public function updateMegamenuProfilLulusan(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'list1' => 'required',
    ]);

    $profillulusan = Profillulusan::findOrFail($id);

    if ($request->hasFile('img')) {
        // hapus file lama
        $oldPath = public_path('assets/img/lainnya/profil_lulusan' . $profillulusan->img);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload baru
        $imgName = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('assets/img/lainnya/profil_lulusan'), $imgName);
        $profillulusan->img = $imgName;
    }

    // update field lain
    $profillulusan->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'akreditasi' => $request->akreditasi,
        'list1' => $request->list1,
        'list2' => $request->list2,
        'list3' => $request->list3,
        'list4' => $request->list4,
        'list5' => $request->list5,
        'background' => $request->has('tipe') ? 'highlighted' : '',
    ]);

    return redirect()->route('admin.profil-lulusan')->with('success', 'primary')->with('message', 'Konten Profil Lulusan berhasil diperbarui');
}
public function hapusMegamenuProfilLulusan($id)
{
    // Cari data berdasarkan ID
    $profillulusan = Profillulusan::findOrFail($id);

    // Cek apakah file gambar ada di folder public
    $gambarPath = public_path('assets/img/konsentrasi/' . $profillulusan->img);
    if (file_exists($gambarPath)) {
        unlink($gambarPath); // Hapus file fisik dari folder public
    }

    // Hapus data dari database
    $profillulusan->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.profil-lulusan')->with('success', 'primary')->with('message', 'Konten Profil Lulusan berhasil diperbarui');
}
public function showMegamenuPilihanKelasFormTambah()
    {
        return view('edit.megamenu.pilihankelas.tambahpilihankelas');
    }
public function tambahMegamenuPilihanKelas (Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);


        Pilihankelas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.pilihan-kelas')->with('success', 'primary')->with('message', 'Konten Pilihan kelas berhasil diperbarui');
        
        
    }
    public function showupdateMegamenuPilihanKelas($id)
{
    $pilihankelas = Pilihankelas::findOrFail($id);
    return view('edit.megamenu.pilihankelas.updatepilihankelas', compact('pilihankelas'));
}
public function updateMegamenuPilihanKelas(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);

    $pilihankelas = Pilihankelas::findOrFail($id);

    // update field lain
    $pilihankelas->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('admin.pilihan-kelas')->with('success', 'primary')->with('message', 'Konten Pilihan Kelas berhasil diperbarui');
}
public function hapusMegamenuPilihanKelas($id)
{
    // Cari data berdasarkan ID
    $pilihankelas = Pilihankelas::findOrFail($id);

    // Hapus data dari database
    $pilihankelas->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.pilihan-kelas')->with('success', 'primary')->with('message', 'Konten Pilihan Kelas berhasil diperbarui');
}
public function showMegamenuBeasiswaFormTambah()
    {
        return view('edit.megamenu.beasiswa.tambahbeasiswa');
    }
    public function tambahMegamenuBeasiswa (Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,jpeg,png,webp',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tombol' => 'required',
        ]);

if ($request->hasFile('img')) {
    // Nama file unik
    $imgName = time() . '_' . $request->file('img')->getClientOriginalName();

    // Simpan langsung ke folder public/assets/img/konsentrasi
    $request->file('img')->move(public_path('assets/img/beasiswa'), $imgName);
}


        Beasiswas::create([
            'img' => $imgName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tombol' => $request->tombol,
        ]);

        return redirect()->route('admin.beasiswa')->with('success', 'primary')->with('message', 'Konten Beasiswa berhasil diperbarui');
        
        
    }
    public function showupdateMegamenuBeasiswa($id)
{
    $beasiswa = Beasiswas::findOrFail($id);
    return view('edit.megamenu.beasiswa.updatebeasiswa', compact('beasiswa'));
}
public function updateMegamenuBeasiswa(Request $request, $id)
{
    $request->validate([
        'tombol' => 'required',
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);

    $beasiswa = Beasiswas::findOrFail($id);

    if ($request->hasFile('img')) {
        // hapus file lama
        $oldPath = public_path('assets/img/beasiswa' . $beasiswa->img);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload baru
        $imgName = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('assets/img/beasiswa'), $imgName);
        $beasiswa->img = $imgName;
    }

    // update field lain
    $beasiswa->update([
        'tombol' => $request->tombol,
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('admin.beasiswa')->with('success', 'primary')->with('message', 'Konten Beasiswa berhasil diperbarui');
}
public function hapusMegamenuBeasiswa($id)
{
    // Cari data berdasarkan ID
    $beasiswa = Beasiswas::findOrFail($id);

    // Cek apakah file gambar ada di folder public
    $gambarPath = public_path('assets/img/beasiswa/' . $beasiswa->img);
    if (file_exists($gambarPath)) {
        unlink($gambarPath); // Hapus file fisik dari folder public
    }

    // Hapus data dari database
    $beasiswa->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.beasiswa')->with('success', 'primary')->with('message', 'Konten Beasiswa berhasil diperbarui');
}
public function showMegamenuAlurPendaftaranFormTambah()
    {
        return view('edit.megamenu.alurpendaftaran.tambahalurpendaftaran');
    }
    public function tambahMegamenuAlurPendaftaran (Request $request)
    {
        $request->validate([
            'tahap' => 'required',
            'deskripsi' => 'required',
        ]);


        Alurpendaftaran::create([
            'tahap' => $request->tahap,
            'deskripsi' => $request->deskripsi,
            'background' => $request->has('tipe') ? 'break-card' : null,
        ]);

        return redirect()->route('admin.alur-pendaftaran')->with('success', 'primary')->with('message', 'Konten Alur Pendaftaran berhasil diperbarui');
        
        
    }
    public function showupdateMegamenuAlurPendaftaran($id)
{
    $alurpendaftaran = Alurpendaftaran::findOrFail($id);
    return view('edit.megamenu.alurpendaftaran.updatealurpendaftaran', compact('alurpendaftaran'));
}
public function updateMegamenuAlurPendaftaran(Request $request, $id)
{
    $request->validate([
        'tahap' => 'required',
        'deskripsi' => 'required',
    ]);

    $alurpendaftaran = Alurpendaftaran::findOrFail($id);

    // update field lain
    $alurpendaftaran->update([
        'tahap' => $request->tahap,
        'deskripsi' => $request->deskripsi,
        'background' => $request->has('tipe') ? 'break-card' : null,
    ]);

    return redirect()->route('admin.alur-pendaftaran')->with('success', 'primary')->with('message', 'Konten Alur Pendaftaran berhasil diperbarui');
}
public function hapusMegamenuAlurPendaftaran($id)
{
    // Cari data berdasarkan ID
    $alurpendaftaran = Alurpendaftaran::findOrFail($id);

    // Hapus data dari database
    $alurpendaftaran->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.alur-pendaftaran')->with('success', 'primary')->with('message', 'Konten Alur Pendaftaran berhasil diperbarui');
}
public function showupdateMegamenuAlurPendaftaranGambar($id)
{
    $alurpendaftaran = Alurpendaftaran::findOrFail($id);
    return view('edit.megamenu.alurpendaftaran.updatealurpendaftarangambar2', compact('alurpendaftaran'));
}
public function updateMegamenuAlurPendaftaranGambar(Request $request, $id)
{
    $request->validate([
        'tahap' => 'required',
    ]);

    $alurpendaftaran = Alurpendaftaran::findOrFail($id);

    if ($request->hasFile('tahap')) {
        // hapus file lama
        $oldPath = public_path('assets/img/lainnya/pendaftaran' . $alurpendaftaran->tahap);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload baru
        $imgName = time() . '_' . $request->file('tahap')->getClientOriginalName();
        $request->file('tahap')->move(public_path('assets/img/lainnya/pendaftaran'), $imgName);
        $alurpendaftaran->tahap = $imgName;
    }

    return redirect()->route('admin.alur-pendaftaran')->with('success', 'primary')->with('message', 'Konten Alur Pendaftaran berhasil diperbarui');
}

public function showDownloadFormTambah()
    {
        return view('edit.download.tambahdownload');
    }

public function tambahDownload (Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp',
            'judul' => 'required',
            'lihat' => 'required',
        ]);

if ($request->hasFile('file')) {
    // Nama file unik
    $fileName = time() . '_' . $request->file('file')->getClientOriginalName();

    // Simpan langsung ke folder public/assets/img/download
    $request->file('file')->move(public_path('assets/sertifikat'), $fileName);
}


        Download::create([
            'file' => $fileName,
            'judul' => $request->judul,
            'lihat' => $request->lihat,
        ]);

        return redirect()->route('admin.downloads')->with('success', 'primary')->with('message', 'Konten download berhasil diperbarui');
        
        
    }
    public function showupdateDownload($id)
{
    $download = Download::findOrFail($id);
    return view('edit.download.updatedownload', compact('download'));
}
public function updateDownload(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'lihat' => 'required',
    ]);

    $download = Download::findOrFail($id);

    if ($request->hasFile('file')) {
        // hapus file lama
        $oldPath = public_path('assets/sertifikat' . $download->file);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload baru
        $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('assets/sertifikat'), $fileName);
        $download->file = $fileName;
    }

    // update field lain
    $download->update([
        'judul' => $request->judul,
        'lihat' => $request->lihat,
    ]);

    return redirect()->route('admin.downloads')->with('success', 'primary')->with('message', 'Konten Download berhasil diperbarui');
}
public function hapusDownload($id)
{
    // Cari data berdasarkan ID
    $download = Download::findOrFail($id);

    // Cek apakah file gambar ada di folder public
    $gambarPath = public_path('assets/sertifikat/' . $download->file);
    if (file_exists($gambarPath)) {
        unlink($gambarPath); // Hapus file fisik dari folder public
    }

    // Hapus data dari database
    $download->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.downloads')->with('success', 'primary')->with('message', 'Konten Download berhasil diperbarui');
}
}