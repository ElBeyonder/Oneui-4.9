<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="hero">
    <div class="hero-inner text-center">
        <div class="bg-white">
            <div class="content content-full overflow-hidden">
                <div class="py-4">
                    <!-- Error Header -->
                    <h1 class="display-1 font-w600 text-flat">403</h1>
                    <h2 class="h4 font-w400 text-muted mb-5">We are sorry but you do not have permission to access this page..</h2>
                    <!-- END Error Header -->

                    <!-- Search Form -->
                    <form action="be_pages_generic_search.php" method="POST">
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 col-xl-3">
                                <div class="input-group input-group-lg">
                                    <input class="form-control form-control-alt" type="text" placeholder="Search application..">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-alt-primary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
            </div>
        </div>
        <div class="content content-full text-muted">
            <!-- Error Footer -->
            <p class="mb-1">
                Would you like to let us know about it?
            </p>
            <a class="link-fx" href="javascript:void(0)">Report it</a> or <a class="link-fx" href="be_pages_error_all.php">Go Back to Dashboard</a>
            <!-- END Error Footer -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>