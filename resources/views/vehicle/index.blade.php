@extends('admin.parent')

@section('content')

<div class="card p-3">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="container-fluid text-center">Make Your Vehicle Now🚗</h1>

    <hr>

    <div class="container d-flex justify-content-end">
        <a href="{{ route('vehicle.create') }}" class="btn btn-success m-3">Add Vehicle</a>
    </div>

    <table class="table">
        <thead>
            <th>
            <td>Vehicle</td>
            <td>Color</td>
            <td>tire_wheel</td>
            <td>machine</td>
            <td>Price</td>
            <td>Action</td>
            </th>
        </thead>
        <tbody>
            @foreach ($vehicle as $ve )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ve->name }}</td>
                <td>{{ $ve->color }}</td>
                <td>{{ $ve->tire_wheel }}</td>
                <td>{{ $ve->machine }}</td>
                <td>{{ $ve->price }}</td>

                <td>
                    <div class="row">
                    <a href="{{ route('vehicle.show', $ve->id) }}" class="btn btn-info m-3">Show Vehicle</a>
                    <a href="{{ route('vehicle.edit', $ve->id) }}" class="btn btn-warning m-3">Update Vehicle</a>
                    <form action="{{ route('vehicle.destroy', $ve->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-3">Delete</button>
                    </form>
                </div>
                </td>
                
            </tr>
            @endforeach
            
        </tbody>
    </table>


</div>

@endsection