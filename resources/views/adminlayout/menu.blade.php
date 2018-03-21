<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
					<button class="btn btn-default" type="button">
					<i class="fa fa-search"></i>
					</button>
					</span>
				</div>
			</li>
			<li>
				<a href="#"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
			</li>
			<li>
				<a href="#" class="click"><i class="fa fa-cube fa-fw"></i>Product<span class="fa arrow"></span>
					<ul class="nav nav-second-level">
						<li>
							<a href="#">List Product</a>
						</li>
						<li>
							<a href="#">Add Product</a>
						</li>
					</ul>
				</a>
			</li>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(".click").on('click', function() {
		$(".nav-second-level").show();
	});
</script>