<html>
<head>
<title> Career Guidance | Home </title>
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

<h1>About Us</h1>
<p><b>Information technology is an important and vital department of SATI POLYTECHNIC. All the advanced computer related cources are taught. The Faculties are very much experienced and are totally dedicated towards the growth of student and aligning the goals of the institution of achieving academic excellency.</b><br>
</p>


<h3> We Focus on Skills Development</h3>
<p>The skills that you develop as an engineer are incredibly valuable and highly sought after. The ability to provide practical solutions to problems is crucial and will give you great confidence when faced with any challenge or obstacle. here we focus on practical learning</p>






</div> <!--col end-->
<div class="col-4"> <!--new col-->
<div class="colwrap">
<h1 align="center"></h1>
<marquee direction="left" scrollamount="7px"> 
<img src="images/it1.jpg">
<img src="images/it2.jpg">
<img src="images/it3.jpg">
<img src="images/it4.jpg">

 </marquee>
</div>
</div> <!--col end-->

</div>  <!-- row ends-->
<br>
<br>
<div style="clear:both;">
</div>

<div class="row">

<div class="col-6">
<p style="padding:15px; margin-left:15px;">With changing trends in Technology enveloping every sector of global economy, engineering college  offers an appropriate ambiance for budding engineers.
  Engineers are serving as a fertile ground for the flowering of luminous minds. We foster the spirit of learning, inculcate in our students achievement orientation and a culture of experimentation.<br>
 
</p>
</div>

<div class="col-6">
<p style="padding:15px; margin-left:15px;">The most obvious is if you excel in math and science and you love building things, you definitely should explore pursuing an engineering degree! There are a lot of other reasons and benefits of becoming an engineer.<br>
</p>
<br>
<br>
<br>
</div>
</div>


<?php include('footer.php');
	?>  
</div>
</body>
</html>