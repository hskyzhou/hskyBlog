@inject("presenter", "App\Presenters\Backend\ArticlePresenter")

@extends('themes.metronic.common.layout')

@section('css')
  {{-- <link href="{{asset('themes/metronic/global/plugins/domenu/jquery.domenu-0.95.77.css')}}" rel="stylesheet" type="text/css" /> --}}
  <link href="{{asset('themes/metronic/global/plugins/jquery-nestable/jquery.nestable.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('themes/metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />


  <link href="{{asset('mdeditor/css/editormd.min.css')}}" rel="stylesheet" type="text/css">
  <style type="text/css"> 
    [class*=" fa-"]:not(.fa-stack), [class*=" glyphicon-"], [class*=" icon-"], [class^=fa-]:not(.fa-stack), [class^=glyphicon-], [class^=icon-]{
      display: none;
    }
  </style>
@endsection


@section('modal')

@endsection

@section('content')

<h3 class="page-title">
  <i class="icon-settings font-dark"></i> 
  <span class="caption-subject font-dark sbold uppercase">{{trans('backend.article.create')}}</span>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12">
      @include('themes.metronic.common.flash')
      <!-- BEGIN VALIDATION STATES-->
      <div class="portlet light portlet-fit portlet-form bordered">
          <div class="portlet-body">
              <!-- BEGIN FORM-->
              <form action="{{route('article.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                  {!! csrf_field() !!}
                  <div class="form-body">
                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">{{trans('label.article.name')}}</label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="" name="name">
                              <div class="form-control-focus"> </div>
                              <span class="help-block">Some help goes here...</span>
                          </div>
                      </div>

                      <div class="form-group form-md-line-input">
                          <label class="col-md-2 control-label" for="form_control_1">{{trans('label.article.short_name')}}</label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="" name="short_name">
                              <div class="form-control-focus"> </div>
                              <span class="help-block">Some help goes here...</span>
                          </div>
                      </div>
                      
                      <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">{{trans('label.article.status')}}</label>
                        <div class="col-md-8">
                          <div class="md-radio-inline">
                              <div class="md-radio has-success">
                                  <input type="radio" id="radio53" name="status" class="md-radiobtn form-add" value="1">
                                  <label for="radio53">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span>{{trans('label.status.open')}}</label>
                              </div>
                              <div class="md-radio has-error">
                                  <input type="radio" id="radio54" name="status" class="md-radiobtn form-add checked" value="2">
                                  <label for="radio54">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span>{{trans('label.status.close')}}</label>
                              </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group last">
                          <label class="control-label col-md-2">Logo</label>
                          <div class="col-md-8">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                  <div>
                                      <span class="btn default btn-file">
                                          <span class="fileinput-new"> Select image </span>
                                          <span class="fileinput-exists"> Change </span>
                                          <input type="file" name="logo"> </span>
                                      <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">{{trans('label.article.content')}}</label>
                        <div class="col-md-8">
                          <div id="editormd">
                              <textarea style="display:none;"></textarea>
                          </div>
                        </div>
                      </div>                      
                  </div>
                  <div class="form-actions">
                      <div class="row">
                          <div class="col-md-offset-3 col-md-8">
                              <button class="btn green">{{trans('button.text.submit')}}</button>
                              <a href="javascript:;" class="btn default">{{trans('button.text.reset')}}</a>
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
  <script src="{{asset('themes/metronic/global/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('themes/metronic/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('themes/metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
    $(".select2, .select2-multiple").select2({
    });
	</script>

  <script src="{{asset('mdeditor/editormd.min.js')}}"></script>
  <script type="text/javascript">      
      var editor = editormd("editormd", {
          height  : 640,
          saveHTMLToTextarea : true,
          path : "/mdeditor/lib/" // Autoload modules mode, codemirror, marked... dependents libs path
      });
  </script>
@endsection