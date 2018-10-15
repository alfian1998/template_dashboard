<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			 <li class="active">Dashboard</li>	 
		</ul>
	</div><!-- /breadcrumb-->
	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Dashboard</h3>
			<span>Welcome back Mr.John Doe</span>
		</div><!-- /page-title -->
		
		<ul class="page-stats">
	    	<li>
	    		<div class="value">
	    			<span>New visits</span>
	    			<h4 id="currentVisitor">4256</h4>
	    		</div>
				<span id="visits" class="sparkline"></span>
	    	</li>
	    	<li>
	    		<div class="value">
	    			<span>My balance</span>
	    			<h4>$<strong id="currentBalance">32153</strong></h4>
	    		</div>
	    		<span id="balances" class="sparkline"></span>
	    	</li>
	    </ul><!-- /page-stats -->
	</div><!-- /main-header -->
	
	<div class="grey-container shortcut-wrapper">
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-bar-chart-o"></i>
			</span>
			<span class="text">Statistic</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-envelope-o"></i>
				<span class="shortcut-alert">
					5
				</span>	
			</span>
			<span class="text">Messages</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-user"></i>
			</span>
			<span class="text">New Users</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-globe"></i>
				<span class="shortcut-alert">
					7
				</span>	
			</span>
			<span class="text">Notification</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-list"></i>
			</span>
			<span class="text">Activity</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-cog"></i></span>
			<span class="text">Setting</span>
		</a>
	</div><!-- /grey-container -->
	
	<div class="padding-md">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="panel-stat3 bg-danger">
					<h2 class="m-top-none" id="userCount">362</h2>
					<h5>Registered users</h5>
					<i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">5% Higher than last week</span>
					<div class="stat-icon">
						<i class="fa fa-user fa-3x"></i>
					</div>
					<div class="refresh-button">
						<i class="fa fa-refresh"></i>
					</div>
					<div class="loading-overlay">
						<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
					</div>
				</div>
			</div><!-- /.col -->
			<div class="col-sm-6 col-md-3">
				<div class="panel-stat3 bg-info">
					<h2 class="m-top-none"><span id="serverloadCount">15</span>%</h2>
					<h5>Server Load</h5>
					<i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">1% Higher than last week</span>
					<div class="stat-icon">
						<i class="fa fa-hdd-o fa-3x"></i>
					</div>
					<div class="refresh-button">
						<i class="fa fa-refresh"></i>
					</div>
					<div class="loading-overlay">
						<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
					</div>
				</div>
			</div><!-- /.col -->
			<div class="col-sm-6 col-md-3">
				<div class="panel-stat3 bg-warning">
					<h2 class="m-top-none" id="orderCount">593</h2>
					<h5>New Orders</h5>
					<i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">3% Higher than last week</span>
					<div class="stat-icon">
						<i class="fa fa-shopping-cart fa-3x"></i>
					</div>
					<div class="refresh-button">
						<i class="fa fa-refresh"></i>
					</div>
					<div class="loading-overlay">
						<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
					</div>
				</div>
			</div><!-- /.col -->
			<div class="col-sm-6 col-md-3">
				<div class="panel-stat3 bg-success">
					<h2 class="m-top-none" id="visitorCount">7214</h2>
					<h5>Total Visitors</h5>
					<i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">15% Higher than last week</span>
					<div class="stat-icon">
						<i class="fa fa-bar-chart-o fa-3x"></i>
					</div>
					<div class="refresh-button">
						<i class="fa fa-refresh"></i>
					</div>
					<div class="loading-overlay">
						<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
					</div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-6">
				<h4 class="headline">
					Default Button
					<span class="line"></span>
				</h4>
				<a class="btn btn-default">Default</a>
				<a class="btn btn-primary">Primary</a>
				<a class="btn btn-info">Info</a>
				<a class="btn btn-success">Success</a>
				<a class="btn btn-warning">Warning</a>
				<a class="btn btn-danger">Danger</a>

				<div class="seperator"></div>
				<div class="seperator"></div>
			</div><!-- /.col -->
			<div class="col-md-6">
				<h4 class="headline">
					SweetAlert
					<span class="line"></span>
				</h4>
				<button class="btn btn-danger" onclick="swal('Oops','Something went wrong!','error')">
			        Danger
			    </button>
				
				<div class="seperator"></div>
				<div class="seperator"></div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-6">
				<h4 class="headline">
					Chart JS
					<span class="line"></span>
				</h4>
				<canvas id="canvas"></canvas>

				<div class="seperator"></div>
				<div class="seperator"></div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-12">
				<h4 class="headline">
					Form
					<span class="line"></span>
				</h4>
				
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Simple Form</div>
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter email">
									</div><!-- /form-group -->
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control input-sm" id="exampleInputPassword1" placeholder="Password">
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="label-checkbox">
											<input type="checkbox">
											<span class="custom-checkbox"></span>
											Remember me
										</label>
									</div><!-- /form-group -->
									<button type="submit" class="btn btn-success btn-sm">Submit</button>
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Horizontal Form</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<input type="email" class="form-control input-sm" id="inputEmail1" placeholder="Email">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control input-sm" id="inputPassword1" placeholder="Password">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<label class="label-checkbox">
												<input type="checkbox">
												<span class="custom-checkbox"></span>
												Remember me
											</label>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Sign in</button>
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->

				<div class="seperator"></div>
				<div class="seperator"></div>
			</div><!-- /.col -->
		</div><!-- /.row -->

	</div><!-- /.padding-md -->
</div><!-- /main-container -->