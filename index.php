<html>
<head>
 <link rel="stylesheet" href="CSS/index.css">
</head>
<Body>
	<div>
<div class="header">
	<img src="IMAGE/cool.jpg" class="image" style="border-radius: 7px;" width="40px" height="40px"></img>
  <a href="#default" class="logo"> INTEGRATED ENGINEERS POINTS</a>

  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
</div>
<br></br>
<!-- <Marquee>	<H1>Welcome</H1></Marquee> -->
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="IMAGE/img3.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="IMAGE/img4.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Two</div>
</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="IMAGE/img5.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Two</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div class="row1">
  <div class="column1" >
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="IMAGE/hvac.jfif" alt="HVAC" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>HVAC</h1> 
      <p>HVAC stands for heating, ventilation, and air conditioning. It's a system that controls the temperature, humidity, and air quality of a space. HVAC systems can include components like furnaces, boilers, air conditioning units, ventilation systems, air cleaners, humidifiers, and dehumidifiers</p> 
      
    </div>
  </div>
</div>

<!--    <div class="card">
      <img src="IMAGE/hvac.jfif" style="width:100%" height="100px">
      <h2>HVAC</h2>
    <p>HVAC stands for heating, ventilation, and air conditioning. It's a system that controls the temperature, humidity, and air quality of a space. HVAC systems can include components like furnaces, boilers, air conditioning units, ventilation systems, air cleaners, humidifiers, and dehumidifiers</p>
  </div> 
 -->
  </div>
  
  <div class="column1 ">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="IMAGE/duct.jfif" alt="DUCT AC" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>DUCT</h1> 
      <p >A ductable AC system is a type of central air conditioning where cooled air is distributed throughout a building through a network of hidden ducts, providing a discreet and even cooling solution by delivering air through vents strategically placed in ceilings or walls, with only the air grilles visible to the eye; essentially, the entire system is concealed within the building structure, offering a clean aesthetic appeal</p> 
    </div>
  </div>
</div>
  <!--  <div class="card">
      <img src="IMAGE/duct.jfif" style="width:100%" height="100px" >
    <h2>Ductable AC</h2>
    <p>A ductable AC system is a type of central air conditioning where cooled air is distributed throughout a building through a network of hidden ducts, providing a discreet and even cooling solution by delivering air through vents strategically placed in ceilings or walls, with only the air grilles visible to the eye; essentially, the entire system is concealed within the building structure, offering a clean aesthetic appeal</p>
  </div>
   -->
 </div>

  <div class="column1 ">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="IMAGE/domestic.jfif" alt="Domestic" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>DOMESTIC AC</h1> 
      <p>Domestic Air conditioning is simply air conditioning for your home. AC is becoming increasingly popular because the conventional methods of cooling homes are no longer working due to climate change (summers are much warmer now than it was before). Modern air conditioning will provide useful reliefs from heat or cold.</p> 
    </div>
  </div>
</div>
</div>

  <div class="column1 " >
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="IMAGE/chiller.jfif" alt="Chiler" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>CHILLER</h1> 
      <p>A chiller is a machine that removes heat from a liquid coolant via a vapor-compression, adsorption refrigeration, or absorption refrigeration cycles. This liquid can then be circulated through a heat exchanger to cool equipment, or another process stream (such as air or process water)</p> 
      
    </div>
  </div>
</div>
  <!--   <div class="card">
      <img src="IMAGE/chiller.jfif" style="width:100%" height="100px" >
    <h2>Chiller Unit</h2>
    <p>A chiller is a machine that removes heat from a liquid coolant via a vapor-compression, adsorption refrigeration, or absorption refrigeration cycles. This liquid can then be circulated through a heat exchanger to cool equipment, or another process stream (such as air or process water).</p>
</div>  -->
 </div>
</div>

<h2>Gallery</h2>

<!-- <img src="wall.jpg" width="auto" height="60%" ><p>HELLO World!</p></img> -->
</Body>
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html>


