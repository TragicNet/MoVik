@section('login')
    <div class='login'>
        <div class='container'>
            <button type='button' class='close-btn top-right'>x</button>
            <div class='content'>
                <h2>Login</h2>
                <div class='login-form'>
                    <form id='login-form' action='' method='POST' autocomplete="off">
                        <div class='form-group form-input'>
                            <input type='text' name='name' id='login-name' value='' required />
                            <label for='name' class='form-label'>Name</label>
                        </div>
                        <div class='form-group form-input'>
                            <input type='password' name='password' id='login-password' value='' required />
                            <label for='password' class='form-label'>Password</label>
                        </div>
                        <br>
                        <div class='form-submit'>
                            <input type='submit' value='Login' class='submit' id='login-submit' name='submit' />
                        </div>
                        <br>
                        <div class='links'>
                            <a href='javascript:;' class="register-btn">Register</a>
                            <a href=''>Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@show
</div>
