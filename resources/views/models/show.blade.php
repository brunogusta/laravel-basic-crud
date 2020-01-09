@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            You are viewing the model: <strong>{{ strtoupper($item->model) }}</strong>
        </div>
    </div>
@endsection
