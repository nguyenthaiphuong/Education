<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
<meta name="author" content="">
<title>Admin - Education</title>
 
<base href="{{asset('')}}">
 
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- MetisMenu CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.4/metisMenu.css" rel="stylesheet">
 
<!-- Custom CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/css/sb-admin-2.min.css" rel="stylesheet">
 
<!-- Custom Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
 
<!-- DataTables Responsive CSS -->
<link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
	 
	<!-- Navigation -->
	@include('adminlayout/nav')
	 
	<!-- Page Content -->
	@yield('content')
	<!-- /#page-wrapper -->
	 
	</div>
	<!-- /#wrapper -->
	 
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<!-- Bootstrap Core JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 
	<!-- Metis Menu Plugin JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>
	 
	<!-- Custom Theme JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/js/sb-admin-2.js"></script>
	 
	<!-- DataTables JavaScript -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap.min.js"></script> -->

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});
		});
	</script>
</body>
 
</html>