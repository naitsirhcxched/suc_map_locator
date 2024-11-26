@extends('layouts.app')

@section('content')
    <form action="{{ route('sucs.update', ['suc' => $suc['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container p-3 border border-dark rounded-start rounded-end">
            <div class="d-flex">
                <div class="col-6">
                    <h4>Update SUC Information</h4>
                </div>
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-success btn-md">Update</button>
                    <a href="{{route('sucs.index')}}" class="btn btn-danger btn-md">Back</a>
                </div>
            </div>


            <hr>


            <div class="container border border-dark rounded-start rounded-end p-3">
                <div class="mb-2">
                    <label for="name" class="form-label fw-bold">Name of SUC</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $suc->name }}" required>
                    @error('name')
                        <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="address" class="form-label fw-bold">SUC Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $suc->address }}" required>
                    @error('address')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="latitude" class="form-label fw-bold">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $suc->latitude }}" required>
                    @error('latitude')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="longitude" class="form-label fw-bold">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $suc->longitude }}" required>
                    @error('longitude')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="website" class="form-label fw-bold">SUC Website</label>
                    <input type="text" class="form-control" id="website" name="website" value="{{ $suc->website }}" required>
                    @error('website')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="contact" class="form-label fw-bold">SUC Contact Number</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ $suc->contact }}" required>
                    @error('contact')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



        </div>
    </form>
@endsection
