@section('login')
    @if ($errors->any() && $errors->has('login-error'))
        <script>
            jQuery(function() {
                $('.login').toggleClass('active');
            });

        </script>
    @endif
    <div class='login'>
        <div class='container'>
            <button type='button' class='close-btn top-right'>
                <i class="fa fa-times-circle"></i>
            </button>
            <div class='content'>
                <h2>Login</h2>
                <div class='login-form'>
                    <form id='login-form' action='login' method='POST' autocomplete="on">
                        @csrf
                        <div class='form-input'>
                            <input type='text' name='email' id='login-email' value='' required />
                            <label for='email' class='form-label'>Email</label>
                        </div>
                        <div class='form-input'>
                            <input type='password' name='password' id='login-password' value='' required />
                            <label for='password' class='form-label'>Password</label>
                        </div>
                        @if ($errors->any())
                            <div class="server-errors error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
