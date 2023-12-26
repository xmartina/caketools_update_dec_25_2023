<form class="mb-3" action="" method="post" >
    <?php
        if (isset($_GET['wrong-pass'])) {
            echo '<div class="error-msg text-danger pb-2">
                        your password is incorrect, please check and try again
                  </div>';
        } elseif (isset($_GET['no-user'])) {
            echo '<div class="error-msg text-danger pb-2">
                                Sorry this user was not found, please check and try again
                              </div>';
        } elseif (isset($_GET['login-success'])){
            echo '<div class="success-msg text-success pb-2">
                                login successful, <a href="/user/dashboard">redirecting to dashboard</a>
                              </div>';
        }
    ?>
    <div class="form-floating form-floating-outline mb-3">
        <input
            type="text"
            class="form-control"
            id="email"
            name="user_input"
            placeholder="Enter your email or username"
            autofocus />
        <label for="email">Email or Username</label>
    </div>
    <div class="mb-3">
        <div class="form-password-toggle">
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
    </div>
    <div class="mb-3 d-flex justify-content-between">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
        <a href="<?= siteUrl ?>users/auth/forgotten_pass" class="float-end mb-1">
            <span>Forgot Password?</span>
        </a>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit" name="login">Sign in</button>
    </div>
</form>