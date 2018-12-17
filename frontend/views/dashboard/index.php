<div class="row">

    <!---------------------------------------------First box-------------------------------------------------->
    <div class="col-md-4">
        <div class="box box-primary home-border-top min-height-box">
            <div class="box-header with-border">
                <h3 class="box-title">Steps America</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="dashboard-Steps-top">
                <p class="text">STEP (Strategies to EB-5 Planning) was founded with the simple belief that the long and arduous path to United States citizenship need not be so. </p>
                <ul class="list">
                    <li>High Level Expertise on US Citizenship by Investment Program </li>
                    <li>Access STEP America’s streamlined & end-to-end investment consultancy services </li>
                    
                </ul>
                <p class="text">In addition to USCIS EB-5 services, STEP will actively scan the legislative horizon for expected changes to the federal USCIS immigration policies. </p>
                <?= \yii\helpers\Html::a('continue Steps',['dashboard/home'],['class'=>'Steps-links'])?>
            </div>
        </div>
    </div>


    <!---------------------------------------------Second box-------------------------------------------------->
    <div class="col-md-4">
        <div class="box box-primary home-border-top min-height-box">
            <div class="box-header with-border">
                <h3 class="box-title">Bounce Rate</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="dashboard-Bounce-Rate">
                <!--<input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">-->

                <div class="Bounce-box"> <div id="custom-color" class="big"></div></div>
                <div class="clearfix"></div>
                <div class="Success">100% Success</div>
            </div>
        </div>
    </div>

    <!---------------------------------------------Notifications-------------------------------------------------->
    <div class="col-md-4">
        <div class="box box-primary home-border-top min-height-box">
            <div class="box-header with-border">
                <h3 class="box-title">Notifications</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="products-list product-list-in-box">
                    <?php foreach ($notifications as $notification) {?>
                    <li class="item">
                        <div class="product-img">
                            <img src="<?= Yii::$app->homeUrl ?>img/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <span class="product-description">
                                <?=$notification->message?>
                            </span>
                        </div>
                    </li>
                    <?php } ?>
               
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <?= \yii\helpers\Html::a('View All Notifications',['site/notifications'],['class'=>'uppercase'])?>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
    <div class="col-md-12">
        <div class="box box-primary home-border-top Steps-Content-main">
            <div class="box-header with-border">
                <h3 class="box-title">Steps Content</h3>

                <div class="box-tools pull-right">

                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="steps-content-box">
                <div class="row">
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_1_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box"></div>
                            <h2 class="sub-head">Step 1</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_2_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box2"></div>
                            <h2 class="sub-head">Step 2</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_3_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box3"></div>
                            <h2 class="sub-head">Step 3</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_4_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box4"></div>
                            <h2 class="sub-head">Step 4</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_5_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box5"></div>
                            <h2 class="sub-head">Step 5</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_6_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box6"></div>
                            <h2 class="sub-head">Step 6</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_7_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box7"></div>
                            <h2 class="sub-head">Step 7</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_8_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box8"></div>
                            <h2 class="sub-head">Step 8</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_9_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box9"></div>
                            <h2 class="sub-head">Step 9</h2>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="steps-box <?= $user_step_details->step_10_completed == 1 ? 'steps-active' : '' ?>">
                            <div class="icon-box icon-box10"></div>
                            <h2 class="sub-head">Step 10</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
</div>
<div class="dashboard-view-application"><a href="#" class="link">VIEW APPLICATION STATUS at EGOV.USCUS.GOV</a></div>
<link rel="stylesheet" href="<?= Yii::$app->homeUrl ?>css/percircle.css">
<script src="<?= Yii::$app->homeUrl ?>js/adminlte.min.js"></script>

<?php
$step= Yii::$app->user->identity->current_step;
?>

<script>
    $(document).ready(function () {
        $("#custom-color").percircle({
            progressBarColor: "#008176",
            percent: <?=$step?>0
        });
    });
</script>
