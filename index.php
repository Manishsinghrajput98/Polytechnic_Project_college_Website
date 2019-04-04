
<html>
<head>
<title> Home | SATI IT POLYTECHNIC </title>
<link rel="stylesheet" type="text/css" href="css/grid.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/table.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
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
<div class="row">
<div class="col-12">
<br>
<center>
<h1  style="font-family: monotype corsiva; font-size:36px; text-shadow:3px 3px #6ec8f0;">Information Technology Department</h1>
<center>
<br>
</div>
</div>


<div class="row">  <!--new row-->

<div class="col-3"> <!--new col-->
<div class="colwrap">

  <div class="enggback">
  <h2>Head Of Department</h2>
  
  <img src="images/KR.jpg" width="100%" height="50%">
  
  
  <p> Mr. Kamlesh Raghuwanshi
  <br>
  </p>
  <p><a href="hodmessage.php" class="btn-knowmore"> HOD's Message</a></p>

  </div>
 
</div>
</div>


<div class="col-3"> <!--new col-->
<div class="colwrap">

  <div class="enggback">
  <h2>Computer Lab</h2>
  
  <img src="images/computerlab.jpg" width="100%">
  
  
  <p> Advance computer lab for skill development.
  <br>
  </p>
  <p><a href="hodmessage.php?id=" class="btn-knowmore"> Computer Lab</a></p>

  </div>
 
</div>
</div>

<div class="col-3"> <!--new col-->
<div class="colwrap">

  <div class="enggback">
  <h2>Syllabus</h2>
  
  <img src="images/syllabus.jpg" width="100%">
  
  
  <p> Current syllabus that maps aicte standards.
  <br>
  </p>
  <p><a href="syllabus.php?id=" class="btn-knowmore"> Click here to Download syllabus</a></p>

  </div>
 
</div>
</div>
<div class="col-3"> <!--new col-->
<div class="colwrap">

  <div class="enggback">
  <h2>Notice for Students</h2>
  
  <img src="images/notice.jpg" width="100%">
  
  
  <p> Please check the notice for updates.
  <br>
  </p>
  <p><a href="notice.php" class="btn-knowmore"> Notice Board</a></p>

  </div>
 
</div>
</div>


</div>  <!-- row ends-->

<?php include('footer.php');
	?>  
</div>
</body>

