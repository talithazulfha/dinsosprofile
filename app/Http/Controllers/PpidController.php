<?php

namespace App\Http\Controllers;

use App\Services\PpidApiService;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    protected $ppidApiService;

    public function __construct(PpidApiService $ppidApiService)
    {
        $this->ppidApiService = $ppidApiService;
    }

    public function informasiSertaMerta(Request $request)
    {
        $currentPage = $request->query('page', 1);
        $clusterData = $this->ppidApiService->fetchClusterData(90, 1, $currentPage);
        return view('ppid.informasi-serta-merta', compact('clusterData', 'currentPage'));
    }

    public function informasiTersediaSetiapSaat(Request $request)
    {
        $currentPage = $request->query('page', 1);
        $clusterData = $this->ppidApiService->fetchClusterData(90, 2, $currentPage);
        return view('ppid.informasi-setiap-saat', compact('clusterData', 'currentPage'));
    }

    public function informasiBerkala(Request $request)
    {
        $currentPage = $request->query('page', 1);
        $clusterData = $this->ppidApiService->fetchClusterData(90, 3, $currentPage);
        return view('ppid.informasi-berkala', compact('clusterData', 'currentPage'));
    }

    public function informasiDikecualikan(Request $request)
    {
        $currentPage = $request->query('page', 1);
        $clusterData = $this->ppidApiService->fetchClusterData(90, 6, $currentPage);
        return view('ppid.informasi-dikecualikan', compact('clusterData', 'currentPage'));
    }

    public function profilPpid(Request $request)
    {
        $currentPage = $request->query('page', 1);
        $clusterData = $this->ppidApiService->fetchClusterData(90, 8, $currentPage);
        return view('ppid.profil', compact('clusterData', 'currentPage'));
    }
}