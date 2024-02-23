@extends('admin.parent')


@section('content')

<div class="card p-4">
    <label for="">ID Category</label>
    <input type="text" value="{{ $vehicle->id }}" class="form-control" disabled>

    <label for="">Vehicle Name </label>
    <input type="text" value="{{ $vehicle->name }}" class="form-control" disabled>

    <label for="">Vehicle Color</label>
    <input type="text" value="{{ $vehicle->color }}" class="form-control" disabled>
    
    <label for="">Vehicle tire</label>
    <input type="text" value="{{ $vehicle->tire_wheel }}" class="form-control" disabled>
    
    <label for="">Vehicle machine</label>
    <input type="text" value="{{ $vehicle->machine }}" class="form-control" disabled>
    
    <label for="">Vehicle price</label>
    <input type="text" value="${{ $vehicle->price }}" class="form-control" disabled>

    <a href="{{ route('vehicle.index') }}" class="btn btn-primary mt-5">Back</a>

</div>


@endsection