@foreach($medicines as $medicine)
<div class="col-2">
    <p> {{ $medicine->id }} </p>
    <p> {{ $medicine->name }} </p>
    <p> {{ $medicine->price }} </p>
</div>
@endforeach
