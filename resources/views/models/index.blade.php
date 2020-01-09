@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-15">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Model</th>
                    <th scope="col">Methods</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ strtoupper($item->model) }}</td>
                        <td>
                            <a href="{{ route('models.show', ['model' => $item->id]) }}">Show</a>
                            <a href="{{ route('models.edit', ['model' => $item->id]) }}">Edit</a>
                            <a href="{{ route('models.destroy', ['model' => $item->id]) }}">Delete</a>
                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
