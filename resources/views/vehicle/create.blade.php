@extends('admin.parent')

@section('content')

<div class="card p-4">

    {{-- error alert --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1>Create Category</h1>

    <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-floating mb-3">
            <div class="row my-3">
                <label for="floatingInput">Vehicle Name </label>
                <input type="text" class="form-control" id="floatingInput" placeholder="nama" name="name">
            </div>
            <div class="row my-3">
                <label for="floatingInput">Vehicle Color</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="color" name="color">
            </div>
            <div class="row my-3">
                <label for="floatingInput">Vehicle Tire Wheel</label>
                <input type="number" class="form-control" id="floatingInput" placeholder="tire" name="tire_wheel">
            </div>
            <div class="row my-3">
                <label for="floatingInput">Vehicle Machine</label>
                <input type="number" class="form-control" id="floatingInput" placeholder="machine" name="machine">
            </div>
            <div class="row my-3">
                <label for="floatingInput">Vehicle Price</label>
                <input type="number" class="form-control" id="floatingInput" placeholder="price" name="price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary px-5 m-2">Add</button>

        <a href="{{ route('vehicle.index') }}" class="btn btn-warning px-5 m-2">Back</a>
    </form>

</div>

@endsection