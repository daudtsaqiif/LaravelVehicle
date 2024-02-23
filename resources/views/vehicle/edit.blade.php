@extends('admin.parent')


@section('content')

<div class="card p-4">

    <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
        @csrf
        @method('PUT')
    
        <label for="">Vehicle Name </label>
        <input type="text" value="{{ $vehicle->name }}" class="form-control" name="name">
    
        <label for="">Vehicle Color</label>
        <input type="text" value="{{ $vehicle->color }}" class="form-control" name="color">
        
        <label for="">Vehicle tire</label>
        <input type="number" value="{{ $vehicle->tire_wheel }}" class="form-control" name="tire_wheel">
        
        <label for="">Vehicle machine</label>
        <input type="text" value="{{ $vehicle->machine }}" class="form-control" name="machine">
        
        <label for="">Vehicle price</label>
        <input type="text" value="{{ $vehicle->price }}" class="form-control" name="price">
    <div class="mt-4">
        <button type="submit" class="btn btn-warning">Update</button>
        
        <a href="{{ route('vehicle.index') }}" class="btn btn-primary">Back</a>
    </div>
    </form>

</div>

@endsection