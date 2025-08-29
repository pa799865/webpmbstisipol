<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Stats;
use App\Models\Ctalist;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Listbiasa;
use App\Models\Statelemen;
use App\Models\Listspecial;
use App\Models\Pricingcard;
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
        $title = "Edit Konten Home Hero";
        return view('edit.home.faq', compact('title', 'faqs'));
    }
    public function statsShow(Stats $stats)
    {
        return view('index', compact('stats'));
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

    return redirect()->route('admin')->with('success', 'Tiket berhasil dibuat');
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

    if ($request->hasFile('img_6_visual')) {
        $this->updateServicesImg($request);
    }

    return redirect()->route('admin')->with('success', 'Tiket berhasil dibuat');
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
    // misalnya kamu tahu id yang dipakai 5
    $service = Services::find( $request->input('img_6_id', 6) ); // bisa juga hardcode kalau fix id=5
    if ($service) {
        if ($request->hasFile("img_{$service->id}_visual")) {
            $file = $request->file("img_{$service->id}_visual");
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/services'), $filename);

            // hapus file lama kalau ada
            if ($service->content && file_exists(public_path('assets/img/services/' . $service->content))) {
                unlink(public_path('assets/img/services/' . $service->content));
            }

            $service->update([
                'content' => $filename,
            ]);
        }
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

    return redirect()->route('admin')->with('success', 'Tiket berhasil dibuat');
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

    return redirect()->route('admin')->with('success', 'Tiket berhasil dibuat');
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

    return redirect()->route('admin')->with('success', 'Tiket berhasil dibuat');
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
            if ($pricingCard) {
                if ($pricingcardData['tipe'] === null) {
                    $pricingcardData['tipe'] = 'normal';
                }
                $pricingCard->update([
                    'badge' => $pricingcardData['badge'],
                    'title'  => $pricingcardData['title'],
                    'description'  => $pricingcardData['description'],
                    'price'  => $pricingcardData['price'],
                    'period'  => $pricingcardData['period'],
                    'tipe'  => $pricingcardData['tipe'],
                ]);
            }
        } else {
            // insert data baru
            Pricingcard::create([
               'badge' => $pricingcardData['badge'],
                    'title'  => $pricingcardData['title'],
                    'description'  => $pricingcardData['description'],
                    'price'  => $pricingcardData['price'],
                    'period'  => $pricingcardData['period'],
                    'tipe'  => $pricingcardData['tipe'],
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
    if ($request->hasFile('img_3_visual')) {
    $this->updateCtasImg($request);
}



    return redirect()->route('admin')->with('success', 'CTA berhasil diperbarui');
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

private function updateCtasImg(Request $request, $id)
{
    $cta = Cta::find($id);
    if ($cta && $request->hasFile('img_cta_visual')) {
        $file = $request->file('img_cta_visual');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/misc'), $filename);

        if ($cta->content && file_exists(public_path('assets/img/misc/' . $cta->content))) {
            unlink(public_path('assets/img/misc/' . $cta->content));
        }

        $cta->update([
            'content' => $filename,
        ]);
    }
}


}
