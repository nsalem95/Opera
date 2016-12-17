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
        <li class="dropdown" style="float:right;">
          <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['uname'];?><span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lr animated flipInX" role="menu">
              <a class="dropdown-item" href="editprofile.php">Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
      </ul>
    </nav>