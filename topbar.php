
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark bg-dark border-light">
  
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
    <?php endif; ?>
      <li  class="nav-link">
       <a ></a>
      </li>
      <li>
        <a class="nav-link"  href="./" role="button" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"> <large><b><b><i style="background: -webkit-linear-gradient(100deg, #FF00FF, #66FF00); -webkit-background-clip: text;-webkit-text-fill-color: transparent;">'Ditty'</i></b> one place for all your FEELINGS</b></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item dropdown">
            <a class="nav-link"  data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
              <span>
                <div class="d-flex badge-pill align-items-center bg-gradient-primary p-1" style="background: #337cca47 !important; bprder:50px">
                  <?php if(isset($_SESSION['login_profile_pic']) && !empty($_SESSION['login_profile_pic'])): ?>
                    <div class="rounded-circle mr-1" style="width: 25px;height: 25px;top:-5px;left: -40px">
                      <img src="assets/uploads/<?php echo $_SESSION['login_profile_pic'] ?>" class="image-fluid image-thumbnail rounded-circle" alt="" style="max-width: calc(100%);height: calc(100%);">
                    </div>
                  <?php else: ?>
                  <span class="fa fa-user mr-2" ></span>
                  <?php endif; ?>
                  <span ><b><?php echo ucwords($_SESSION['login_firstname']) ?></b></span>
                  <span class="fa fa-angle-down ml-2"></span>
                </div>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
              <button class="dropdown-item" type="button" id="my_profile"><i class="fa fa-id-card"></i> Profile</button>
              <button class="dropdown-item" type="button" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</button>
              <button class="dropdown-item" onclick="location.href='ajax.php?action=logout'"><i class="fa fa-power-off"></i> Logout</button>
            </div>
          </li>
    </ul>
  </nav>
  <script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_account.php","large")
  })
  $('#my_profile').click(function(){
    uni_modal("Profile","view_user.php?id=<?php echo $_SESSION['login_id'] ?>")
  })
  </script>
 
