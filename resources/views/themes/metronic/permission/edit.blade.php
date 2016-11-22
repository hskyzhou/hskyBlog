<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-settings font-green-haze"></i>
                    <span class="caption-subject bold uppercase">用户修改</span>
                </div>
                <div class="actions">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">权限名称</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-add" id="form_control_1" name="name" value="{{$info->name}}">
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">权限slug</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-add" id="form_control_1" name="slug"  value="{{$info->slug}}">
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">使用位置</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control form-add" data-show-subtext="true" name="position">
                                    <option value="module" data-icon="fa-glass icon-success" @if($info->position == "modaule") selected @endif>模块</option>
                                    <option value="page" data-icon="fa-heart icon-info" @if($info->position == "page") selected="" @endif>页面</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">状态</label>
                            <div class="col-md-10">
                                <div class="md-radio-inline">
                                    <div class="md-radio has-success">
                                        <input type="radio" id="radio53" name="status" class="md-radiobtn form-add" value="1" @if($info->status == 1) checked @endif>
                                        <label for="radio53">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>开启</label>
                                    </div>
                                    <div class="md-radio has-error">
                                        <input type="radio" id="radio54" name="status" class="md-radiobtn form-add checked" value="2" @if($info->status == 2) checked @endif>
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
                            <div class="col-md-10">
                                <textarea class="form-control form-add" rows="3" name="description">{{$info->description}}</textarea>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">model</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-add" id="form_control_1" name="model"  value="{{$info->model}}">
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn blue filter-update" data-href="{{route('permission.update', [$info->id])}}">提交</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  $('.bs-select').selectpicker({
          iconBase: 'fa',
          tickIcon: 'fa-check'
      });
</script>