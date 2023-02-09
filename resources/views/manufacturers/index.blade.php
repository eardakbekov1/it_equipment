@extends('manufacturers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Index</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('manufacturers.create') }}">Create New Manufacturer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
        @foreach ($manufacturers as $manufacturer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $manufacturer->name }}</td>
                <td>
                    <form action="{{ route('manufacturers.destroy',$manufacturer->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('manufacturers.show',$manufacturer->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('manufacturers.edit',$manufacturer->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $manufacturers->links() !!}

@endsection
