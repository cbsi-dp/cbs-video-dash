<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CBS.com Video Dashboard</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	
	<link rel='stylesheet' type='text/css' href='/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='/css/bootstrap-responsive.css'>
	
	<style>
		.rotated {
			-o-transform: rotate(-90deg);
			-khtml-transform: rotate(-90deg);
			-webkit-transform: rotate(-90deg); 
			-moz-transform: rotate(-90deg);
		}
		
		.th_padding {
			padding: 0px !important;
/* 			font-size: 10px; */
		}
		
		.span11 {
			height: 283px;
		}
		
		.last_night_table_border {
			border-right: 1px dashed #e3e3e3; 
		}
		
		body {
			font-size: 12px;
		}
		
		.well-small2 {
			background: white !important;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<br />
		
		<div class="row-fluid">
			<div class="span12 well well-small" style="height: 100px;">
				<div class="span6">
					<h3 style="top:12px; position:relative;">Select a Partner</h3>
					
					<div class="btn-group" style="position:relative; top:-33px; left:210px;">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							Overall <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="active"><a href="#">Overall</a></li>
							<li><a href="#">CBS.com</a></li>
							<li><a href="#">YouTube</a></li>
							<li><a href="#">cbs_ipad_app</a></li>
							<li><a href="#">Comcast</a></li>
							<li><a href="#">cbs_iphone_app</a></li>
							<li><a href="#">TV.com</a></li>
							<li><a href="#">Mefeedia</a></li>
							<li><a href="#">MSN</a></li>
							<li><a href="#">cbs_ipad</a></li>
							<li><a href="#">Yahoo</a></li>
						</ul>
					</div>
				</div>
				
				<div class="span6 pull-right">
					<h3 style="top:12px; position:relative;">Select a date range</h3>
			
					<div class="btn-group" style="position:relative; top:-33px; left:250px;">
						<button class="btn">Last Month</button>
						<button class="btn active">Month to Date</button>
						<button class="btn">Year to Date</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-100px; left:15px;">Viewers</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span4 well well-small">
								<center>
									<h5>Unique Visitors</h5>
								</center>
						
								<img src="diff.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Visits</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Visits / Unique Visitor</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
						</div>
					</div>
				</div>
	
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-100px; left:15px;">Video</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span4 well well-small">
								<center>
									<h5>Total Streams</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Full Episode Streams</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Clips Streams</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
						</div>
					</div>
				</div>
	
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-130px; left:15px;">Engagement</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span4 well well-small">
								<center>
									<h5>Streams per Viewer</h5>
								</center>
						
								<img src="diff.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Impressions per Streams</h5>
								</center>
						
								<img src="diff.png" height="100%" width="100%" />
							</div>
		
							<div class="span4 well well-small">
								<center>
									<h5>Video Time Spent</h5>
								</center>
						
								<img src="series.png" height="100%" width="100%" />
							</div>
						</div>
					</div>
				</div>
	
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-120px; left:15px;">Partners</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span12 well well-small">
								<img src="bar.png"  style="height:283px;" width="100%" />
							</div>
						</div>
					</div>
				</div>
		
				<br />
				<br />
		
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-100px; height: 100px; width: 180px;">Day Part</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span12 well well-small">
								<img src="combo.png"  style="height:283px;" width="100%" />
							</div>
						</div>
					</div>
				</div>
		
				<br />
				<br />
		
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-100px; height: 100px; width: 180px;">Shows</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span12 well well-small">
								<img src="combo.png"  style="height:283px;" width="100%" />
							</div>
						</div>
					</div>
				</div>
		
				<br />
				<br />
		
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span1">
							<center>
								<h3 class="rotated" style="position:relative; bottom:-100px; height: 100px; width: 180px;">Episodes</h3>
							</center>
						</div>
				
						<div class="span11">
							<div class="span12 well well-small">
								<img src="combo.png"  style="height:283px;" width="100%" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="span2 well well-small2" style="background: white !important;">
				<center>
					<h5>On Last Night</h5>
				</center>
	
				<table class="table">
					<thead>
						<tr>
							<th></th>
							<th>This Year</td>
							<th>Last Year</td>
						</tr>
					</thead>
					
					<tbody>
						<tr style="height:50px;">
							<td class="th_padding">12 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">11 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">10 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">9 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">8 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">7 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
						
						<tr style="height:50px;">
							<td class="th_padding">6 PM</td>
							<td>123,456</td>
							<td>123,456</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<br />
		<br />
		
		<div class="row-fluid">
			<div class="span12">
				<h4>Mockup Notes</h4>
				<ul>
					<li>Graphs will be interactive</li>
					<li>Drill down links open in new window or can open in modal box</li>
					<li>Custom date range should be possible</li>
					<li>Graphs are fully customizable</li>
					<li>Animations in graphs</li>
					<li>Live updates on graphs during filter selections</li>
					<li>Ability to switch between tabular and graphical view</li>
					<li>Email notifications can be done using UC4 or CRON</li>
					<li>Link directly to Omniture reports</li>
				</ul>
			</div>
		</div>
	</div>
	
	<script src='/scripts/jquery.js'></script>
	<script src='/scripts/bootstrap.js'></script>
	<script>
		$('.last_night_table').width(($('.last_night_table').parent().width()/2)-10);
	</script>
</body>
</html>