<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Serviss</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./css/reset.css" rel="stylesheet">
	<!-- #1 Plugin - Bootstrap plugin -->
	<link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
	<script src="./libs/jQuery/jquery2.1.4.min.js"></script>
	<script src="./libs/bootstrap/js/bootstrap.js"> </script>
	<link href="./css/noformejums1.css" rel="stylesheet">
	<!-- #2 Plugin - Translate Plugin -->
	<script src="./js/jquery.min.js"></script>

</head>



<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serviss</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="lang" key="index"  href="index">Sākums</a></li>
      <li><a class="lang" key="gallery" href="atteli">Galerija</a></li>
      <li><a class="lang" key="video" href="video">Video galerija</a></li>
      <li><a class="lang" key="Form" href="Form">Aizpildīšanas forma</a></li>
      <li><a class="lang" key="location" href="#vieta">Atrašanās vieta</a></li>
	  <li><a class="lang" key="rent" href="#noma">Auto noma</a></li>
      <li><a class="lang" key="time" href="#laiks">Darba laiks</a></li>
    </ul>
    <ul class="languages-list navbar-right">
        <button id="lv" class="translate"><li class="languages-item">LV</li></button>
        <button id="eng" class="translate"><li class="languages-item">ENG</li></button>    
    </ul>

	</ul>
  </div>
</nav>

<div class='main'>

	<h1 class="lang" key="slide">
		Slīdrāde
	</h1>
	<!-- #3 Plugin - Twitter retweet -->
	<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<div class='main-inside' id="test">
			
		<img class="mySlides" src="img/slide1.jpg" style="width:50%">
  		<img class="mySlides" src="img/slide2.jpg" style="width:50%">
  		<img class="mySlides" src="img/slide3.jpg" style="width:50%">
  		<img class="mySlides" src="img/slide4.jpg" style="width:50%">
		
	</div>
</div>	

<div class='main'>

	<h1 class="lang" key="location">
		Atrašanās vieta
	</h1>
	<div class='main-inside' id="vieta">
		<iframe class='mape' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29309.872057517445!2d24.147255224721135!3d56.90648531570964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31be9b9dc253d76c!2sAMSEK%20Autoserviss!5e0!3m2!1slv!2slv!4v1575647062468!5m2!1slv!2slv" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		
		
		<p class="lang" key="descr">
			«***» –  ir labākais autoserviss Rīgā. Vēršoties pie mums, Jums ir lieliskā iespēja pasūtīt Jūsu auto diagnostiku, jebkādā veida autotransporta remontu, kā arī apkopi. Mēs veicam visu auto remonta ciklu, sākot no diagnostikas līdz mašīnas mazgāšanai.  Jums nav nepieciešams meklēt citu servisu. Mēs visu izdarīsim ātri un uz vietas. Mūsu noliktavās ir visas nepieciešamas rezerves daļas, kā arī mūsu meistari ir augsti profesionāļi. Pie mums strādā tikai un vienīgi meistari ar lielu pieredzi savā jomā, kas īsā laika periodā salabos Jūsu automašīnu. APRIORESERVISS garantē Jums izdevīgas cenas, augsto darba kvalitāti, operativitāti un apzinīgumu ikviena pasūtījuma izpildes procesā.
		</p>	
		
	</div>
</div>
<div class='main'id="noma">

	<h1 class="lang" key="rent">
		Auto Noma
	</h1>
	<div class='main-inside'>
		<a href="noma1"><img width="20%" height="10%"src="img/1.jpg"></a>
		<a href="noma2"><img width="20%" height="10%"src="img/2.jpg"></a>
		<a href="noma3"><img width="20%" height="10%"src="img/3.jpg"></a>
		<a href="noma4"><img width="20%" height="10%"src="img/4.jpg"></a>
		<a href="noma5"><img width="20%" height="10%"src="img/5.jpg"></a>
		<a href="noma6"><img width="20%" height="10%"src="img/6.jpg"></a>
		<a href="noma7"><img width="20%" height="10%"src="img/7.jpg"></a>
		<a href="noma8"><img width="20%" height="10%"src="img/8.jpg"></a>
	</div>
</div>
<div class='main'>
	<h1 class="lang" key="time">
		Darba laiks
	</h1>
	<div class='main-inside'>
		<table class="table" id ="laiks">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th class="lang" key="DayWeek" scope="col">Nedēļas diena</th>
		      <th class="lang" key="timeTable" scope="col">Laiks</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td class="lang" key="monday">Pirmdiena</td>
		      <td>8:00-18:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td class="lang" key="tuesday">Otrdiena</td>
		      <td>8:00-18:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td class="lang" key="wednesday">Trešdiena</td>
		      <td>8:00-18:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">4</th>
		      <td class="lang" key="thursday">Ceturtdiena</td>
		      <td>8:00-18:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">5</th>
		      <td class="lang" key="friday">Piektdiena</td>
		      <td>8:00-18:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">6</th>
		      <td class="lang" key="saturday">Sestdiena</td>
		      <td>10:00-15:00</td>
		      
		    </tr>
		    <tr>
		      <th scope="row">7</th>
		      <td class="lang" key="sunday">Svētdiena</td>
		      <td>-</td>
		      
		    </tr>
		  </tbody>
		</table>		
	</div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>