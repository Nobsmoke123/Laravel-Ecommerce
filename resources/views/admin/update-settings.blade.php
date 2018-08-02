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
            <h3 class="page-title"> System Settings
                <small>Update Settings Settings</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="{{ route('admin:update-settings') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i> Update Settings Details
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
                                                    <label class="col-md-2 control-label"> Coupon:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" value="{{ $settings[0]->coupon }}" class="form-control" name="coupon" placeholder="Enter coupon">
                                                            @if ($errors->has('coupon'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('coupon') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Dollar to Naira:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="number" value="{{ $settings[0]->dollar_to_naira }}" class="form-control" name="dollar_conversion" placeholder="Enter Dollar to Naira Conversion">
                                                            @if ($errors->has('dollar_conversion'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('dollar_conversion') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Euro to Naira:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="number" value="{{ $settings[0]->euro_to_naira }}" class="form-control" name="euro_conversion" placeholder="Enter Euro to Naira Conversion">
                                                            @if ($errors->has('euro_conversion'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('euro_conversion') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> VAT:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="number" value="{{ $settings[0]->vat }}" class="form-control" name="vat" placeholder="Enter VAT">
                                                            @if ($errors->has('vat'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('vat') }}</strong>
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
@endsection