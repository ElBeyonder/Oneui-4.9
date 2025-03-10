<?php require 'inc/_global/config.php'; ?>
<?php
// Page specific configuration
$one->l_m_content = 'boxed';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div id="one-hero" class="bg-white">
    <div class="content content-full">
        <div class="row no-gutters justify-content-center text-center">
            <div class="col-md-8 pt-6 pb-9">
                <div class="mb-4">
                    <i class="fa fa-fw fa-circle-notch fa-2x text-primary"></i>
                </div>
                <h1 class="font-w700 mb-2">
                    OneUI Remastered <span class="font-w400"><?php echo $one->version; ?></span>
                </h1>
                <p class="font-size-lg font-w500 text-muted mb-4">
                    Create the best web apps with one super flexible UI framework. Reimagined and rebuilt for super modern projects and amazing web developers.
                </p>
                <a class="btn btn-success px-4 py-2 m-1 text-uppercase font-size-sm" data-toggle="click-ripple" href="https://1.envato.market/AVD6j">
                    <i class="fa fa-fw fa-shopping-cart font-size-base opacity-50 mr-1"></i> Purchase
                </a>
                <a class="btn btn-primary px-4 py-2 m-1 text-uppercase font-size-sm" data-toggle="click-ripple" href="be_pages_dashboard.php">
                    <i class="fa fa-fw fa-rocket font-size-base opacity-50 mr-1"></i> Live Preview
                </a>
            </div>
        </div>
    </div>    
</div>
<!-- END Hero -->

<!-- Hero After -->
<div id="one-hero-after" class="bg-body-light">
    <div class="content content-full">
        <div class="px-lg-8 text-center">
            <div class="block block-rounded overflow-hidden block-fx-shadow" style="margin-top: -200px;">
                <div class="block-content p-2">
                    <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/various/hero-promo.png" alt="Hero Promo Image">  
                </div>
            </div>
        </div>
        <div class="row py-5 text-center">
            <div class="col-6 col-md-3">
                <div class="rounded d-inline-block px-3 py-4 text-amethyst bg-amethyst-lighter">
                    <i class="fab fa-fw fa-3x fa-bootstrap"></i>
                </div>
                <p class="font-size-lg font-w600 mt-2">
                    Bootstrap 4
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded d-inline-block px-3 py-4 text-flat bg-flat-lighter">
                    <i class="fab fa-fw fa-3x fa-js"></i>
                </div>
                <p class="font-size-lg font-w600 mt-2">
                    ES6
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded d-inline-block px-3 py-4 text-smooth bg-smooth-lighter">
                    <i class="fab fa-fw fa-3x fa-sass"></i>
                </div>
                <p class="font-size-lg font-w600 mt-2">
                    Sass
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded d-inline-block px-3 py-4 text-city bg-city-lighter">
                    <i class="fab fa-fw fa-3x fa-laravel"></i>
                </div>
                <p class="font-size-lg font-w600 mt-2">
                    Laravel
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END Hero After -->

<!-- Vue Edition -->
<div id="one-vue-edition" class="bg-white">
    <div class="content content-full">
        <div class="row py-5">
            <div class="order-md-1 col-md-5 d-flex align-items-center justify-content-center py-5">
                <svg class="w-50" viewBox="0 0 261.76 226.69" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333 0 0 -1.3333 -76.311 313.34)"><g transform="translate(178.06 235.01)"><path d="m0 0-22.669-39.264-22.669 39.264h-75.491l98.16-170.02 98.16 170.02z" fill="#41b883"/></g><g transform="translate(178.06 235.01)"><path d="m0 0-22.669-39.264-22.669 39.264h-36.227l58.896-102.01 58.896 102.01z" fill="#34495e"/></g></g></svg>
            </div>
            <div class="order-md-0 col-md-7 d-flex align-items-center">
                <div>
                    <h2 class="h1 font-w700 mb-2">
                        OneUI <span class="font-w400">Vue Edition</span>
                    </h2>
                    <p class="font-size-lg font-w500 text-muted mb-4">
                        A separately sold pure Vue.js version of OneUI Remastered, built with Vue CLI, Vue Router, Vuex and BootstrapVue, is now included in the package for free!
                    </p>
                    <a class="btn btn-primary px-4 py-2 text-uppercase font-size-sm" data-toggle="click-ripple" href="https://1.envato.market/5Noyb">
                        Check it out
                        <i class="fa fa-fw fa-arrow-right font-size-base opacity-50 ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Vue Edition -->

