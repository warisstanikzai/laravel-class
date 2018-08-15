@extends('card.master')
@section('content')

    <h4>Edit {{ $card->name }} </h4>

    <form action="{{ url('/cards/'.$card->id) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $card->name }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </div>


    </form>

@endsection