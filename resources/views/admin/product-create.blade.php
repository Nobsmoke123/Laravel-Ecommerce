@extends('layouts.admin-ui')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">LogRedeem</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Admin</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Products
                <small>Create Products</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="{{ route('admin:product-store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i> Enter product details
                                </div>
                                <div class="actions btn-set">
                                    <a href="{{ url()->previous() }}" type="button" name="back" class="btn btn-secondary-outline">
                                        <i class="fa fa-angle-left"></i> Back
                                    </a>
                                    <button class="btn btn-secondary-outline">
                                        <i class="fa fa-reply"></i> Reset
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="fa fa-check"></i> Save
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">  </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_general">
                                            <form action="#" method="POST">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Name:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="name" placeholder="Enter product Unique Name">
                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Description:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            @if ($errors->has('description'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('description') }}</strong>
                                                                </span>
                                                            @endif
                                                            <textarea class="form-control" name="description"></textarea>
                                                            <span class="help-block"> shown in product page </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Specifications:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            @if ($errors->has('details'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('details') }}</strong>
                                                                </span>
                                                            @endif
                                                            <textarea class="form-control" name="details"></textarea>
                                                            <span class="help-block">Enter product materials and design </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Category:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <select class="form-control" name="category_id" required>
                                                                <option value="none">Select Category</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Price:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="price" placeholder="Enter the Price"> 
                                                            @if ($errors->has('price'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('price') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Discounted Price:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="number" class="form-control" name="discounted_price" placeholder="Enter the % discount "> 
                                                            @if ($errors->has('discounted_price'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('discounted_price') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Quantity (Stock):
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="number" class="form-control" name="quantity" placeholder="Enter the quantity of product">
                                                            @if ($errors->has('quantity'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                                </span>
                                                            @endif 
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Image:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" name="image">
                                                            @if ($errors->has('image'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('image') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Thumbnail Image(1):
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" name="sub_image_1">
                                                            @if ($errors->has('sub_image_1'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('sub_image_1') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Thumbnail Image(2):
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" name="sub_image_2"> 
                                                             @if ($errors->has('sub_image_2'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('sub_image_2') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Thumbnail Image(3):
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" name="sub_image_3">
                                                             @if ($errors->has('sub_image_3'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('sub_image_3') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection