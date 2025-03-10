<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-primary">
    <div class="row no-gutters bg-primary-dark-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <a class="link-fx font-w600 font-size-h2 text-white" href="index.php">
                        One<span class="font-w400">UI</span>
                    </a>
                    <p class="text-white-75 mr-xl-8 mt-2">
                        Don’t worry, we’ve got your back. You’ll be soon back to your favorite dashboard!
                    </p>
                </div>
            </div>
            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center font-size-sm">
                <p class="font-w500 text-white-50 mb-0">
                    <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Meta Info Section -->

        <!-- Main Section -->
        <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
            <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx font-w600 font-size-h3 text-dark" href="index.php">
                    One<span class="font-w400">UI</span>
                </a>
            </div>
            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <p class="mb-3">
                            <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                        </p>
                        <h1 class="font-w700 mb-2">
                            Password Reminder
                        </h1>
                        <h2 class="font-size-base text-muted">
                            Please provide your account’s email and we will send you your password.
                        </h2>
                    </div>
                    <!-- END Header -->

                    <!-- Reminder Form -->
                    <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row no-gutters justify-content-center">
                        <div class="col-sm-8 col-xl-4">
                            <form class="js-validation-reminder" action="be_pages_auth_all.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg form-control-alt py-4" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
                                </div>
                                <div class="form-group text-center mb-0">
                                    <button type="submit" class="btn btn-lg btn-alt-primary">
                                        <i class="fa fa-fw fa-envelope mr-1 opacity-50"></i> Send Mail
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Reminder Form -->
                </div>
            </div>
            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                <p class="font-w500 text-black-50 py-2 mb-0">
                    <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Main Section -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_reminder.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
