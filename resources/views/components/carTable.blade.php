<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Car Id</th>
            <th scope="col">Car Name</th>
            <th scope="col">Selling Price</th>
            <th scope="col">Downpayment</th>
            <th scope="col">Installment</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr>
            <th scope="row">{{ $car->id }}</th>
            <td>{{ $car->name }}</td>
            <td>{{ $car->selling_price }}</td>
            <td>{{ $car->downpayment }}</td>
            <td>{{ $car->installment }}</td>
            <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('car.delete', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure to delete this car?')" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Pagination --}}
<div class="mt-3">
    {{ $cars->links() }}
</div>