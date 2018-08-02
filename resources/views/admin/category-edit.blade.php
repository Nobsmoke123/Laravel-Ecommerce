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
            <h3 class="page-title"> Category
                <small>Edit Category</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="{{ route('admin:category-update',['id'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i> Update Category Name
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
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{ $category->name }}" name="name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Image
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="image">
                                                        @if ($errors->has('image'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('image') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Icon:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{ $category->icon }}" name="icon">
                                                        @if ($errors->has('icon'))  
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('icon') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Description:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{ $category->description }}" name="description">
                                                        @if ($errors->has('description'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions btn-set text-right">
                                                <a href="{{ url()->previous() }}" type="button" name="back" class="btn btn-secondary-outline">
                                                    <i class="fa fa-angle-left"></i> Back
                                                </a>
                                                <button class="btn btn-secondary-outline">
                                                    <i class="fa fa-reply"></i> Reset
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check"></i> Save
                                                </button>
                                            </div>
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
     <script>
       
    </script> 
@endsection