@extends('admin.layout.layout')

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Extra Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        @if ($product->category_id)
                            {{ $product->category->name }}
                        @endif
                    </td>
                    <td><span class="font-weight-bold">Rs.</span>&nbsp;{{ $product->price }}</td>
                    <td><img style="height:80px; width:100px;" src="{{ asset('uploads/' . $product->image) }}"
                            alt="Image not found.">
                    </td>
                    <td><button><a href="{{ route('product.extraDetails', $product->id) }}">
                            @if ($product->ProductDetails != null) Update @else Add
                                @endif
                            </a></button></td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}"
                            style="font-size:17px; padding:5px; color:blue"><i class="fa fa-edit"></i></a>
                        <a href="javascript::void(0)" style="font-size:17px; padding:5px; color:red;"
                            data-id="{{ $product->id }}" class="product_delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('footer-script')
    <script>
        $('.product_delete').on('click', function() {
            if (confirm('Are you sure, you want to delete this product.')) {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('product.delete') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        'id': id
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            }
        });

    </script>
@endpush
