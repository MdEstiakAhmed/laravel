<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Manager - Statistical Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/generalCSS/login.css') }}">
		<script src="{{asset('js/myScript.js')}}"></script>
    </head>
    <body>
        <!-- navbar section start -->
        <section class="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand brand-link" href="/">Express</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">Menu</span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link about-link" href="#"></a>
                            </li>
							<li class="nav-item about-link">
								<select class="form-control select-bar" id="profileBtn" onchange="myFunc()">
									<option value="" disabled="true" selected>{{$user->first_name}} {{$user->last_name}}</option>
									<option value="/AccountManager/Profile">Profile</option>
									<option value="/AccountManager/Timeline">Timeline</option>
									<option value="/logout">Logout</option>
								</select>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/home/AccountManager">Home</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/AccountManager/Report/General">Account Report</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/AccountManager/UserPosts/05">User Post</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar section end -->
			
                <div class="row">
                    <div class="col-xl-6">
						<h1>&nbsp &nbsp &nbsp Statistical Report</h1><br/>
						<div class="credential-content">
							<div id="myProgress">
								<select class="form-control select-bar" id="selectedStat" onchange="statFunc({{$acccCount}})">
									<option value="" disabled="true" selected>Select Account Type</option>
									<option value="{{$acmCount}}">Account Control Manager</option>
									<option value="{{$pcmCount}}">Post Control Manager</option>
									<option value="{{$userCount}}">General Users</option>
								</select>
							</div><br/>
							<p id="totAcc">Accounts:</p>
								<div id="myProgress">
									<div id="TotalAccountsBar"></div>
										</div>
							<p id="typeAcc">Selected Accounts:</p>
								<div id="myProgress">
									<div id="AccountTypeBar"></div>
										</div>
							<p id="deacts">Deactivated:</p>
								<div id="myProgress">
									<div id="DeactivatedAccountBar"></div>
										</div>
							<p id="blcks">Blocked:</p>
								<div id="myProgress">
									<div id="BlockedAccountBar"></div>
										</div>
							<br><p id="countStat"></p>
						</div>
                    </div>
                </div>
		<script type="text/javascript">
		google.charts.load('current', {packages: ['corechart'],callback: drawChart});

		function drawChart() {
		var datam = document.getElementById("dataCar").value;
		var dataArray = datam.split("-");
		var fb = dataArray[0];
		  var dataTable = new google.visualization.DataTable({
			  cols: [
				{ label: 'Status', type: 'string' },
				{ label: 'Quantity', type: 'number' }
			  ]
		  });

		  //var results = document.getElementById('results');
		  dataTable.addRow([{ v: 'UnBlocked' },{ v: 30 }]);
		  dataTable.addRow([{ v: 'Blocked' },{ v: 20 }]);
		  dataTable.addRow([{ v: 'Pending' },{ v: 30 }]);

		  var dataSummary = google.visualization.data.group(
			dataTable,
			[0],
			[{'column': 1, 'aggregation': google.visualization.data.sum, 'type': 'number'}]
		  );

		  var options = {
			title: 'Account Status Report'
		  };

		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(dataSummary, options);
		}
		</script>
		<!-- CDN link section start -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
        <!-- CDN link section end -->
    </body>
</html>