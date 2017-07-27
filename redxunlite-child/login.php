<?php
/* Template Name: Login Page */


get_header(); ?>
	<div class="container maininnercontent">
		<div class="row">
            <div class="col-md-4">
                <h2>Login</h2>
                <form name="loginform" id="loginform" action="http://localhost:8080/wp-login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="log"  size="20" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="rememberme" id="rememberme" value="forever" />
                            Remember me
                        </label>
                    </div>
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary" value="Log In" />
                    <input type="hidden" name="redirect_to" value="http://localhost:8080/index.php/login-page/" />
                </form>
            </div>
        </div>
	</div>


<script type="text/javascript">
    function hide_header() {
        document.querySelector('.site-head').style.height = '40%';
    }

    window.onload = hide_header();
</script>
<?php get_footer(); ?>