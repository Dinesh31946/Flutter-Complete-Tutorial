@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Category</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" action="{{ route('category.update', $category->id) }}" method="post"
                        class="form-horizontal form-label-left" novalidate="">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="name" value="{{ $category->name }}"
                                    required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 col-xs-12 label-align" for="first-name">SUb
                                category of <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select required="required" name="category_id" class="form-control col-md-12 col-xs-12">
                                    <option value="" @if ($category->category_id == null) selected @endif> No Subcategory</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" @if ($category->category_id != null && $category->category_id == $categorie->id) selected @endif>{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="In-solid"></div>
                        <div class="item form-group mt-3">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
