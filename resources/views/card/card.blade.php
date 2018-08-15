@extends('card.master')
@section('content')

    <h4>Card List</h4>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Card Name</th>
            <th>Create Date</th>
            <th>Note Count</th>
            <th>Edit</th>
        </tr>
        @foreach($cards as $card)
            <tr>
                <td>{{$card->id}}</td>
                <td>{{$card->name}}</td>
                <td>{{$card->created_at}}</td>
                <td></td>
                <td><a href="{{ url('cards/'.$card->id.'/edit') }}">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection