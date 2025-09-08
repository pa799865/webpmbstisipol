<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\User;
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
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }
    public function showIndex() {
        $title = 'Login';
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
        return view('index', compact('stats', 'heroes', 'services', 'servicescards', 'statelemens', 'pricings', 'pricingcards', 'listbiasas', 'listspecials', 'ctas', 'ctalists', 'faqs', 'programstudyitems', 'programstudycontents'));
    }
    public function login(Request $request) {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin')->with('success','Login Berhasil!');
        }
        return back()->withErrors(['username' => 'Username atau Password']);
    }
    public function logout(Request $request)  {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success','Logout Berhasil!');
    }
}
