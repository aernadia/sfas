{{-- <h1>Ernadia</h1> --}}
{{-- <a href="{{ url('/try') }}">Home</a> --}}
{{-- <a href="{{ route('try') }}">Login</a> --}}

<html>
<head>
	<title>.:: SFAS ::.</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="form.css" >

	<style>
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
		  overflow: hidden;
		  background-color: #87CEFA;
		}

		.topnav a {
		  float: left;
		  color: #0f0f0f;
		  text-align: center;
		  padding: 25px 36px;
		  text-decoration: none;
		  font-size: 20px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		
		.material-icons {vertical-align:-14%}
		
		.logout{
			float : right;
			color : white;
			text-align:center;
			padding: 25px 36px;
			text-decoration:none;
			font-size: 20px;
		}
		
		.search1{
			float : right;
			color : white;
			text-align:center;
			padding: 25px 36px;
			text-decoration:none;
			font-size: 20px;
		}
		#myInput {
			background-image: url('/css/searchicon.png'); /* Add a search icon to input */
			background-position: 10px 12px; /* Position the search icon */
			background-repeat: no-repeat; /* Do not repeat the icon image */
			width: 100%; /* Full-width */
			color: #0f0f0f;
			font-size: 16px; /* Increase font-size */
			padding: 2px 20px 2px 40px; /* Add some padding */
			border: 1px solid #ddd; /* Add a grey border */
			margin-bottom: 2px; /* Add some space below the input */
		}
		
	</style>
</head>

<body>
	<div class="topnav">
		<a href="login3.php"><i class="fa fa-male">&nbsp; SFAS</i></a>
	  	{{-- <a href="index.php"><i class="fa fa-home">&nbsp; HOME</i></a> --}}
	  	{{-- <a href="feedback.php"><i class="fa fa-tasks">&nbsp; FEEDBACK</i></a> --}}
	  	<div class="logout" ><font style="font-family:Trajan Pro;color:#f5efef;">Log Out </font></div>
		<div class="search1"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ..">
	
	
	</div>
	<script>
		function myFunction() {
		  // Declare variables
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
			//   table = document.getElementById("myTable");
			//   tr = table.getElementsByTagName("tr");
		
		  // Loop through all table rows, and hide those who don't match the search query
		  	// for (i = 0; i < tr.length; i++) {
			// 	td = tr[i].getElementsByTagName("td")[0];
			// 	if (td) {
			// 	txtValue = td.textContent || td.innerText;
			// 	if (txtValue.toUpperCase().indexOf(filter) > -1) 
			// 	{
			// 		tr[i].style.display = "";
			// 		} else {
			// 		tr[i].style.display = "none";
			//   		}
			// 	}
		  	// }
		}
		</script>
		
</body>
</html>