@extends('layouts.app')



<style>
    .label-text {
        font-weight: bold;
        font-size: 1.2rem
    }

strong {
    color: #5E5293;
}
</style>


@section('content')
   <div class="container">
        <div class="col-md-12">
            <form action="{{ route('models.update', ['model' => $item->id]) }}" class='form-horizontal' method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <label class="label-text">You are editing: <strong>{{ $item->model }}</strong></label>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="label-text">New Vehicle Model</label>
                        <input type="text" class="form-control" name="model" value="{{ old('model', $item->model) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <select type="text" class="form-control" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-outline-primary">
                        Edit Model
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
