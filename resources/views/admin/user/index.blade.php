@extends('admin.layout.layout')

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sr. No.</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Created Date</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->role }}</td>
                    <td class="text-center">{{ $user->created_at }}</td>
                    <td class="text-center">
                        {{-- <a href="{{ route('product.edit', $user->id) }}"
                            style="font-size:17px; padding:5px; color:blue"><i class="fa fa-edit"></i></a> --}}
                        <a href="javascript::void(0)" style="font-size:17px; padding:5px; color:red;"
                            data-id="{{ $user->id }}" class="user_delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('footer-script')
    <script>
        $('.user_delete').on('click', function() {
            if (confirm('Are you sure, you want to delete this user.')) {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('user.delete') }}',
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
