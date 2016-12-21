<nav class="navbar navbar-static-top navbar-light bg-faded">
      
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <img src="images/logo.png" style="height:43px;">
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right pull-right">
        <li class="dropdown" style="float:right;">
            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">&nbsp; Register <span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-lr animated flipInX" role="menu">
                <div class="col-lg-12">
                    <div class="text-center"><h3><b>Register</b></h3></div>
                <form id="ajax-register-form" action="signup.php" method="post" role="form" autocomplete="off">
                  <div class="form-group">
                    <input required type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input required type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input required type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6 col-xs-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown" style="float:right;">
                        <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">Log In<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="loginphp.php" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input required type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input required type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div style="margin-top: 2.5%;" class="col-xs-7">
                                                <!--<input type="checkbox" tabindex="3" name="remember" id="remember" value = "remember">
                                                <label for="remember"> Remember Me</label>
                                                -->
                                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </form>
                            </div>
                        </ul>
                    </li>
                </ul>
    </nav>