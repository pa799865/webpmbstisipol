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

}
