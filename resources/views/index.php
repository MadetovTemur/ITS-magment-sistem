<?php // $view->layout('start8') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ITS</title>
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo $view->assets("bootstrap-5.0.2/css/bootstrap.css") ?>">
		<script type="text/javascript" src="./assets/ajax/jquery-3.7.1.js"></script>
		<link rel="stylesheet" href="<?php echo $view->assets("css/style.css") ?>">
		<link rel="icon" href="<?php echo $view->assets("img/logo.png") ?>">
	</head>
	<body class="body-home">
	    <div class="black-fill">
	    	<div class="">
	    	<nav class="navbar navbar-expand-lg bg-light"
	    	     id="homeNav">
			  <div class="container">
			    <a class="navbar-brand" href="#">
			    	<img src="./assets/img/logo.png" width="40">
			    </a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
			    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Назад</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#about">Про нас</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#contact">Свяжитесь с нами</a>
			        </li>
			      </ul>
			      <ul class="navbar-nav me-right mb-2 mb-lg-0">
			      	<li class="nav-item">
			          <a class="nav-link" href="/login">Login</a>
			        </li>
			      </ul>
			  </div>
			    </div>
			</nav>
	        <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
	        	<!-- <img src="./img/logo.png" > -->
	        	<h4>Добро пажаловать в ITS</h4>
	        	<p>Lux et Veritas Light and Truth</p>
	        </section>
	        
	        <section id="about"
	                 class="d-flex justify-content-center align-items-center flex-column">
	        	
	        	<div class="card mb-3 card-1">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="./assets/img/logo.png" class="img-fluid rounded-start" >
				    </div>
				    
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Про нас</h5>
				        <p class="card-text">Iterfeyis Teacher Sisteam,   php javascrip</p>
				        <p class="card-text"><small class="text-muted">BPO School</small></p>
				      </div>
				    </div>
				  
				  </div>
				</div>
	        </section>
	        
	        <section id="contact"
	                 class="d-flex justify-content-center align-items-center flex-column">
	        	
	        	<form method="post" action="" accept-charset="utf-8" name="message_bpo" id="sendmessages">
	        		
	        		<h3>Свяжитесь с нами</h3>
	        		<div class="alert alert-danger container" role="alert" style="display: none;" id="msg-alert"></div>
				  
					 <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Адрес электронной почта</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" maxlength="90" name="email" aria-describedby="emailHelp" required>
					    <div id="emailHelp" class="form-text">Мы никогда не передадим ваш адрес элекронной почты кому-либо еще.</div>
					</div>
					
					<div class="mb-3">
					    <label class="form-label">Ф.И</label>
					    <input type="text" name="full_name" maxlength="40" required class="form-control">
					</div>
					
					<div class="mb-3">
					    <label class="form-label">Сообшения</label>
					    <textarea class="form-control"name="message" required rows="4" maxlength="800"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Отправит</button>
				
				</form>
	        </section>
	        
	        <div class="text-center text-light">
	        	Copyright &copy; 2021 BPO. All rights reserved.
	        </div>

	    	</div>
	    </div>

	<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'] ?>/assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	    
  <script type="text/javascript" charset="utf-8" async>
	    	$(document).ready(function() {
				$('#sendmessages').on('submit', function (event) {
				    event.preventDefault();
				    $.post("./php/message_sistem.php", $(this).serialize(), function (data) { 
				        $('#msg-alert').show(1000).html(data.msg).delay(10000).hide(1000);
				    }, 'json');
				  
				});
	    	});
	</script>	
</body>
</html>

<?php // $view->layout('end') ?>
