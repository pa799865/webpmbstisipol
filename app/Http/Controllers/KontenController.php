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

}
