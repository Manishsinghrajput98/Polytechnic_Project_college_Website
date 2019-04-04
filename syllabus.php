<html>
<head>
<title>Syllabus | SATI IT POLYTECHNIC </title>
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

<h1>Download Syllabus from Here</h1>

<h3> First Sem & Second Sem</h3>
<p><a href="firstsecond.pdf">click here to Download</a>  <br>
</p>

<h3> Third year </h3>
<p><a href="third.pdf">click here to Download</a>  <br>
</p>
<h3> Fourth Sem </h3>
<p><a href="#">click here to Download</a>  <br>
</p>
<h3> Fifth Sem </h3>
<p><a href="fifth.pdf">click here to Download</a>  <br>
</p>
<h3> Sixth Sem </h3>
<p><a href="sixth,pdf">click here to Download</a>  <br>
</p>









</div> <!--col end-->
<div class="col-4"> <!--new col-->
<div class="colwrap">


<img src="images/syllabus.jpg">

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