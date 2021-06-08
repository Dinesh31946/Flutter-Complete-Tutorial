@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Product</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" action="{{ route('product.update', $product->id) }}" method="post"
                        class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="name" value="{{ $product->name }}"
                                    required="required" class="form-control" placeholder="Enter product name here...">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select required="required" name="category_id"
                                    class="form-control col-md-12 col-xs-12 required">
                                    <option value="">Category Name</option>
                                    @foreach ($categories as $category)
                                        @if ($category->category_id != null)
                                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Price<span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="first-name" name="price" value="{{ $product->price }}"
                                    required="required" class="form-control " placeholder="Enter product price here...">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Image<span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" id="first-name" name="image" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img style="height:90px; width:100px;" src="{{ asset('uploads/' . $product->image) }}"
                                    alt="Image not found.">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="In-solid"></div>
                        <div class="item form-group mt-3">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" class="btn btn-success" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
