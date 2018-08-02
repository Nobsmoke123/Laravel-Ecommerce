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
            <h3 class="page-title"> Create New Admins
                <small>Add New Admins</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="{{ route('save-admin') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i> Enter Personnel Details
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
                                                    <label class="col-md-2 control-label">Name:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Email
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="form-control" name="email">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Admin Level:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="level">
                                                            <option value="">Select Admin Level</option>
                                                            <option value="level 1">Level 1</option>
                                                            <option value="level 2">Level 2</option>
                                                            <option value="level 3">Level 3</option>
                                                        </select>
                                                        @if ($errors->has('level'))  
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('level') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Password :
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="password" name="password" class="form-control">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Confirm Password :
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="password" name="confirm_password" class="form-control">
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
@endsection