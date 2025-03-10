<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$one->l_header_fixed = true;
$one->l_header_dark  = false;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Header <small class="font-size-base font-w400 text-muted">Fixed Light</small>
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Layout</li>
                    <li class="breadcrumb-item">Header</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Fixed - Light</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-content text-center">
            <p>
                A fixed, light themed Header.
            </p>
        </div>
    </div>

    <!-- Dummy content -->
    <div class="block block-rounded">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
