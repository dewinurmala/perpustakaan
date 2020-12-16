<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>LOGIN - Aplikasi E-Library</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-js'; ?>"></script>
</head>
<body>
	<div class="col-nd-4 col-nd-offset-4" style="margin-top:50px">
		<center>
			<h2>PERPUSTAKAAN UNIVERSITAS BINA SARANA INFORMATIKA DEWI NURMALA</h2>
			<h3>LOGIN</h3>	
		</center>
		<br>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=='gagal'){
				echo "<div class='alert alert-danger alert-danger'>";
				echo $this->session->flashdata('aleart');
				echo "</div>";
			} else if ($_GET['pesan']=='logout'){
				if($this->session->flashdata())
				{ 
					echo "<div class='alert alert-danger alert-success'>";
				echo $this->session->flashdata('Anda telah logout');
				echo "</div";
			    }
			 } else if ($_GET['pesan']=='Belum login'){
				if($this->session->flashdata())
				{ 	
				 echo "<div class='alert alert-danger alert-primary'>";
				 echo $this->session->flashdata('aleart');
				 echo "</div>";
			   }
			}
		    }else{
		    	if($this->session->flashdata())
				{ 	
				 echo "<div class='alert alert-danger alert-massage'>";
				 echo $this->session->flashdata('aleart');
				 echo "</div>";
			   }
		    }
		    ?>
		    <br>	
		    <div class="panel panel-default col-md-4 col-md-offset-4">
		    	<div class="panel-body">
		    		<br><br>
		    		<form method="post" action="<?php echo base_url().'welcome/login'?>">
		    		<div class="form-group">
		    			<input type="text" name="username" placeholder="admin_username" class="form-control">
		    			<?php echo form_error('username'); ?>
		    			<div class="form-group">
		    			<input type="password" name="password" placeholder="password" class="form-control">
		    			<?php echo form_error('password'); ?>
		    	     </div>
		    	     <div class="form-group">
		    	     	<input type="submit" value="Login" class="btn btn-primary">
		    	     </div>
		    	    </form>
		    	     <br><br>
		    	   </div>
		    	  </div>
		    	 </div>
		    	 <script type="text/javascript"> 
		    	 $('.alert-massage').alert().delay(3000).slideup('slow');</script>

</body>
</html>