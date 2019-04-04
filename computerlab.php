<html>
<head>
<title>Computer Lab | SATI IT POLYTECHNIC </title>
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

<h1>Computer Lab Of Information Technology Department</h1>
<h3> For Programming Languages</h3>
<p>Computer lab if well equiped with latest operating system computers along with all the latest programming languages installed  <br>
</p>
<h3> For Networking</h3>
<p>Computer lab if well equiped with latest operating system computers and all the system are connected so as to understand the concept of networking such as file sharing, internet sharing etc. <br>
</p>
<h3> For Networking</h3>
<p>Computer lab if well equiped with computer having latest operating systems. Microprocessor lab is also integrated in this lab so as to develop chip level skills. <br>
</p>











</div> <!--col end-->
<div class="col-4"> <!--new col-->
<div class="colwrap">


<img src="images/computerlab.jpg">

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