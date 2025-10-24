<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Cta;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Programstudycontent;
use App\Models\Programstudyitem;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
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
    }
}
