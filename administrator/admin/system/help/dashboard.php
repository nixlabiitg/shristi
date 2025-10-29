<?php

//Include header page
require_once('lib/header.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="content">
                            <div class="text">Total Publish Post</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20" style="font-size: 20px;">
                            <?php
                            !empty($num_new_register) ? print "$num_new_register" : print "0"; // Check New Register is here
                            ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="content">
                            <div class="text">Total Unpublish Post</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20" style="font-size: 20px;"><?php
                            !empty($accepted_query) ? print "$accepted_query" : print "0"; // Check New Register is here
                            ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="content">
                            <div class="text">Total Rejected Post</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20" style="font-size: 20px;"><?php
                            !empty($reject_query) ? print "$reject_query" : print "0"; // Check New Register is here
                            ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="content">
                            <div class="text">Total Post</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20" style="font-size: 20px;"><?php
                            !empty($all_query) ? print "$all_query" : print "0"; // Check New Register is here
                            ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        </div>
    </section>

 <?php

//Include footer page
require_once('lib/footer.php');
?>