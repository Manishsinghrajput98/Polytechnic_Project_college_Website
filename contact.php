<html>
<head>
<title>Contact</title>
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

<h1>Contact</h1>
<img src="images/ddd.jpg" width=50 height=50>
<h3> Mr. Dhanesh Patle </h3>
<p><b>About admin-> owner of this site as long as i have another website namely <a href="jobascent.html">www.jobascent.in</a>

</p><br>
<img src="images/mmm.jpg"width=50 height=50>
<h3> Mr. Manish Rajput </h3>
<p><b>About admin-> owner of this site as long as i have another website namely <a href="englishpoint.html">www.englishpoint.in</a>
</p><br>
<img src="images/sss.jpg"width=50 height=50>
<h3> Mr. Shailendra Dangi </h3>
<p><b>About admin-> owner of this site as long as i have another website namely <a href="savecowsavehuman.html">www.savecowsavehuman.in</a>
 </p><br>
<img src="images/rrr.jpg"width=50 height=50>
<h3> Mr. Rajendra Rajput </h3>
<p><b>owner of this site </b><br>
</p>
<img src="images/lll.jpg"width=50 height=50>
<h3> Mr. Laxman Rajput </h3>
<p><b>owner of this site </b><br>
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