@section('login')
    <div class="login active">
        <div class="container">
            <button type="button" class="close-button top-right">x</button>
            <div class="login-content">
                <div>Login</div>
                <div class="registration-form">
                    <form id="registration-form">
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required />
                            <label for="name" class="form-label">Name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Phone number</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="email" id="email" value="" required />
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="address" id="address" value="" required />
                            <label for="address" class="form-label">Address</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@show
</div>
