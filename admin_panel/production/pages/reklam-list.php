<?php

$sorgu = $db->prepare('SELECT * FROM reklamlar');
$sorgu->execute();
$reklamlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- page content -->

<style>
    .profile_details .profile_view .bottom {
        background: #F2F5F7;
        padding: 9px 0;
        border-top: 1px solid #E6E9ED;
    }
</style>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Reklam</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <?php
                        foreach ($reklamlar as $reklam) :
                        ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <h4 class="brief"><i><?= $reklam['baslik'] ?></i></h4>
                                        <div class="left col-xs-12">
                                            <h2>Nicole Pearson</h2>
                                            <p><strong>About: </strong> Web Designer / UI. </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-building"></i> Address: Teknopark </li>
                                                <li><i class="fa fa-phone"></i> Phone #: +0000000 </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <img src="images/firma.jpg" style="width: 128px;height: 128px;" alt="" class="img-circle img-responsive">
                                            <img src="images/firma.jpg" style="width: 128px;height: 128px;" alt="" class="img-circle img-responsive">
                                            <img src="images/firma.jpg" style="width: 128px;height: 128px;" alt="" class="img-circle img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 bottom text-center">
                                        <div class="col-xs-12 col-sm-6 emphasis">
                                            <p class="ratings">
                                                <a>4.0</a>
                                                <a href="#"><span class="fa fa-star"></span></a>
                                                <a href="#"><span class="fa fa-star"></span></a>
                                                <a href="#"><span class="fa fa-star"></span></a>
                                                <a href="#"><span class="fa fa-star"></span></a>
                                                <a href="#"><span class="fa fa-star-o"></span></a>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 emphasis">
                                            <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                </i> <i class="fa fa-comments-o"></i> </button>
                                            <button type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Profile
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->