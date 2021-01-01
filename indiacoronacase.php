<!DOCTYPE html>
<html>
<head>
	<title>Corona Go</title>
	<?php 
		include 'link/links.php'; ?>
	<?php	include 'css/style.php';
	 ?>

</head>
<body>
<nav class="navbar navbar-expand-lg nav_style  p-3">
  <a class="navbar-brand pl-5" href="index.php"><bold>COVID-19<bold></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitialize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Prevention</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="worldwidecorona.php">WorldwideCorona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronacase.php">IndiaCorona</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="case.php">Date wise Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Contact</a>
      </li>
      
    </ul>
  
  </div>
</nav>

<section class="corona_update container-fluid">
	<div class="my-5">
		<h3 class="text-uppercase text-center">COVID 19 INDIA Live Updates</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitialize" >Last Updated Time</th>
				<th class="text-capitialize" >State</th>
				<th class="text-capitialize" >Confirmed</th>
				<th class="text-capitialize" >Active</th>
				<th class="text-capitialize" >Recovered</th>
				<th class="text-capitialize" >Deaths</th>
			</tr>

			<?php


$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data ,true);



$statetotal = count($coronadata['statewise']);
$i = 1;
while($i < $statetotal){

	?>
	<tr>
		<td><?php echo $coronadata['statewise'][$i]['lastupdatedtime'] ?></td>
			<td><?php echo $coronadata['statewise'][$i]['state']?></td>
			<td><?php echo $coronadata['statewise'][$i]['confirmed']?></td>
			<td><?php echo $coronadata['statewise'][$i]['active'] ?>
			<td><?php echo $coronadata['statewise'][$i]['recovered']?></td>
			<td><?php echo $coronadata['statewise'][$i]['deaths']?></td>

	</tr>

	<?php
	$i++;

}

	?>



		</table>
		<!--using jquery-->



	</div>

</section>

<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<footer class="mt-5">
	<div class="footer_Style text-white text-center container-fluid">
		<p>Copyrights by Amrata</p>


	</div>


</footer>




<script type="text/javascript">

	mybutton = document.getElementById("myBtn");
	window.onscroll= function() {scrollfunction()};
	function scrollfunction(){

		if(document.body.scrollTop > 100 || document.documentElement.scrollTop >100){
			mybutton.style.display = "block";
		}else{
			mybutton.style.display ="none";
		}


	}
	function topFunction(){
		document.body.scrollTop = 0;
		document.documentElement.scrollTop =0;
	}
	
</script>


</body>
</html>