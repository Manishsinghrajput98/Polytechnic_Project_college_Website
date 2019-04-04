<html>
<head>
<title>Faculties</title>
<link rel="stylesheet" type="text/css" href="css/grid.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/table.css" />
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</head>



<body>
<div class="container">
<div class="row">
<div class="col-12">
<img src="images/banner.jpg" width="100%" height="150px">
</div>
</div>
<div class="row">  <!--new row-->
<div class="col-12"> <!--new col-->
<?php
include('navigation.php');
?>
<!--col content-->
</div> <!--col end-->
</div>  <!-- row ends-->



<div class="row">  <!--new row-->
<div class="col-8"> <!--new col-->
<!--Displat list of topics-->

<h1>Faculties</h1>
<img src="images/RKS.jpg" width=50 height=50>
<h3> Mr. R. K. Soni </h3>
<p>
Principal SATI Polytechnic College Vidisha(m.p)</p>
<img src="images/KR.jpg"width=50 height=50>
<h3> Mr. Kamlesh Raghuwanshi</h3>
<p>
H.O.D IT Deptt</p>
<img src="images/333.jpg"width=50 height=50>
<h3> Mr.Prakash maravi </h3>
<p><br>
</p>
<img src="images/555.jpg"width=50 height=50>
<h3> Mr.Mahendra mor</h3>
<p><br>
</p>
<img src="images/222.jpg"width=50 height=50>
<h3> Mr. Jalaj tripathi</h3>
<p><br>
</p>
<img src="images/111.jpg"width=50 height=50>
<h3> Mr.Sanjeev parashar</h3>
<p><br>
</p>
<img src="images/444.jpg"width=50 height=50>
<h3> Mr. Ishrat sir</h3>
<p><br>
</p>









</div> <!--col end-->
<div class="col-4"> <!--new col-->
<div class="colwrap">




</div>
</div> <!--col end-->

</div>  <!-- row ends-->
<br>
<br>
<div style="clear:both;">
</div>




<?php include('footer.php');
	?>  
</div>
</body>
</html>