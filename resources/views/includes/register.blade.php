@section('register')
    @if ($errors->any())
        <script>
            jQuery(function() {
                $('.register').toggleClass('active');
            });

        </script>
    @endif
    <div class='register'>
        <div class='container'>
            <button type='button' class='close-btn top-right'>
                <i class="fa fa-times-circle"></i>
            </button>
            <div class='content'>
                <h2>Register</h2>
                <div>
                    <form class='registration-form' id='registration-form' action='customer_submit' method='POST'
                        autocomplete="off">
                        @csrf
                        <div class='form-input'>
                            <input type='text' name='name' id='name' value='' required />
                            <label for='name' class='form-label'>Name</label>
                        </div>
                        <div class='form-input'>
                            <input type='text' name='phone' id='phone' value='' required />
                            <label for='phone' class='form-label'>Phone number</label>
                        </div>
                        <div class='form-input'>
                            <input type='text' name='email' id='email' value='' required />
                            <label for='email' class='form-label'>Email</label>
                        </div>
                        <div class='form-input'>
                            <input type='text' name='address' id='address' value='' required />
                            <label for='address' class='form-label'>Address</label>
                        </div>
                        <div class='form-input'>
                            <input type='password' name='password' id='password' value='' required />
                            <label for='password' class='form-label'>Password</label>
                        </div>
                        <div class='form-input'>
                            <input type='password' name='password_confirmation' id='password_confirmation' value=''
                                required />
                            <label for='password_confirmation' class='form-label'>Confirm Password</label>
                        </div>
                        <div class="errorTxt"></div>
                        @if ($errors->any())
                            <div class="errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br>
                        <div class='form-submit'>
                            <input type='submit' value='Register' class='submit' id='submit' name='submit' />
                        </div>
                        <br>
                        <div class="links">
                            <a href="javascript:;" class="login-btn">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@show
</div>
