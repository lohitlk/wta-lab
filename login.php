<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>One place for all your 'FEELINGS'</title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0;
	   	background-color: #F4D03F;
		background-image: linear-gradient(60deg, #F4D03F 0%, #16A085 100%);

	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%) !important;
		display: flex;
	}
	@import url('https://fonts.googleapis.com/css?family=Fascinate+Inline&display=swap');



* {
  box-sizing: border-box;
  position: relative;
}


         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%)}
         .btn-grad {
            text-align: center;
            text-transform: uppercase;
            transition: 0.2s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

         .btn-grad1 {background-image: linear-gradient(to right, #ff6e7f 0%, #bfe9ff  51%, #ff6e7f  100%)}
         .btn-grad1 {
            
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            font-family: 'Fascinate Inline', cursive;
          }

          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         

  .btn-grad:hover {
        background-position: right center; /* change direction of the change here */
        color: #fff;
        text-decoration: none;
    }
         

.treat-button {
  font-family: 'Fascinate Inline', cursive;
  font-size: 2vmin;
  appearance: none;
  border: none;
  border-radius: 1em;
  padding: .6em 1.5em;
  overflow: hidden;
  user-select: none;
  cursor: pointer;
  z-index: 1;
  box-shadow: 0 0 1em rgba(white, .2);
  transition: transform .1s cubic-bezier(.5, 0, .5, 1),
    box-shadow .2s;
  
  &:hover {
    box-shadow: 0 0 2em rgba(white, .3);
  }

  outline: none;

  &:active {
    transform: scale(0.8) translateY(10%);
    transition-timing-function: cubic-bezier(.5, 0, .5, 1);
  }
}

.treat {
  --scale-x: 0;
  --scale-y: 0;
  pointer-events: none;
  display: block;
  position: absolute;
  top: 0;
  left: calc(50% - .5rem);
  border-radius: 50%;
  width: 1em;
  height: 1em;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 5vmin;
  transform: 
    translate(
      calc( var(--x) * 1px ), 
      calc( var(--y) * 1px )
    ) 
    translate(-50%, -50%);
  pointer-events: none;
  animation: 
    treat-enter .1s ease-in backwards, 
    treat-exit 300ms linear 
    calc( (var(--lifetime, 3000) * 1ms) - 300ms) 
    forwards;

  @keyframes treat-enter {
    from {
      opacity: 0;
    }
  }
  @keyframes treat-exit {
    to {
      opacity: 0;
    }
  }
  
  .inner {
    animation: inner-rotate .6s linear infinite;
    transform: rotate( 
      calc(-1turn * var(--direction) )
    ); 
    @keyframes inner-rotate {
      to { 
        transform: none;
      } 
    }
  }
}

* { box-sizing:border-box; }


input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus 		{ outline:none; }

label 				 {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

input:focus ~ label, input:valid ~ label 		{
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

.bar 	{ position:relative; display:block; width:300px; }
.bar:before, .bar:after 	{
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

@-webkit-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}

.glow {
  font-size: 60px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}s
	
</style>

<body class="bg-light" style="background-image: url('assets/uploads/background.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


  <main id="main" >	
  	<div class="container">
  		
  		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
  		<div id="login-center" class="row justify-content-center align-self-center w-100">
  			<div class="d-flex justify-content-center align-items-center w-100">
  				<span  class="m-4 p-2">
  				<h1 class="text-gradient-primary text-center" style="font-size: 4rem"><b><i class="fas fa-headphones text-gradient-primary"></i></b></h1>
  				<h2 class="glow" style="color: #f8f8ff;"><b>One place for all your <i>FEELINGS</i></b></h2>
  				</span>
  			</div>
  			<div class="card col-sm-7" style="background: #e0eafc; background: -webkit-linear-gradient(to right, #e0eafc, #cfdef3); background: linear-gradient(to right, #e0eafc, #cfdef3);">
  				<div class="card-body" >

  					<form id="login-form" >
  						<center>
  						<div class="group form-group">
  							<input type="text" id="email" name="email" class="" style="background: #e0eafc; background: -webkit-linear-gradient(to right, #e0eafc, #cfdef3); background: linear-gradient(to right, #e0eafc, #cfdef3);"required>
  							<span class="highlight"></span>
      						<span class="bar"></span>
      						<label>Email:</label>
  						</div>
  						<div class="group form-group">
  							<input type="password" id="password" name="password" style="background-color: background: #e0eafc; background: -webkit-linear-gradient(to right, #e0eafc, #cfdef3);background: linear-gradient(to right, #e0eafc, #cfdef3);" class="" required>
  							<span class="highlight"></span>
      						<span class="bar"></span>
  							<label>Password:</label>
  						</div>
  					</center>
  						<div class="treat-wrapper">
  						<center><button class=" btn-grad treat-button button btn btn-block ">Login</button></center>
  					</div>
  						<hr>

  						<center><button class=" btn-grad1 btn btn-block" type="button" id="new_account">Create New Account</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
  		</div>
  	</div>

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
         <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><b>&times;</b></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
</body>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- PAGE assets/plugins -->
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
	 window.start_load = function(){
	    $('body').prepend('<div id="preloader2"></div>')
	  }
	  window.end_load = function(){
	    $('#preloader2').fadeOut('fast', function() {
	        $(this).remove();
	      })
	  }
	 window.viewer_modal = function($src = ''){
	    start_load()
	    var t = $src.split('.')
	    t = t[1]
	    if(t =='mp4'){
	      var view = $("<video src='"+$src+"' controls autoplay></video>")
	    }else{
	      var view = $("<img src='"+$src+"' />")
	    }
	    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
	    $('#viewer_modal .modal-content').append(view)
	    $('#viewer_modal').modal({
	            show:true,
	            backdrop:'static',
	            keyboard:false,
	            focus:true
	          })
	          end_load()  

	}
	  window.uni_modal = function($title = '' , $url='',$size=""){
	      start_load()
	      $.ajax({
	          url:$url,
	          error:err=>{
	              console.log()
	              alert("An error occured")
	          },
	          success:function(resp){
	              if(resp){
	                  $('#uni_modal .modal-title').html($title)
	                  $('#uni_modal .modal-body').html(resp)
	                  if($size != ''){
	                      $('#uni_modal .modal-dialog').addClass($size)
	                  }else{
	                      $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
	                  }
	                  $('#uni_modal').modal({
	                    show:true,
	                    backdrop:'static',
	                    keyboard:false,
	                    focus:true
	                  })
	                  end_load()
	              }
	          }
	      })
	  }
	  window._conf = function($msg='',$func='',$params = []){
	     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
	     $('#confirm_modal .modal-body').html($msg)
	     $('#confirm_modal').modal('show')
	  }
	   window.alert_toast= function($msg = 'TEST',$bg = 'success' ,$pos=''){
	   	 var Toast = Swal.mixin({
	      toast: true,
	      position: $pos || 'top-end',
	      showConfirmButton: false,
	      timer: 5000
	    });
	      Toast.fire({
	        icon: $bg,
	        title: $msg
	      })
	  }
	$('#new_account').click(function(){
		uni_modal("<h4>Sign Up</h4><span><h6 class='text-muted'>It’s quick and easy.</h6></span>","signup.php","large")
	})
	$('#login-form').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
				end_load()
			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					end_load()
				}
			}
		})
	})
	$('.number').on('input keyup keypress',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        val = val.toLocaleString('en-US')
        $(this).val(val)
    })
