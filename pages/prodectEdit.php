
<?php  include '../template/head.php'?>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" action="#">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>تعديل منتج
                    </div>
                    <div class="actions btn-set">
                        <button type="button" name="back" class="btn default"><i class="fa fa-angle-right"></i> رجوع </button>
                        <button class="btn default"><i class="fa fa-reply"></i> إعادة تعيين </button>
                        <button class="btn green"><i class="fa fa-check"></i> حفظ </button>
                        <button class="btn green"><i class="fa fa-check-circle"></i> حفظ وإستمرار </button>
                        <div class="btn-group">
                            <a class="btn yellow dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-share"></i> اخرى <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        تكرار </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        مسح  </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        طباعة </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">






                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab">
                                    عام </a>
                            </li>
                            <li>
                                <a href="#tab_meta" data-toggle="tab">
                                    وصف  </a>
                            </li>
                            <li>
                                <a href="#tab_images" data-toggle="tab">
                                    الصور </a>
                            </li>
                            <li>
                                <a href="#tab_reviews" data-toggle="tab">
                                    مراجعة <span class="badge badge-success">
											3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab_history" data-toggle="tab">
                                    التاريخ </a>
                            </li>
                        </ul>
                        <div class="tab-content no-space">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">الاسم: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="product[name]" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">الوصف: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="product[description]"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">وصف قصير  : <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="product[short_description]"></textarea>
                                            <span class="help-block">
														كما هو موضح في قائمة المنتجات </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">الاقسام : <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="form-control height-auto">
                                                <div class="scroller" style="height:275px;" data-always-visible="1">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <label><input type="checkbox" name="product[categories][]" value="1" checked>رجالي</label>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">حذاء</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">ملابس </label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">اكسسوارات </label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">الأزياء </label>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="product[categories][]" value="1">قمصان كرة القدم</label>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">الدوري الممتاز</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">دوري كرة القدم</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">دوري الدرجة الاولى الايطالي</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">الدوري الالماني</label>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="product[categories][]" value="1">العلامات التجارية
                                                            </label>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1"> اديداس</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">نايكي</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">Airwalk</label>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">Kangol</label>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="help-block">
														حدد فئة واحدة أو أكثر </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">التاريخ المتاح: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                <input type="text" class="form-control" name="product[available_from]">
                                                <span class="input-group-addon">
															الي </span>
                                                <input type="text" class="form-control" name="product[available_to]">
                                            </div>
                                            <span class="help-block">
														نطاق التاريخ المتاح. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">وحدة حفظ الأوراق المالية: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="product[sku]" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">السعر: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="product[price]" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">فئة الضرائب: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="product[tax_class]">
                                                <option value="">اختار...</option>
                                                <option value="1">فارغ</option>
                                                <option value="0">سلع خاضعة للضريبة</option>
                                                <option value="0">الشحن</option>
                                                <option value="0">السودان </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Status: <span class="required">
													* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="product[status]">
                                                <option value="">اختار...</option>
                                                <option value="1">نشرت</option>
                                                <option value="0">غير منشورة  </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_meta">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">العنوان الوصفي :</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control maxlength-handler" name="product[meta_title]" maxlength="100" placeholder="">
                                            <span class="help-block">
														max 100 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="product[meta_keywords]" maxlength="1000"></textarea>
                                            <span class="help-block">
														max 1000 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="product[meta_description]" maxlength="255"></textarea>
                                            <span class="help-block">
														max 255 chars </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab_images">

                                <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10" style="position: relative;">
                                    <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow" style="z-index: 1;">
                                        <i class="fa fa-plus"></i> Select Files </a>
                                    <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
                                        <i class="fa fa-share"></i> Upload Files </a>
                                    <div id="html5_1c24f9eq118b512ov1ub5184l38p3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1c24f9eq118b512ov1ub5184l38p3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/gif,image/png,application/zip"></div></div>
                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <th width="8%">
                                            Image
                                        </th>
                                        <th width="25%">
                                            Label
                                        </th>
                                        <th width="8%">
                                            Sort Order
                                        </th>
                                        <th width="10%">
                                            Base Image
                                        </th>
                                        <th width="10%">
                                            Small Image
                                        </th>
                                        <th width="10%">
                                            Thumbnail
                                        </th>
                                        <th width="10%">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="../assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                <img class="img-responsive" src="../assets/admin/pages/media/works/img1.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][1][image_type]" value="1"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][1][image_type]" value="2"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span class="checked"><input type="radio" name="product[images][1][image_type]" value="3" checked=""></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn default btn-sm">
                                                <i class="fa fa-times"></i> Remove </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                <img class="img-responsive" src="../assets/admin/pages/media/works/img2.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][2][image_type]" value="1"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span class="checked"><input type="radio" name="product[images][2][image_type]" value="2" checked=""></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][2][image_type]" value="3"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn default btn-sm">
                                                <i class="fa fa-times"></i> Remove </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                <img class="img-responsive" src="../assets/admin/pages/media/works/img3.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span class="checked"><input type="radio" name="product[images][3][image_type]" value="1" checked=""></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][3][image_type]" value="2"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <div class="radio"><span><input type="radio" name="product[images][3][image_type]" value="3"></span></div>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn default btn-sm">
                                                <i class="fa fa-times"></i> Remove </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab_reviews">
                                <div class="table-container">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_reviews">
                                        <thead>
                                        <tr role="row" class="heading">
                                            <th width="5%">
                                                Review&nbsp;#
                                            </th>
                                            <th width="10%">
                                                Review&nbsp;Date
                                            </th>
                                            <th width="10%">
                                                Customer
                                            </th>
                                            <th width="20%">
                                                Review&nbsp;Content
                                            </th>
                                            <th width="10%">
                                                Status
                                            </th>
                                            <th width="10%">
                                                Actions
                                            </th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="product_review_no">
                                            </td>
                                            <td>
                                                <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
                                                    <span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                </div>
                                                <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
                                                    <span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="product_review_customer">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="product_review_content">
                                            </td>
                                            <td>
                                                <select name="product_review_status" class="form-control form-filter input-sm">
                                                    <option value="">Select...</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="approved">Approved</option>
                                                    <option value="rejected">Rejected</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="margin-bottom-5">
                                                    <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                                </div>
                                                <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_history">
                                <div class="table-container">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_history">
                                        <thead>
                                        <tr role="row" class="heading">
                                            <th width="25%">
                                                Datetime
                                            </th>
                                            <th width="55%">
                                                Description
                                            </th>
                                            <th width="10%">
                                                Notification
                                            </th>
                                            <th width="10%">
                                                Actions
                                            </th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td>
                                                <div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
                                                    <span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                </div>
                                                <div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
                                                    <span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To"/>
                                            </td>
                                            <td>
                                                <select name="product_history_notification" class="form-control form-filter input-sm">
                                                    <option value="">Select...</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="notified">Notified</option>
                                                    <option value="failed">Failed</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="margin-bottom-5">
                                                    <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                                </div>
                                                <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END PAGE CONTENT-->



<?php  include '../template/footer.php'?>