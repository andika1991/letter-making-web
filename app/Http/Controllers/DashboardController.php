<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Usaha;
use App\Models\Kematian;
use App\Models\Hajat;
use App\Models\SuratTidakMampu;
use App\Models\Pik;
use App\Models\Spph;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'domisilis' => Domisili::latest()->paginate(5),
            'usahas' => Usaha::latest()->paginate(5),
            'hajat' => Hajat::latest()->paginate(5),
            'sktm' => SuratTidakMampu::latest()->paginate(5),
            'totalDomisili' => Domisili::count(),
            'totalUsaha' => Usaha::count(),
            'totalHajat' => Hajat::count(),
            'totalSktm' => SuratTidakMampu::count(),
        ]);
    }
}
