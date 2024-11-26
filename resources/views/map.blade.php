@extends('layouts.app')

@section('content')
    <div class="container border p-2">




        <div class="container-fluid d-flex">
            <div class="col-9 fs-5">
                <div for="name">SUC NAME: {{ $sucName }}</div>
                <div for="address">SUC ADDRESS: {{ $sucAddress }}</div>
                <div for="website">SUC WEBSITE: {{ $sucWebsite }}</div>
                <div for="contact">SUC CONTACT: {{ $sucContact }}</div>
            </div>

            <div class="col-3 fs-5 text-end">
                <a href="{{ route('sucs.index') }}" class="btn btn-primary"><i class="bi bi-skip-backward-fill"></i> Back to Table List</a>
            </div>
        </div>




        <div class="container p-2">
            <x-maps-leaflet :centerPoint="$centerPoint" :zoomLevel="$zoomLevel" :markers="$markers">
            </x-maps-leaflet>
        </div>

    </div>
@endsection
