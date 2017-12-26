<?php  include '../template/head.php'?>



<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> الاشكال المختلفة للفورم
        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title="">
            </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
            </a>
            <a href="" class="reload" data-original-title="" title="">
            </a>
            <a href="" class="remove" data-original-title="" title="">
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <form class="form-horizontal" role="form">
            <div class="form-body">



                <div class="form-group">
                    <label class="col-md-3 control-label">الاسم  </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">قائمة منسدلة </label>
                    <div class="col-md-9">
                        <select class="form-control input-lg">
                            <option>الخيار 1</option>
                            <option>الخيار 2</option>
                            <option>الخيار 3</option>
                            <option>الخيار 4</option>
                            <option>الخيار 5</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label class="col-md-3 control-label">النوع   </label>
                    <br><div class="col-md-9">

                        <input type="radio" name="type" class="form-control"> زكر
                       <input type="radio" name="type" class="form-control"> انثى
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label">الهوايات    </label>
                    <br><div class="col-md-9">

                        <br> <br> <input type="checkbox" name="type1" class="form-control">      كرة قدم
                        <br><br> <input type="checkbox" name="type2" class="form-control">القراءة والاطلاع
                        <br><br> <input type="checkbox" name="type3" class="form-control">السفر
                        <br><br> <input type="checkbox" name="type4" class="form-control">كرة اليد
                    </div>
                </div>




            </div>
            <div class="form-actions right1">
                <button type="button" class="btn default">Cancel</button>
                <button type="submit" class="btn green">Submit</button>
            </div>
        </form>
    </div>
</div>







<?php  include '../template/footer.php'?>
