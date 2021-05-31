@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List Category</h2>
                    {{-- <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul> --}}
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Category Name</th>
                                <th>Parent Category Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @if ($category->category_id)
                                            {{ $category->parent->name }}
                                        @else
                                            <p class="text-muted"><small>No parent category</small></p>
                                        @endif
                                    </td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            style="font-size:17px; padding:5px; color:blue"><i class="fa fa-edit"></i></a>
                                        <a href="javascript::void(0)" style="font-size:17px; padding:5px; color:red;"
                                            data-id="{{ $category->id }}" class="category_delete"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('footer-script')
    <script>
        $('.category_delete').on('click', function() {
            if (confirm('Are you sure, you want to delete this category.')) {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('category.delete') }}',
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
