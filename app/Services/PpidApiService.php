<?php
// app/Services/PpidApiService.php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PpidApiService
{
    protected $baseUrl = 'https://ppid.sumbarprov.go.id/api';

    public function fetchCategories()
    {
        try {
            $response = Http::get("{$this->baseUrl}/category");
            
            if ($response->successful()) {
                return $response->json();
            }

            Log::error('Categories API request failed: ' . $response->status());
            return ['error' => 'Request failed: ' . $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception in fetchCategories: ' . $e->getMessage());
            return ['error' => 'Service error: ' . $e->getMessage()];
        }
    }

    public function fetchClusterData($instansiId, $categoryId, $page = 1)
    {
        try {
            $response = Http::get("{$this->baseUrl}/cluster-data", [
                'id_instansi' => $instansiId,
                'id_category' => $categoryId,
                'page' => $page
            ]);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('Cluster data API request failed: ' . $response->status());
            return ['error' => 'Request failed: ' . $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception in fetchClusterData: ' . $e->getMessage());
            return ['error' => 'Service error: ' . $e->getMessage()];
        }
    }
}