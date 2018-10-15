<aside class="fixed skin-1	">
	<div class="sidebar-inner scrollable-sidebar">
		<div class="size-toggle">
			<a class="btn btn-sm" href="javascript:void(0)">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
				<i class="fa fa-power-off"></i>
			</a>
		</div><!-- /size-toggle -->	
		<div class="user-block clearfix">
			<img src="<?=base_url()?>assets/img/user.jpg" alt="User Avatar">
			<div class="detail">
				<strong>John Doe</strong><span class="badge badge-danger m-left-xs bounceIn animation-delay4">4</span>
				<ul class="list-inline">
					<li><a href="profile.html">Profile</a></li>
					<li><a href="inbox.html" class="no-margin">Inbox</a></li>
				</ul>
			</div>
		</div><!-- /user-block -->
		<div class="search-block">
			<div class="input-group">
				<input type="text" class="form-control input-sm" placeholder="search here...">
				<span class="input-group-btn">
					<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /search-block -->
		<div class="main-menu">
			<ul>
				<li class="active">
                    <a href="javascript:void(0)" style="cursor: default; border-top:0px dotted #3c8dbc; border-bottom:2px solid #bd3f26; color: #3c8dbc; padding-left: 0px; padding-top:6px; padding-bottom:6px">
                        <span class="text"><b>NAVIGASI</b></span>
                    </a>
                </li>
				<li class="active">
					<a href="index.html">
						<span class="menu-icon">
							<i class="fas fa-desktop fa-lg"></i>
						</span>
						<span class="text">
							<b>Dashboard</b>
						</span>
						<span class="menu-hover"></span>
					</a>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon">
							<i class="fa fa-file-text fa-lg"></i> 
						</span>
						<span class="text">
							<b>Page</b>
						</span>
						<div class="responsive-caret-down">
							<i class="fa fa-caret-down fa-lg"></i>
						</div>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li>
							<a href="<?=site_url('login')?>" class="a-submenu"><span class="submenu-label"><b>Sign in</b></span></a>
						</li>
						<li>
							<a href="register.html"><span class="submenu-label"><b>Sign up</b></span></a>
						</li>
						<li>
							<a href="lock_screen.html"><span class="submenu-label"><b>Lock Screen</b></span></a>
						</li>
					</ul>
				</li>
			</ul>
			
			<div class="alert alert-info">
				Welcome to Perfect Admin. Do not forget to check all my pages. 
			</div>
		</div><!-- /main-menu -->
	</div><!-- /sidebar-inner -->
</aside>