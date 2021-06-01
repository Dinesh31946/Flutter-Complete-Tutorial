@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Product Details</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" action="{{ route('product.extraDetailsStore', $id) }}" method="post"
                        class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="title"
                                    value="{{ @$product->ProductDetails->title }}" required="required"
                                    class="form-control" placeholder="Enter product title here...">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Total Items <span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="first-name" name="total_itmes" required="required"
                                    class="form-control" value="{{ @$product->ProductDetails->total_itmes }}"
                                    placeholder="Enter available total_items here...">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description <span
                                    class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <textarea name="description" placeholder="Enter product description here..."
                                    class="form-control" id="description" cols="100"
                                    rows="5">{{ @$product->ProductDetails->description }}</textarea>
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
