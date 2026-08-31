<div id="navbar" class="navbar">
	<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
	<span class="fa fa-bars"></span>
	</button>
	<a class="navbar-brand" href="<?php echo site_url('admin');?>">
	<small>
	<i class="fa fa-desktop"></i>
	Realestate Admin </small>
	</a>
		
	<ul class="nav memento-nav pull-right">
		<li class="user-profile">
			<a data-toggle="dropdown" href="index.html#" class="user-menu dropdown-toggle">
			<i class="fa fa-user"></i>
			<span class="hhh" id="user_info"><?php echo $this->session->userdata('user_name');?></span>
			<i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-navbar" id="user_menu">
				<li style="margin-top:10px;"></li>	
				<li>
				<a href="<?php echo site_url('admin/auth/changepass');?>">
				<i class="fa fa-cog"></i>
				Change Password </a>
				</li>
				<li>
				<a href="<?php echo site_url('admin/editprofile');?>">
				<i class="fa fa-wrench"></i>
				Edit Profile </a>
				</li>
				<li>			
				<li class="divider"></li>
				<li>
				<a href="<?php echo site_url('admin/auth/logout')?>">
				<i class="fa fa-sign-out"></i>
				Logout </a>
				</li>
				<li class="divider"></li>
			</ul>
		</li>
	</ul>

	<ul class="nav memento-nav pull-right">
		<li>
			<a href="<?php echo site_url();?>">
				<i class="fa fa-laptop"></i>
				Visit Site
			</a>
		</li>
	</ul>
</div>