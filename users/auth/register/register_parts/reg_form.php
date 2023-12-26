<form id="formAuthentication" class="mb-3" action="" method="post">
<!--<form class="mb-3" action="" method="post">-->
    <?php
    if (isset($_GET['error_reg'])) {
        echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                        There was an error in your registration, please refresh this page and try again
                  </div>';
    } elseif (isset($_GET['reg-success'])){
        echo '<div class="success-msg text-success pb-3 mb-2 text-center">
                                Registration successful, <a href="/users/auth/login">redirecting to login page</a>
                              </div>';
        ?>
        <script>
            function redirectToDashboard() {
                setTimeout(function () {
                    window.location.href = '/users/auth/login';
                }, 3000);
            }
            window.onload = redirectToDashboard;
        </script>
    <?php } ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-floating form-floating-outline mb-3">
                <input type="text" class="form-control" id="fname" name="first_name" placeholder="Enter your First Name" />
                <label for="fname">First Name</label>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-floating form-floating-outline mb-3">
                <input type="text" class="form-control" id="lname" name="last_name" placeholder="Enter your Last Name" />
                <label for="lname">Last Name</label>
            </div>
        </div>
    </div>


    <div class="form-floating form-floating-outline mb-3">
        <input
            type="text"
            class="form-control"
            id="username"
            name="user_name"
            placeholder="Enter your username"
            autofocus />
        <label for="username">Username</label>
    </div>
    <div class="form-floating form-floating-outline mb-3">
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
        <label for="email">Email</label>
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="input-group input-group-merge">
            <div class="form-floating form-floating-outline">
                <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <label for="password">Password</label>
            </div>
            <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
            <label class="form-check-label" for="terms-conditions">
                I agree to
                <a href="javascript:void(0);">privacy policy & terms</a>
            </label>
        </div>
    </div>
    <button class="btn btn-primary d-grid w-100" name="register" type="submit">Sign up</button>
</form>