<!-- Versions -->
<div id="one-versions" class="bg-light">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 font-w700 mb-2">
                        OneUI <span class="font-w400">Versions</span>
                    </h2>
                    <p class="font-size-lg font-w500 text-muted mb-0">
                        Inside the package you will find a Get Started version, an HTML version, a PHP version and a Laravel Starter Kit.
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 font-w700 text-body-bg-dark mb-0">
                        Solid Foundation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3 py-3">
                    <!-- Get Started Version -->
                    <div class="py-4">
                        <i class="fa fa-4x fa-burn text-default"></i>
                    </div>
                    <h4 class="mb-2">Get Started Version</h4>
                    <p class="text-muted">
                        A production ready version with boilerplate pages featuring RTL examples pages as well. It will help you rocket start your project.
                    </p>
                    <!-- END Get Started Version -->
                </div>
                <div class="col-sm-6 col-xl-3 py-3">
                    <!-- HTML Version -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-html5 text-city"></i>
                    </div>
                    <h4 class="mb-2">HTML Version</h4>
                    <p class="text-muted">
                        The abstract HTML version. This version can be used with any server side language/framework you prefer or currently working with.
                    </p>
                    <!-- END HTML Version -->
                </div>
                <div class="col-sm-6 col-xl-3 py-3">
                    <!-- PHP Version -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-php text-amethyst"></i>
                    </div>
                    <h4 class="mb-2">PHP Version</h4>
                    <p class="text-muted">
                        The abstract PHP version. This version can come really handy as a starting point if you would like to build a custom PHP application.
                    </p>
                    <!-- END PHP Version -->
                </div>
                <div class="col-sm-6 col-xl-3 py-3">
                    <!-- Laravel Starter Kit -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-laravel text-city"></i>
                    </div>
                    <h4 class="mb-2">Laravel Starter Kit</h4>
                    <p class="text-muted">
                        It features a clean Laravel installation with all OneUI assets ready to work with Laravel Mix and a few example pages to get you started.
                    </p>
                    <!-- END Laravel Starter Kit -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Versions -->

