@extends('medicine.master')

@section('content')
<div class="row">
    <button class="btn btn-primary" id="table-view"> Table </button>
    <button class="btn btn-primary" id="card-view"> Card </button>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="medicines">
            <table class="table table-bordered">
            @foreach($medicines as $medicine)
            <tr>
                <td> {{  $medicine->id }}</td>
                <td> {{  $medicine->name }}</td>
                <td> {{  $medicine->description }}</td>
                <td> {{  $medicine->price }}</td>
                <td> {{  $medicine->created_at }}</td>
            </tr>

            @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
