@extends('layouts.main')
@section('title', 'Profil PPID')
@section('content')
<div class="container">
    <h2 class="mb-4">Profil PPID</h2>
    
    {{-- Cluster Data Display --}}
    <div class="cluster-data">
        @if(isset($clusterData['error']))
            <p>Error: {{ $clusterData['error'] }}</p>
        @elseif(isset($clusterData['data']) && count($clusterData['data']) > 0)
            <div class="list-group">
                @foreach($clusterData['data'] as $item)
                    <div class="list-group-item">
                        <h5>{{ $item['title'] ?? 'No Title' }}</h5>
                        <p>{{ $item['description'] ?? 'No Description' }}</p>
                        @if(isset($item['file_url']))
                            <a href="{{ $item['file_url'] }}" class="btn btn-primary btn-sm" target="_blank">
                                Download File
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if(isset($clusterData['meta']))
                <nav class="mt-4">
                    <ul class="pagination">
                        @for($i = 1; $i <= $clusterData['meta']['last_page']; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                <a class="page-link" 
                                   href="{{ route('ppid.profil', ['page' => $i]) }}">
                                    {{ $i }}
                                </a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            @endif
        @else
            <p>No data available</p>
        @endif
    </div>

    @if(config('app.debug'))
        <div style="margin-top: 20px; padding: 10px; background: #f0f0f0;">
            <pre>{{ print_r($clusterData, true) }}</pre>
        </div>
    @endif
</div>
@endsection