</script>
<script type="text/javascript">
	console.clear();

let width = window.innerWidth;
let height = window.innerHeight;
const body = document.body;

const elButton = document.querySelector(".treat-button");
const elWrapper = document.querySelector(".treat-wrapper");

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

const treatmojis = ["♬", "♫", "♪", "♬", "♩", "♭","♪", "♮", "♪", "ø", "♯", "♪", "♭"];
const treats = [];
const radius = 15;

const Cd = 0.47; 
const rho = 1.22; 
const A = Math.PI * radius * radius / 10000; 
const ag = 9.81; 
const frameRate = 1 / 60;

function createTreat() {
  const vx = getRandomArbitrary(-10, 10); 
  const vy = getRandomArbitrary(-10, 1);  
  
  const el = document.createElement("div");
  el.className = "treat";

  const inner = document.createElement("span");
  inner.className = "inner";
  inner.innerText = treatmojis[getRandomInt(0, treatmojis.length - 1)];
  el.appendChild(inner);
  
  elWrapper.appendChild(el);

  const rect = el.getBoundingClientRect();

  const lifetime = getRandomArbitrary(2000, 3000);

  el.style.setProperty("--lifetime", lifetime);

  const treat = {
    el,
    absolutePosition: { x: rect.left, y: rect.top },
    position: { x: rect.left, y: rect.top },
    velocity: { x: vx, y: vy },
    mass: 0.1, 
    radius: el.offsetWidth,
    restitution: -.7,
    
    lifetime,
    direction: vx > 0 ? 1 : -1,

    animating: true,

    remove() {
      this.animating = false;
      this.el.parentNode.removeChild(this.el);
    },

    animate() {
      const treat = this;
      let Fx =
        -0.5 *
        Cd *
        A *
        rho *
        treat.velocity.x *
        treat.velocity.x *
        treat.velocity.x /
        Math.abs(treat.velocity.x);
      let Fy =
        -0.5 *
        Cd *
        A *
        rho *
        treat.velocity.y *
        treat.velocity.y *
        treat.velocity.y /
        Math.abs(treat.velocity.y);

      Fx = isNaN(Fx) ? 0 : Fx;
      Fy = isNaN(Fy) ? 0 : Fy;

     
      var ax = Fx / treat.mass;
      var ay = ag + Fy / treat.mass;
   
      treat.velocity.x += ax * frameRate;
      treat.velocity.y += ay * frameRate;

     
      treat.position.x += treat.velocity.x * frameRate * 100;
      treat.position.y += treat.velocity.y * frameRate * 100;
      
      treat.checkBounds();
      treat.update();
    },
    
    checkBounds() {

      if (treat.position.y > height - treat.radius) {
        treat.velocity.y *= treat.restitution;
        treat.position.y = height - treat.radius;
      }
      if (treat.position.x > width - treat.radius) {
        treat.velocity.x *= treat.restitution;
        treat.position.x = width - treat.radius;
        treat.direction = -1;
      }
      if (treat.position.x < treat.radius) {
        treat.velocity.x *= treat.restitution;
        treat.position.x = treat.radius;
        treat.direction = 1;
      }

    },

    update() {
      const relX = this.position.x - this.absolutePosition.x;
      const relY = this.position.y - this.absolutePosition.y;

      this.el.style.setProperty("--x", relX);
      this.el.style.setProperty("--y", relY);
      this.el.style.setProperty("--direction", this.direction);
    }
  };

  setTimeout(() => {
    treat.remove();
  }, lifetime);

  return treat;
}


function animationLoop() {
  var i = treats.length;
  while (i--) {
    treats[i].animate();

    if (!treats[i].animating) {
      treats.splice(i, 1);
    }
  }

  requestAnimationFrame(animationLoop);
}

animationLoop();

function addTreats() {
  //cancelAnimationFrame(frame);
  if (treats.length > 40) {
    return;
  }
  for (let i = 0; i < 10; i++) {
    treats.push(createTreat());
  }
}

elButton.addEventListener("click", addTreats);
elButton.click();

window.addEventListener("resize", () => {
  width = window.innerWidth;
  height = window.innerHeight;
});

</script>	
</html>
</html>