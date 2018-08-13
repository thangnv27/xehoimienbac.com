<?php
$profile_img = get_option(SHORT_NAME . "_ownerimg");
$profile_name = get_option(SHORT_NAME . "_ownername");
$profile_position = get_option(SHORT_NAME . "_ownerposition");
$profile_hotline = get_option(SHORT_NAME . "_hotline");
$profile_email = get_option(SHORT_NAME . "_email");
$profile_skype = get_option(SHORT_NAME . "_skype");

$form = do_shortcode(stripslashes_deep(get_option(SHORT_NAME . "_contactForm")));

echo <<<HTML
<div id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-5 col-xs-6" style="position: inherit">
    <section class="widget widget-profile">
        <div class="img"><img src="{$profile_img}" alt="{$profile_name}" /></div>
        <div class="txt">
            <h3>{$profile_name}</h3>
            <h4>{$profile_position}</h4>
        </div>
        <div class="row-inf">
            <div class="pull-left"><i class="fa fa-phone" aria-hidden="true"></i> SĐT</div>
            <div class="pull-right">{$profile_hotline}</div>
            <div class="clearfix"></div>
        </div>
        <div class="row-inf">
            <div class="pull-left"><i class="fa fa-envelope" aria-hidden="true"></i> Email</div>
            <div class="pull-right">{$profile_email}</div>
            <div class="clearfix"></div>
        </div>
        <div class="row-inf">
            <div class="pull-left"><i class="fa fa-skype" aria-hidden="true"></i> Skype</div>
            <div class="pull-right">{$profile_skype}</div>
            <div class="clearfix"></div>
        </div>
    </section>
            
    <section class="widget widget-contact">
        <h3 class="widget-title">
            <span class="icon"><i class="fa fa-tags" aria-hidden="true"></i></span>
            Yêu cầu gửi báo giá
        </h3>
        <div class="widget-content">
            {$form}
        </div>
    </section>
</div><!-- #sidebar -->
HTML;
?>