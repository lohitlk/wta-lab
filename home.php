<?php include('db_connect.php') ?>
<!-- Info boxes -->
        <div class="row" style="">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-th-list" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;">
</i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Genres</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM genres")->num_rows; ?>
                </span>
              </div>
              
            </div>
            
          </div>
          
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-music" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Musics</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM uploads")->num_rows; ?>
                </span>
              </div>
             
            </div>
            
          </div>
          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-list" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Playlist</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM playlist")->num_rows; ?>
                </span>
              </div>
              
            </div>
           
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM users where type = 2")->num_rows; ?>
                </span>
              </div>
            
            </div>
           
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-music" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">My Musics</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM uploads where user_id ={$_SESSION['login_id']} ")->num_rows; ?>
                </span>
              </div>
             
            </div>
           
          </div>
        
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-black border border-primary">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-list" style="background: -webkit-linear-gradient(90deg, #FEE140 0%, #FA709A 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">My Playlist</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM playlist where user_id ={$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
              
            </div>
            
          </div>
          
      </div>

