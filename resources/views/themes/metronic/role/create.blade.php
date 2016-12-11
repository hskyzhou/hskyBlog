@inject("presenter", "App\Presenters\Backend\RolePresenter")

@extends('themes.metronic.common.layout')

@section('css')
	{{-- <link href="{{asset('themes/metronic/global/plugins/domenu/jquery.domenu-0.95.77.css')}}" rel="stylesheet" type="text/css" /> --}}
	<link href="{{asset('themes/metronic/global/plugins/jquery-nestable/jquery.nestable.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('modal')

@endsection

@section('content')

<h3 class="page-title">
  <i class="icon-settings font-dark"></i> 
  <span class="caption-subject font-dark sbold uppercase">角色添加</span>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12">
      <!-- BEGIN VALIDATION STATES-->
      <div class="portlet light portlet-fit portlet-form bordered">
          <div class="portlet-body">
              <!-- BEGIN FORM-->
              <form action="{{route('role.store')}}" class="form-horizontal" method="post">
                  {!! csrf_field() !!}
                  <div class="form-body">
                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">角色名称</label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="" name="name">
                              <div class="form-control-focus"> </div>
                              <span class="help-block">Some help goes here...</span>
                          </div>
                      </div>
                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">slug</label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="" name="slug">
                              <div class="form-control-focus"> </div>
                              <span class="help-block">Some help goes here...</span>
                          </div>
                      </div>
                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">level</label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="" name="level">
                              <div class="form-control-focus"> </div>
                              <span class="help-block">Some help goes here...</span>
                          </div>
                      </div>

                      <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">状态</label>
                        <div class="col-md-8">
                          <div class="md-radio-inline">
                              <div class="md-radio has-success">
                                  <input type="radio" id="radio53" name="status" class="md-radiobtn form-add" value="1">
                                  <label for="radio53">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span>开启</label>
                              </div>
                              <div class="md-radio has-error">
                                  <input type="radio" id="radio54" name="status" class="md-radiobtn form-add checked" value="2">
                                  <label for="radio54">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span>关闭</label>
                              </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">描述</label>
                          <div class="col-md-8">
                              <textarea class="form-control form-add" rows="3" name="description"></textarea>
                              <div class="form-control-focus"> </div>
                          </div>
                      </div>

                      <div class="form-group form-md-line-input form-md-floating-label">
                        <label class="col-md-2 control-label" for="form_control_1">权限</label>
                      </div>
                      <div class="form-group form-md-line-input form-md-floating-label">
                        <div class="col-md-8 col-md-offset-2">
                          <table class="table table-bordered table-striped table-condensed flip-content">
                            <thead class="flip-content">
                              <th>模块</th> 
                              <th>权限</th>
                            </thead>
                            <tbody>
                              {!! $presenter->showPermissions($permissions) !!}
                            </tbody>
                          </table>
                        </div>
                      </div>

                  </div>
                  <div class="form-actions">
                      <div class="row">
                          <div class="col-md-offset-3 col-md-8">
                              <button class="btn green">保存</button>
                              <a href="javascript:;" class="btn default">清空</a>
                          </div>
                      </div>
                  </div>
              </form>
              <!-- END FORM-->
          </div>
      </div>
      <!-- END VALIDATION STATES-->
  </div>
</div>
@endsection

@section('js')
	{{-- <script src="{{asset('themes/metronic/global/plugins/jquery-nestable/jquery.nestable.js')}}" type="text/javascript"></script> --}}
	{{-- <script src="{{asset('themes/metronic/global/plugins/domenu/jquery.domenu-0.95.77.min.js')}}" type="text/javascript"></script> --}}

	<script src="{{asset('themes/metronic/global/scripts/datatable.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/metronic/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('themes/metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('themes/metronic//global/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>

	<script type="text/javascript">
    
	</script>
@endsection