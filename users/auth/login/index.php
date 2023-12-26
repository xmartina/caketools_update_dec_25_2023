<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
    include_once (rootDir.'config/sitePartials.php');
    include_once (rootDir.'users/auth/partials/header/login_header.php');
?>

<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card p-2">
                <!-- Logo -->
                <div class="app-brand justify-content-center mt-5">
                    <a href="/" class="app-brand-link gap-2">
                    <img src="<?= $settings->siteLogo; ?>" class="<?= $settings->logoClass; ?>">
                    </a>
                </div>
                <!-- /Logo -->

                <div class="card-body mt-2">
                    <h4 class="mb-2">Welcome to <?= siteName ?> 👋</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>

                  <?php include_once (rootDir.'users/auth/login/login_parts/form.php'); ?>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="auth-register-basic.html">
                            <span>Create an account</span>
                        </a>
                    </p>

                    <div class="divider my-4">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="d-flex justify-content-center gap-2">
                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
                            <i class="tf-icons mdi mdi-24px mdi-facebook"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
                            <i class="tf-icons mdi mdi-24px mdi-twitter"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-github">
                            <i class="tf-icons mdi mdi-24px mdi-github"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
                            <i class="tf-icons mdi mdi-24px mdi-google"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Login -->
            <img
                alt="mask"
                src="../../assets/img/illustrations/auth-basic-login-mask-light.png"
                class="authentication-image d-none d-lg-block"
                data-app-light-img="illustrations/auth-basic-login-mask-light.png"
                data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
        </div>
    </div>
</div>

<?php
    include_once (rootDir.'users/auth/partials/footer/login_footer.php');
?>