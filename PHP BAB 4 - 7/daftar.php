


<!DOCTYPE html>
<html>
<head>
	<title>Wizard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
			#kotakRegis {
				
				width: 400px;
				margin-right: auto;
				margin-left: auto;
			}

			body{
		background: url();
		background-size: 100%;
	}

	/*
	Style index
	*/


	#navigasi{	
		background: #eedd82;
		height: 50px;
		margin-top: -15px;
		margin-left:-10px;
		padding-bottom: 50px;
		
		margin-right: -10px;
	}
	#navigasi li{

		padding-top: 5px;
		text-decoration: none;
	 	display: inline-block;
	 	margin-top: 20px;
	 	
	 	
	}
	#navigasi li a{

		margin-left: 2px;
		position: relative;
	 	padding: 10px;
	 	color: black;
		text-decoration: none;
		 background: #f2f6ff;
	}

	#tombolkanan{
		float: right;
		margin-right: 20px;
	}

	#content{

		text-align: center;
		text-shadow: black;
		width: wrap;
	}

	#tabelUmum{
		background: #fcfded;
		display: block;
	  margin-right: auto;
	  margin-left: auto;


	}

	#tabelKusus{
		
		display: inline-block;
	  margin-right: auto;
	  margin-left: auto;
	  max-width: 900px;


	}
	#tabelKusus tr{
		background: #fcfded;
	}

	#tabelKusus tr a{
		
		
	 	padding: 10px;
	 	color: black;
		text-decoration: none;
		 background: #f2f6ff;
	}


	/**/

	#container{

	}

	#page{
		width: auto;
		margin-right: auto;
		margin-left: auto;
		height: wrap;
		padding-bottom: 50px;
		background: url();
		width: 600px;

	}

	#header {
		text-align: center;

	}

	#header iframe {
		margin-top: 10px;
		width: 90%;
	  display: block;
	  margin-right: auto;
	  margin-left: auto;
	}

	.button{
		width: auto;
		margin-top: 10px;
		background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: block;
	  font-size: 16px;
	  list-style-type: none;
	  width: 400px;
	  margin-right: auto;
	  margin-left: auto;

	}

	#loginbg{

		background: #00bfe7;

		width: 400px;
		height: 250px;
		padding: 50px;
		text-align: center;
		margin-left: auto;
		margin-top: 10px;
		margin-bottom:auto;
	    margin-right: auto;
	    display: block;

	}

	#sambutan{
		width: 400px;
		margin-right: auto;
		margin-left: auto;

	}

	#sambutan h2{
		color: #022302;
	}

	#sambutan h1{
		color: #022302;
		margin-right: auto;
		margin-left: auto;
		position: relative;
		left: 100px;
	}

	label{
		font-family: "Lucida Console", Courier, monospace;
	}

	input{
		margin-bottom: 20px;
		font-size: 30px;

	}

	button{
		margin-top: 10px;
		background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  list-style-type: none;
	}

	li{list-style:none;}

	#footer{
		text-align: center;
		margin-left: 2px;
	 	padding: 10px;
	 	position: relative;
	 	top: 12px;
	 	color: grey;
		text-decoration: none;
		 background: #eedd82;
	}
			
	</style>
</head>
<body>
	<div id="header">

		<div id="kotakRegis">
		
		<form method="post" action="">
			<h1>Selamat Mendaftar</h1>
			<ul>
				<li>
					<label for="nama" >Nama</label>
					<input type="Text" name="namadepan" id="namadepan">
				</li>
				<li>
					<label for="tingkat" >tingkat</label>
					<input type="Text" name="tingkat" id="tingkat">
				</li>
				<li>
					<label for="aliran" >aliran</label>
					<input type="Text" name="aliran" id="aliran">
				</li>
				
					<button name="masuk">Masukan</button>
				
				
				
			</ul>
			
		</form>

		</div>

	</div>
</body>
</html>