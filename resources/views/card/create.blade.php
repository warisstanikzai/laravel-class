@extends('card.master')
@section('content')

    <h4>Create a new Card</h4>

    <form action="{{ url('/cards') }}" method="post">
        @csrf
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                <input type="text" name="user_id" class="form-control">
            </div>
            <div class="form-group">

                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </div>


    </form>

@endsection