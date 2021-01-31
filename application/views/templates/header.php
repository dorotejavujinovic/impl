
<html>
<head>
	<title>Ballerina's Notebook</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

	<div class="container">
		<div class="navbar-header">
			<a  class="navbar-brand" href="<?php echo base_url(); ?>">Ballerina's Notebook</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if(!$this->sessio->userdata('logged_in')) : ?>
					<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
				<?php endif; ?>

				<?php if($this->sessio->userdata('logged_in')) : ?>
					<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
					<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
					<li><a href="<?php echo base_url(); ?>users/profile">Profile</a></li>
				<?php endif; ?>
				
			</ul>
			
		</div>
		
	</div>
</nav>
<div class="container">
	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_updated')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>