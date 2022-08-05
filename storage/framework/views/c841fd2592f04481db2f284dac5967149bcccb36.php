<div class="top-footer">
    <div class="container">
        <div class="upper-footer">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <aside class="widget widget_text">
                        <div class="footer-logo">
                            <h3 class="widget-title"><?php echo e(trans('site_trans.Communication')); ?></h3>

                            
                        </div>

                    </aside>
                </div>


                <div class="col-lg-8 col-md-8">
                    <aside class="widget">
                        
                        <ul style="
                    display: flex;
                ">
                            <li style="margin: 0 0px 4px 20px;font-size: 26px;">
                                <a href="https://www.facebook.com/<?php echo e($setting->facebook); ?>" target="_blank"><span class="semi-bold"><i
                                            class="fa-brands fa-facebook"></i></span></a>
                            </li>
                            <li style="margin: 0 0px 4px 20px;font-size: 26px;">
                                <a href="https://www.instagram.com/basmaa_volunteer/?<?php echo e($setting->instagram); ?>=" target="_blank"><span class="semi-bold"><i
                                            class="fa-brands fa-instagram"></i></span></a>
                            </li>
                            <li style="margin: 0 0px 4px 20px;font-size: 26px;">
                                <a href="https://twitter.com/Basmaa_vol?t=<?php echo e($setting->twitter); ?>" target="_blank"><span class="semi-bold"><i
                                            class="fa-brands fa-twitter"></i></span></a>
                            </li>
                            <li style="margin: 0 0px 4px 20px;font-size: 26px;">
                                <a href="mailto:<?php echo e($setting->phone); ?>" target="_blank"><span class="semi-bold"><i
                                            class="fa-regular fa-at"></i></span></a>
                            </li>
                            <li style="margin: 0 0px 4px 20px;font-size: 26px;">
                                <a href="https://wa.me/+972<?php echo e($setting->email); ?>" target="_blank"><span class="semi-bold"><i
                                            class="fa-brands fa-whatsapp"></i></span></a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="bottom-footer">
    <div class="container">

        <div class="copy-right text-center">
            <?php echo e(trans('site_trans.Rights')); ?> <?php echo e($setting->title); ?> &copy; <?php echo e(date('Y')); ?>

        </div>
    </div>
</div>
<?php /**PATH E:\laravel\moh\resources\views/site/include/footer.blade.php ENDPATH**/ ?>