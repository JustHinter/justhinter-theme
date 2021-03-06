<?php
/* Template Name: Login Page */


get_header(); ?>
	<div class="container maininnercontent">
        <!-- Where all the magic happens -->
        <!-- LOGIN FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">Login</div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form class="text-left" name="loginform" id="loginform" action="http://justhinter.com/wp-login.php" method="post">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="lg_username" class="sr-only">Username</label>
                                <input type="text" class="form-control" id="lg_username" name="log" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="lg_password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="lg_password" name="pwd" placeholder="password">
                            </div>
                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" id="lg_remember" name="lg_remember" value="forever">
                                <label for="lg_remember">remember</label>
                            </div>
                        </div>
                        <button type="submit" name="wp-submit" id="wp-submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                        <input type="hidden" name="redirect_to" value="http://justhinter/login-page/" />
                    </div>
                    <div class="etc-login-form">
                        <p>forgot your password? <a href="#">click here</a></p>
                        <p>new user? <a href="#">create new account</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>

        <!-- REGISTRATION FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">register</div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="register-form" class="text-left">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="reg_username" class="sr-only">Email address</label>
                                <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="reg_password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                            </div>

                            <div class="form-group">
                                <label for="reg_email" class="sr-only">Email</label>
                                <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="reg_fullname" class="sr-only">Full Name</label>
                                <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
                            </div>

                            <div class="form-group login-group-checkbox">
                                <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                                <label for="male">male</label>

                                <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                                <label for="female">female</label>
                            </div>

                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                <label for="reg_agree">i agree with <a href="#">terms</a></label>
                            </div>
                        </div>
                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="etc-login-form">
                        <p>already have an account? <a href="#">login here</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>

        <!-- FORGOT PASSWORD FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">forgot password</div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="forgot-password-form" class="text-left">
                    <div class="etc-login-form">
                        <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
                    </div>
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="fp_email" class="sr-only">Email address</label>
                                <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
                            </div>
                        </div>
                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="etc-login-form">
                        <p>already have an account? <a href="#">login here</a></p>
                        <p>new user? <a href="#">create new account</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>
	</div>


<script type="text/javascript">
    function hide_header() {
        document.querySelector('.site-head').style.height = '40%';
    }

    window.onload = hide_header();
</script>
<?php get_footer(); ?>