<!-- Remastered -->
<div id="one-remastered" class="bg-white">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 font-w700 mb-2">
                        OneUI <span class="font-w400">Remastered</span>
                    </h2>
                    <p class="font-size-lg font-w500 text-muted mb-0">
                        Build user friendly and modern dashboards using the latest tech. Now is the time with a best selling UI framework.
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 font-w700 text-body-bg-dark mb-0">
                        Carefully Crafted.
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Bootstrap 4 -->
                    <div class="item item-rounded bg-amethyst-lighter my-4">
                        <i class="fa fa-2x fa-fire text-amethyst"></i>
                    </div>
                    <h4 class="mb-2">Bootstrap 4</h4>
                    <p class="text-muted">
                        The latest Bootstrap version now powers OneUI <?php echo $one->version; ?> framework. Flexbox support and tons of new features are ready for you to use.
                    </p>
                    <!-- END Bootstrap 4 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Sass -->
                    <div class="item item-rounded bg-danger-light my-4">
                        <i class="fab fa-2x fa-sass text-danger"></i>
                    </div>
                    <h4 class="mb-2">Sass</h4>
                    <p class="text-muted">
                        OneUI <?php echo $one->version; ?> was built with Sass, overriding and extending Bootstrap in an intelligent way to ensure a perfect and modular workflow.
                    </p>
                    <!-- END Sass -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- ES6 -->
                    <div class="item item-rounded bg-warning-light my-4">
                        <span class="font-w700 text-warning">ES6</span>
                    </div>
                    <h4 class="mb-2">ECMAScript 6</h4>
                    <p class="text-muted">
                        OneUI <?php echo $one->version; ?> was built with ES6, the new major JavaScript release which enables us writing cleaner and better code.
                    </p>
                    <!-- END ES6 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- FontAwesome 5 -->
                    <div class="item item-rounded bg-flat-lighter my-4">
                        <i class="fab fa-2x fa-font-awesome text-flat"></i>
                    </div>
                    <h4 class="mb-2">FontAwesome 5</h4>
                    <p class="text-muted">
                        OneUI <?php echo $one->version; ?> comes packed with the latest Font Awesome version, bringing you over 1300 freshly made icons for your projects.
                    </p>
                    <!-- END FontAwesome 5 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Gulp -->
                    <div class="item item-rounded bg-city-lighter my-4">
                        <i class="fab fa-2x fa-gulp text-city"></i>
                    </div>
                    <h4 class="mb-2">Gulp 4</h4>
                    <p class="text-muted">
                        We created smart development tasks to help you focus on your projects. Just install the npm dependencies and use them out of the box.
                    </p>
                    <!-- END Gulp -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- webpack -->
                    <div class="item item-rounded bg-default-lighter my-4">
                        <i class="fa fa-2x fa-boxes text-default"></i>
                    </div>
                    <h4 class="mb-2">webpack + Babel</h4>
                    <p class="text-muted">
                        Babel makes your JavaScript code compatible with older browsers and webpack bundles your JavaScript files together.
                    </p>
                    <!-- END webpack -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Browsersync -->
                    <div class="item item-rounded bg-modern-lighter my-4">
                        <i class="fab fa-2x fa-chrome text-modern"></i>
                    </div>
                    <h4 class="mb-2">Browsersync</h4>
                    <p class="text-muted">
                        It will serve and sync your project across different browsers and also refresh them each time your save your files.
                    </p>
                    <!-- END Browsersync -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Autoprefixer -->
                    <div class="item item-rounded bg-smooth-lighter my-4">
                        <i class="fab fa-2x fa-autoprefixer text-smooth"></i>
                    </div>
                    <h4 class="mb-2">Autoprefixer</h4>
                    <p class="text-muted">
                        Peace of mind when working with Sass. Use the latest CSS syntax and Autoprefixer will auto add any required prefixes for older browsers.
                    </p>
                    <!-- END Autoprefixer -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Modular Approach -->
                    <div class="item item-rounded bg-gray-light my-4">
                        <i class="fa fa-2x fa-truck-loading text-dark"></i>
                    </div>
                    <h4 class="mb-2">Modular Approach</h4>
                    <p class="text-muted">
                        You can add your JavaScript or Sass overrides/customizations without altering the original files, making the update process an easy one.
                    </p>
                    <!-- END Modular Approach -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Improved Design -->
                    <div class="item item-rounded bg-info-light my-4">
                        <i class="fa fa-2x fa-brush text-info"></i>
                    </div>
                    <h4 class="mb-2">Improved Design</h4>
                    <p class="text-muted">
                        Small touches and improvements were introduced throughout the template. From colors to layout and fom custom elements to plugins.
                    </p>
                    <!-- END Improved Design -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- New Features -->
                    <div class="item item-rounded bg-success-light my-4">
                        <i class="fa fa-2x fa-smile-wink text-success"></i>
                    </div>
                    <h4 class="mb-2">New Features</h4>
                    <p class="text-muted">
                        Dark header, light sidebar, flexbox based layout, page overlay, header search and even more features are now available.
                    </p>
                    <!-- END New Features -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- New Features -->
                    <div class="item item-rounded bg-warning-light my-4">
                        <i class="fa fa-2x fa-star text-warning"></i>
                    </div>
                    <h4 class="mb-2">Free Update</h4>
                    <p class="text-muted">
                        We love our customers, so we are giving the Remastered version away as a free update to all existing ones! Thank you all for your support!
                    </p>
                    <!-- END New Features -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Remastered -->

