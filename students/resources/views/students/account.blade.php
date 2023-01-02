<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard Account</title>


	
	<!-- Bootstrap -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.css" rel="stylesheet" media="screen">
			<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
			<link href="../css/docs.css" rel="stylesheet" media="screen">
			<link href="../css/diapo.css" rel="stylesheet" media="screen">
			<link href="../css/font-awesome.css" rel="stylesheet" media="screen">
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css">
	
	<!-- js -->			
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.js"></script>
	<script src="https://github.com/codrops/DirectionAwareHoverEffect/blob/master/js/jquery.hoverdir.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
			
<script>
jQuery(document).ready(function() {
$(function(){
	$('.pix_diapo').diapo();
});
});
</script>	
	<noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
					left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
		</noscript>		
</head>
<body>
    <div class="container">
		<div class="margin-top">
			<div class="row">
						<div class="span12">
				<div class="header111">
				<div class="pull-left" style="height:140px">
					<img class="stilogo" src="../images/wallE.jpg" width="1170" height="150" min-width="800">
				</div>
				</div>
					<div class="alert alert-success"> 
						<strong>Heads Up!</strong>&nbsp;Welcome to blah blah
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								Friday, December 30, 2022							</div>
					</div>
				</div>				
				<div class="span2">
								<div class="life-side-bar">
			<div class="hero-container" style="width: 200px">                  
					<ul class="nav nav-tabs nav-stacked" style="width: 200px">
						<div style="border:1px solid black;width: 198px">
							<li>
						<center><img height="100" width="154" style="margin: 5px 0px 0px 3px;" src="../admin/upload/default.jpg">
							
																				<br>
						<strong class="name1">Charles Davies<br>
						140402						</strong></center>
							</li>
						</div>


						<li class="">
						<a href="/dasboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Dashboard</a>
						</li>

						

						<!-- <li class="">
						<a href="units_table.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Subjects</a>
						</li> -->

						<li class="">
							<a href="/view_grade" class="yellow_link"><i class="icon-home icon-large icon-large"></i>&nbsp;View Grades</a>
						</li>

				<!-- 		<li class="">
						<a href="#" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Announcement</a>
						</li> -->

						<li class="">
						<a href="/logout" class="yellow_link"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
						</li>
							
					</ul>
			</div>
			

			</div>
					</div>
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			
				         
			</div>
		</div>
    </div>
</div>

    <footer class="footer">
      <div class="container">
	  <div class="foot-margin">
        <p><a>2022 Higher Learning University. All Rights Reserved. </a></p>
      </div>
      </div>
    </footer>
	
	<script type="text/javascript">
			$(function() {
				$('#da-thumbs > li').hoverdir();
			});
		</script>
	
<div id="logout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-body">
<div class="alert alert-danger">Are you sure you want to Logout</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="/logout" class="btn btn-danger">Yes</a>
</div>
</div>	

<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="scripts/jquery.hoverIntent.minified.js"></script> 
<script type="text/javascript" src="scripts/diapo.js"></script> 

</body>
</html>