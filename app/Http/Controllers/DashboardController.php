<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Usaha;
use App\Models\Kematian;
use App\Models\Hajat;
use App\Models\SuratTidakMampu;
use App\Models\Pik;
use App\Models\Sapi;
use App\Models\Spph;
use App\Models\Sksp;
use App\Models\Skln;
use App\Models\Skbi;
use App\Models\Skps;
use App\Models\Telahmenikah;
use App\Models\Izinsuami;
use App\Models\Ahliwaris;
use App\Models\SuratIzinOrtu;
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
            'pik' => Pik::latest()->paginate(5),
            'skk' => Kematian::latest()->paginate(5),
            's' => Sapi::latest()->paginate(5),
            'sk' => Sksp::latest()->paginate(5),
            'skln' => Skln::latest()->paginate(5),
            'skbi' => Skbi::latest()->paginate(5),
            'skps' => Skps::latest()->paginate(5),
            'telahMenikah' => Telahmenikah::latest()->paginate(5),
            'izinSuami' => Izinsuami::latest()->paginate(5),
            'ahliWaris' => Ahliwaris::latest()->paginate(5),
            'izinOrtu' => SuratIzinOrtu::latest()->paginate(5),

            // Total counts for all models
            'totalDomisili' => Domisili::count(),
            'totalUsaha' => Usaha::count(),
            'totalHajat' => Hajat::count(),
            'totalSktm' => SuratTidakMampu::count(),
            'totalPik' => Pik::count(),
            'totalKematian' => Kematian::count(),
            'totalSapi' => Sapi::count(),
            'totalSksp' => Sksp::count(),
            'totalSkln' => Skln::count(),
            'totalSkbi' => Skbi::count(),
            'totalSkps' => Skps::count(),
            'totalTelahMenikah' => Telahmenikah::count(),
            'totalIzinSuami' => Izinsuami::count(),
            'totalAhliWaris' => Ahliwaris::count(),
            'totalIzinOrtu' => SuratIzinOrtu::count(),
        ]);
    }
}
