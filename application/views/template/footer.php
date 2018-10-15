<!-- Footer
		================================================== -->
		<footer>
			<div class="row">
				<div class="col-sm-6">
					<span class="footer-brand">
						<strong class="text-danger">Perfect</strong> Admin
					</span>
					<p class="no-margin">
						&copy; 2013 <strong>Perfect Admin</strong>. ALL Rights Reserved. 
					</p>
				</div><!-- /.col -->
			</div><!-- /.row-->
		</footer>
		
		
		<!--Modal-->
		<div class="modal fade" id="newFolder">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Create new folder</h4>
      				</div>
				    <div class="modal-body">
				        <form>
							<div class="form-group">
								<label for="folderName">Folder Name</label>
								<input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
							</div>
						</form>
				    </div>
				    <div class="modal-footer">
				        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
						<a href="#" class="btn btn-danger btn-sm">Save changes</a>
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div><!-- /wrapper -->

	<a href="#" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Chart.js Bar Chart'
					}
				}
			});

		};
	</script>
	
	<!-- Sweetalert -->
	<script src="<?=base_url()?>assets/js/sweetalert/sweetalert.min.js"></script>

	<!-- Jquery -->
	<script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  
	<!-- Modernizr -->
	<script src="<?=base_url()?>assets/js/modernizr.min.js"></script>
  
    <!-- Pace -->
	<script src="<?=base_url()?>assets/js/pace.min.js"></script>
	
	<!-- Popup Overlay -->
	<script src="<?=base_url()?>assets/js/jquery.popupoverlay.min.js"></script>
  
	<!-- Slimscroll -->
	<script src="<?=base_url()?>assets/js/jquery.slimscroll.min.js"></script>
  
	<!-- Cookie -->
	<script src="<?=base_url()?>assets/js/jquery.cookie.min.js"></script>

	<!-- Perfect -->
	<script src="<?=base_url()?>assets/js/app/app.js"></script>
	
  </body>
</html>