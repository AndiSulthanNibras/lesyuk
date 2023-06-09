<?php

namespace App\Http\Controllers;

use App\Models\GuruBaru;
use App\Models\Murid;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::count();
        $guru = GuruBaru::count();

        return view('admin.beranda', compact('murid', 'guru'));
    }
}
