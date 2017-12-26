<?php  include '../template/head.php'?>







<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold uppercase"> الاشكال المختلفة للفورم</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                    Settings <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i> Edit </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-trash-o"></i> Delete </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-ban"></i> Ban </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="i"></i> Make admin </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form">
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1">
                    <label for="form_control_1"> الاسم </label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1">
                    <label for="form_control_1">البريد الإلكتروني </label>
                    <span class="help-block"></span>
                </div>

                <div class="form-group form-md-line-input form-md-floating-label has-info">
                    <select class="form-control" id="form_control_1">
                        <option value=""></option>
                        <option value="">الخيار 1</option>
                        <option value="">الخيار 2</option>
                        <option value="">الخيار 3</option>
                        <option value="">الخيار 4</option>
                    </select>
                    <label for="form_control_1">القوائم المنسدلة  </label>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <textarea class="form-control" rows="3"></textarea>
                    <label for="form_control_1">كتابة نص </label>
                </div>





                </div>


            </div>
            <div class="form-actions noborder">


                <button type="button" class="btn green">Submit</button>
                <button type="button" class="btn default">Cancel</button>
            </div>
        </form>
    </div>
</div>




<?php  include '../template/footer.php'?>
