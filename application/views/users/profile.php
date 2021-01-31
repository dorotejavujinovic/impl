
<h2><?php echo $User['name']; ?> <?php echo $User['last_name']; ?></h2>
<small>Email: <?php echo $User['contact']; ?></small><br>
<img src="<?php echo site_url(); ?>assets/images/profile/<?php echo $User['profile_picture']; ?>">
<div class="post-body">
	<h3>Role: <?php echo $User['role']; ?></h3>	
</div>
<?php if($this->session->userdata('user_id') == $User['user_id']): ?>
	<hr>
	<a class= "btn btn-default" href="users/edit/<?php echo $User['user_id']; ?>">Edit profile</a>
	<?php echo form_open('/users/delete/'.$User['user_id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">

	</form>
<?php endif; ?>