  <aside class="main-sidebar sidebar-dark-navy bg-dark elevation-4">
    <div class="dropdown ">
   	<a href="javascript:void(0)" class="brand-link bg-black border-light" data-toggle="dropdown" aria-expanded="true">
        <span class="brand-image img-circle elevation-3 d-flex justify-content-center align-items-center text-white font-weight-500" style="width: 38px;height:50px;font-size: 2rem; background: -webkit-linear-gradient(#eee, #66FF00); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b><i class="fa fa-headphones text-gradient"></i></b></span>
        <span class="brand-text font-weight-bold  text-gradient-primary" style="background: -webkit-linear-gradient(180deg, #FF00FF, #66FF00); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"><i>DITTY</i></span>


      </a>
     
    </div>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./index.php?page=home" class="nav-link nav-home">
              <i class="nav-icon fas fa-home" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i>
              <p>
                Home
              </p>
            </a>
          </li>    
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_music nav-view_music">
              <i class="nav-icon fa fa-music" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i>
              <p>
                Musics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_music" class=" ml-1 nav-link nav-new_music tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p class="">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=music_list" class=" ml-1 nav-link nav-music_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p class="">List</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
                <a href="./index.php?page=playlist" class="nav-link nav-playlist tree-item">
                  <i class="fas fa-list nav-icon" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i>
                  <p>Playlist</p>
                </a>
          </li> 
          <li class="nav-item">
                <a href="./index.php?page=genre_list" class="nav-link nav-genre_list tree-item">
                  <i class="fas fa-th-list nav-icon" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i>
                  <p>Genre</p>
                </a>
          </li>  
          <?php if($_SESSION['login_type'] == 1): ?>
          <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-users nav-icon" style="background: -webkit-linear-gradient(60deg, #21D4FD 0%, #B721FF 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i>
                  <p>Users</p>
                </a>
          </li> 
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>