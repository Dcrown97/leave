<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 11:00:54 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link rel="stylesheet" href="./leave_report/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="./leave_report/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="./leave_report/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="./leave_report/assets/css/pages/login.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                         @include('flash.flash')
                        <form action="{{ route('signup') }}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <div class="">
                                    <input name="name" type="text" placeholder="Full Name"
                                        class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input name="email" type="email" placeholder="Email"
                                        class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input name="password" type="password" placeholder="Password"
                                        class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group">
								<div class="">
									<input name="password_confirmation" type="password" placeholder="Confirm Password"
										class="form-control input-height" /> </div>
							</div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button class="btn btn-round btn-primary" type="submit" name="signup" id="register">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./leave_report/assets/img/pages/signup.jpg" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- start js include path -->
    <script src="./leave_report/assets/plugins/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="./leave_report/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 11:00:54 GMT -->

</html>