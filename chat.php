<!DOCTYPE html>
<html>
<head>
	<title>Class Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="js/chat.js"></script>


	<link rel="stylesheet" type="text/css" href="css/chat.css">

</head>
<script type="text/javascript">
	$("#up").on("click", function() {console.log(0);});
</script>

<body ng-app="testapp">
	<?php 

	$counter = 0;

	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Chat with your peers!</h3>
				&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">

						<div class="panel panel-primary"  ng-controller="ChatController">
							<div class="panel-heading" style="padding:0 0 0 8px;">
								<span class="glyphicon glyphicon-user"></span>
								<h6 class="panel-title" style="display:inline;">Chat</h6>
								<div class="btn-group btn-group-xs pull-right">
									<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span></button>
									<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
									<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></button>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-body" style="padding:0 4px;">
								<div class="row">
									<div class="col-xs-12" style="height:300px;max-width:100%;overflow-y:auto;overflow-x:hidden;">
										<table class="table table-hover table-condensed" style="">
											<tr ng-hide="chatMessages.length === 0" ng-repeat="chat in chatMessages | orderBy:origDt | reverse"
											style="min-width:100%;max-width:100%;width:100%;">
											<td><img src="{{chat.icon}}" alt="" style="margin-top:8px;"/></td>
											<td>
												<h6>{{chat.username}}</h6>
											</td>
											<td>
												<p class="word-wrap:break-word"><small>{{chat.text}}</small> 
													<span class="vote" id="down">&darr;</span> <span class="vote" id="up" style="color:green;">&uarr;</span></p>
												</td>
											</tr>
											<tr ng-show="chatMessages.length === 0">
												<td>
													<p>Nothin' here. <strong>Say something!</strong></p>
												</td>
											</tr>
										</table>
</div></div></div></div></div></div></div></div></div></body></html>