<!-- Reviews -->
<div id="one-reviews" class="bg-body-light">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 font-w700 mb-2">
                        Real Customer <span class="font-w400">Reviews</span>
                    </h2>
                    <p class="font-size-lg font-w500 text-muted mb-0">
                        Check out what web developers and people in tech have written about OneUI. 
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 font-w700 text-body-bg-dark mb-0">
                        Truly Loved.
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        A combination of flexibility and ease of use. The design is beautiful, but I really value the ease in which I was able to integrate this into my development workflow and platform.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Other by <span class="font-w600">appeality</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        While reading the docs i can feel that you literally gave your heart to create this project. It is a high quality piece of work, thanks for sharing it!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Code Quality by <span class="font-w600">msagi</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is my first purchase on Themeforest and I am delighted. Everything from the design to the code is beautifully crafted and the customer support is great also. Congratulations pixelcave.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Customizability by <span class="font-w600">CaravelaThemes</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        One of the most well thought-through and comprehensive Themeforest templates available. Consistently excellent design and broad feature base. Highly Recommended!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Feature Availability by <span class="font-w600">stephenhird</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        One of the best paid for downloads I have ever made. Has so many features which have all been designed and put together absolutely brilliantly.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Design Quality by <span class="font-w600">weblid</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is hands down the best template I have ever come across. It has absolutely everything you need right there laid out and easy to find. I couldn't recommend this template enough!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Feature Availability by <span class="font-w600">dhowa021</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        After using this Admin template for 6 months...we are still delighted. This template has everything. It has obviously been designed with much care and detail. Very intuitive, Easy to use. And we're still finding functionality that we hadn't discovered before. Well done to the developer and thanks for putting your heart-and-soul into this template.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Other by <span class="font-w600">conorhannah</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is the best UI I have ever came across, this UI theme is absolutely perfect in Every Way :) Really happy with the purchase.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Other by <span class="font-w600">spmtumblr</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        I have spent two days researching admin themes. There are a couple of really good ones out there, but this one came out at the very top for me. Looks great, on both desktop and mobile, the feature set is amazing, the documentation looks very good. I haven't started implementing yet, but this deserves five stars already.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Design Quality by <span class="font-w600">dvartok</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is one of the best all-around packages I've purchased from ThemeForest. Not only is the Documentation is excellent and well-written, but the code itself is intelligently built and a pleasure to work with. Thanks for doing such great work.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Other by <span class="font-w600">rshaffaf</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        The best admin template ever, no doubt of it!!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Other by <span class="font-w600">kaladrian</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Easily the best admin template you can find.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Code Quality by <span class="font-w600">nozebra_dk</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Everything's perfect! Good design! Best performance I've ever use! And the best thing, fastest support I've seen! 5 star satisfaction!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Customer Support by <span class="font-w600">arkheacol04</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is an amazing, multi purpose, and very well designed and structured template. I rarely write a review but this template deserves the support. It is distinguished.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Design Quality by <span class="font-w600">maa83</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Long story short: I really enjoy using the templates made by pixelcave. The code is very flexible and well structured, the documentation is very good - everything you need.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Code Quality by <span class="font-w600">Master_rg</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4 invisible" data-toggle="appear">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        It's awesome, not only the design is marvelous, the code and documentation helps easy customization.
                    </p>
                    <p class="font-size-sm font-w500">
                        For Design Quality by <span class="font-w600">alperaydyn2</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="150">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Awesome !!! Thanks for a so great template !!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Feature Availability by <span class="font-w600">Markuitos</span>
                    </p>
                </div>
                <div class="col-md-4 invisible" data-toggle="appear" data-timeout="300">
                    <div class="d-inline-block px-2 py-1 rounded-lg bg-warning-light text-warning mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Awesome code, works really well, well documented!
                    </p>
                    <p class="font-size-sm font-w500">
                        For Flexibility by <span class="font-w600">corverdevelopment</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Reviews -->

<!-- Call To Action -->
<div id="one-call-to-action" class="bg-white">
    <div class="content content-full">
        <div class="py-5 py-md-8 text-center">
            <h2 class="font-w700 mb-2">
                Crafted with <i class="fa fa-fw fa-heart text-city"></i> by <a class="link-fx" href="https://1.envato.market/ydb">pixelcave</a>
            </h2>
            <p class="font-size-lg font-w500 text-muted mb-4">
                Passionate web design and development with over 14.000 customers worldwide.
            </p>
            <a class="btn btn-success px-4 py-2 m-1 text-uppercase font-size-sm" data-toggle="click-ripple" href="https://1.envato.market/AVD6j">
                <i class="fa fa-fw fa-shopping-cart font-size-base opacity-50 mr-1"></i> Purchase
            </a>
            <a class="btn btn-primary px-4 py-2 m-1 text-uppercase font-size-sm" data-toggle="click-ripple" href="be_pages_dashboard.php">
                <i class="fa fa-fw fa-rocket font-size-base opacity-50 mr-1"></i> Live Preview
            </a>
        </div>
    </div>
</div>
<!-- END Call To Action -->

<!-- Footer -->
<footer id="page-footer" class="bg-light">
    <div class="content py-5">
        <div class="row font-size-sm font-w500">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank"><?php echo $one->name . ' ' . $one->version; ?></a> &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
