<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php echo $__env->make('site.include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(App::getLocale() == 'en'): ?>
<style>
    body {
        direction: ltr;
    }
</style>
<?php endif; ?>

</head>

<body class="home">

    <div id="page" class="full-page">



            <?php echo $__env->make('site.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



        <main id="content" class="site-main">
            <?php echo $__env->yieldContent('content'); ?>
        </main>


        <footer id="colophon" class="site-footer footer-primary">

            <?php echo $__env->make('site.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>


        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- header html end -->
    </div>

<?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH E:\laravel\moh\resources\views/site/include/layout.blade.php ENDPATH**/ ?>