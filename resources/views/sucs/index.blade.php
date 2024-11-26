@extends('layouts.app')

@section('content')
    <div class="container-fluid border p-4">
        <table class="table table-striped border">
            <thead>
                <tr>
                    <th>Suc ID</th>
                    <th>SUC Name</th>
                    <th>SUC Address</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Website</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sucs as $suc)
                    <tr>
                        <td>{{ $suc['id'] }}</td>
                        <td>{{ $suc['name'] }}</td>
                        <td>{{ $suc['address'] }}</td>
                        <td>{{ $suc['latitude'] }}</td>
                        <td>{{ $suc['longitude'] }}</td>
                        <td>{{ $suc['website'] }}</td>
                        <td>{{ $suc['contact'] }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <div>
                                    <a href="{{ route('sucs.edit', ['suc' => $suc['id']]) }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </div>
                                <div>
                                    <form action="{{ route('sucs.destroy', ['suc' => $suc['id']]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                                <div>
                                    <a href="{{ route('sucs.map', ['id' => $suc['id']]) }}" class="btn btn-success btn-sm">
                                        <i class="bi bi-eye-fill"></i> 
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
