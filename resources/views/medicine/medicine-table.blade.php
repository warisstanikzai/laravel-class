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
