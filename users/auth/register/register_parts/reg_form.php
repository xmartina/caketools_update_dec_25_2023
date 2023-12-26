<form id="formAuthentication" class="mb-3" action="index.html" method="GET">
    <div class="form-floating form-floating-outline mb-3">
        <input
            type="text"
            class="form-control"
            id="username"
            name="username"
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
    <button class="btn btn-primary d-grid w-100">Sign up</button>
</form>