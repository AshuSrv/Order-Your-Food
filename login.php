<html>
<head>
<title>HOME PAGE</title>
<?php session_start();
 
 $now = time();
 if($now > $_SESSION['expire'])
 {
     session_destroy();
    echo "<script>
alert('Session Expired');
window.location.href='http://192.168.64.2/web/test.php';
</script>";
 }?>
<style>

body {
    background-color: #fff;
    color: #777;
    font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
      -webkit-animation: fadein 3s; 
            animation: fadein 3s;
}
h1 {
    font-weight: bold;
    color: #444;
    font-size: 45px;
    text-align: center;
}

h3 {
    font-size: 25px;
    color: #444;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;

}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

p{
  font-weight: bold;
    color:black;
    text-align: center;
}
a {
    text-decoration: none;
    color: black;


}
a:hover {
    color: #444;
}

header logo {
  position: absolute;
  left: 30px;
  top: 0px;
}

header nav { 
    border-style: groove;
    border-width: 8px;
    margin-right:35px;
    margin-left:35px;
    text-align: center;
    background-image: linear-gradient(to right,red,#990012);
    
}
header nav ul li {
    display: inline-block;
    margin-top: 30px;
    margin-bottom:30px;
}
header nav ul li a {
    color: black;
    font-weight: bold;
    display: block;
    padding-left: 30px;
    margin-right: 150px;
    font-size: 22px;
}


.mid{
    font-weight: bold;
    font-size: 15px;
    width: 120px;
    text-align: center;
    height: 25px;
    text-decoration:underline;
    color: black;
    position: absolute;
    left: 82.5%;
    top: 3%; 

}

.mid label:hover{
    color: #444;
    cursor:pointer;
}

.mid .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #ccc;
  color: #444;
  text-align: center;
  border-radius: 2px;
  padding: 10px 10px;
  position: absolute;
  left: -0.5%;
    top:120%;

}

.mid:hover .tooltiptext {
  visibility: visible;
  -webkit-animation: fadein 1s; 
            animation: fadein 1s;
}

.imgcontainer {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 82%;
    top: -1%; 
  margin: 24px 0 12px 0;
}


img.avatar {
  width: 40px;
  border-radius: 80%;
}

figure img{
	height: 60%;
	width:100%;
	 position: relative;
}

#ham{
    border: 10px solid white;/*bhayankar 3d effect dete h ye dono line*/
    box-shadow: 0px 0px 5px 2px #ccc;
    font-weight: bolder;
}

figure button{
    width: 40px;
    height: 60px;
}

.next{   
    position: absolute;
    border: none;
    background-color: transparent;
    color: white;
    font-weight: bold;
    font-size: 28px;
    top: 595px;
    right: 46px;
}
button:hover{
    background-color: rgba(0,0,0,0.8);
}
.prev{
    border: none;
    background-color: transparent;
    position: absolute;
    color: white;
    font-weight: bold;
    font-size: 28px;
    top: 595px;
    left: 46px;
}

figure figcaption {
    position: absolute;
    font-weight: bold;
    border-style: solid;
    border-width: 3px;
    border-color: white;
    color: black;
    left: 570px;
    font-size: 40px;
    top: 610px;
    -webkit-animation: fadein 8s; 
            animation: fadein 8s;
}

figure figcaption:hover{
    background-color: #444;
}

figure figcaption a{
    color: white;
}

figure figcaption a:hover{
    color: white;
}

section label{
  
    background-color: #fff;
    font-weight: bold;
    color: #444;
    font-size: 45px;
    margin-left: 24%;
}

#secondary-content {
    padding: 60px 0;
    text-align: center;
}
#secondary-content article {
    margin-top: 40px;
    font-weight: bold;
    margin-left: 40px;
    border: 10px solid white;
    color: #02b8dd;
    box-shadow: 0px 0px 5px 2px #ccc;
    width: 402px;
    height: 270px;
    float: left;    /*isise float krke left side ajata h neeche ki jagah*/
    background-color: #f5f5f5;
}

#secondary-content article p {
    color: white;
}
#secondary-content article .overlay {
    background: rgba(70, 63, 57, 0.95);
    -webkit-transition: background-color 1000ms linear;
    -ms-transition: background-color 1000ms linear;
    transition: background-color 1000ms linear;
    height: 230px;
    width: 160px;
    padding: 20px;
}


#secondary-content article .overlay:hover {
    background: rgba(0, 0, 0, 0);
    -webkit-transition: background-color 1000ms linear;
    -ms-transition: background-color 1000ms linear;
    transition: background-color 1000ms linear;
    height: 230px;
    width: 160px;
    padding: 20px;
}




article h4 {
    border-bottom: 1px solid #02b8dd;
    padding-bottom: 20px;
}
.more-link {
    border: 1px solid #02b8dd;
    color: #02b8dd;
    padding: 6px 20px;
    border-radius: 3px;
}
.more-link:hover {
    background-color: #02b8dd;
    color: #fff;
}

footer {
    margin-top: 35%;
    border-style: groove;
    border-width: 10px;
    font-size: 20px;
    margin-right: 35px;
    text-decoration: none;
    margin-left: 35px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: bold;
    font-style: italic;
    text-align: center;
    background-image: linear-gradient(to right,red,#990012);
}

.w3-animate-fading{animation:fading 5s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.w3-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
.w3-animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
.w3-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.w3-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
.w3-animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
.w3-animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
.w3-animate-input{transition:width 0.4s ease-in-out}.w3-animate-input:focus{width:100%!important}

</style>

</head>
<body>
    <form method="POST" action="home.php" id="form1"></form>
<div class="header">
<header>
<logo><img src="logo" width="200px"></logo>
<h3>Welcome to the world's best food ordering website</h3>
<hgroup>
<h1>ORDER YOUR FOOD</h1>
<h3>Good Food Good Life</h3>
<div class="side">
<div class="imgcontainer">
  <img src="dash2"class="avatar">
  </div>
<div class="mid">
<span class="tooltiptext">Click to Log Out</span>
<a href="home.php"><?php echo $_SESSION['fname']; ?></a>
</div>
</div>
</hgroup>
<nav>
<ul>
<li><a href="login.php">HOME</a></li>
<li><a href="menu.php">MENU</a></li>
<li><a href="contactus.html">CONTACT US</a></li>
<li><a href="aboutus.html">ABOUT US</a></li>
</ul>
</nav>
</header>
</div>
</br>
<figure>
    <div id="ham">
        <img src="b.jpg"/>
    </div>
<button class="prev" onclick="prewImage()">&#10094;</button>
<button class="next" onclick="nextImage()">&#10095;</button>
</br>
<figcaption><a href="menu.php">ORDER NOW</a></figcaption>
</figure>  
</br>
<section>
<label>Must Try our new Delicious Cakes</label>
<div id="secondary-content">
        <article style="background-image: url('img/chocolavacake.jpg');">
            <div class="overlay">
                <h4>Choco Lava Cake</h4>
                <p><small>A petit gâteau, or chocolate fondant, is a dessert composed of a small chocolate cake with crunchy rind and mellow filling that is conventionally served hot.</small></p>
                <a href="menu.php" class="more-link">Order Now</a>
            </div>
        </article>
        <article style="background-image: url('img/berryblastcake.jpg');">
            <div class="overlay">
                <h4>Berry Blast Cake</h4>
                <p><small>This is a beautiful dessert created from two layers of sweet vanilla cake and a light cream filling with delicious raspberries and blueberries sitting atop .</small></p>
                <a href="menu.php" class="more-link">Order Now</a>
            </div>
        </article>
      </article>
      <article style="background-image: url('img/redvelvet.jpg');">
          <div class="overlay">
              <h4>Red Velvet Cake</h4>
              <p><small>The Most Amazing Red Velvet Cake recipe is moist, fluffy, and has the perfect balance between acidity and chocolate. Top it off with cream cheeses frosting !</small></p>
              <a href="menu.php" class="more-link">Order Now</a>
          </div>
      </article>
</div>
<div id="secondary-content">
    <article style="background-image: url('img/rainbow.jpg');">
        <div class="overlay">
            <h4>Rainbow Cake</h4>
            <p><small>A stunning celebration cake of six or seven colourful layers and a buttercream icing - an impressive showstopper, from BBC Good Food. One has to try this one !</small></p>
            <a href="menu.php" class="more-link">Order Now</a>
        </div>
    </article>
    <article style="background-image: url('img/fruitcake.jpg');">
        <div class="overlay">
            <h4>Fruit Cake</h4>
            <p><small>Fruit cake is a delicious festive recipe relished all over the world. This variation is a perfect winter treat with a mixture of fruits and grated carrots.</small></p>
            <a href="menu.php" class="more-link">Order Now</a>
        </div>
    </article>
  </article>
  <article style="background-image: url('img/whiteforest.jpg');">
      <div class="overlay">
          <h4>White Forrest Cake</h4>
          <p><small>A white cake overloaded with white chocolate and groomed with cherries on top can create a worldwide smile to anyone's face. You can't resist this cake !</small></p>
          <a href="menu.php" class="more-link">Order Now</a>
      </div>
  </article>
</div>
</section>
<div>
    <br>
    <br>
    <br>
    <br>
<footer><p>Created By AshuSrv With &#10084;</p>
<p>Contact information: <a href="mailto:ashusrv999@gmail.com">ashusrv999@gmail.com</a></p></footer>
</div>
</form>





<script>

        var slider_content = document.getElementById('ham');
        var image = ['a','b', 'c', 'd','e'];
        var i = image.length;
        // function for next slide 
        
        function nextImage(){
            if (i<image.length) {
                i= i+1;
            }else{
                i = 1;
            }
              slider_content.innerHTML = "<img class='mySlides w3-animate-fading' src="+image[i-1]+".jpg>";
        }
        function prewImage(){
        
        if (i<image.length+1 && i>1) {
            i= i-1;
        }else{
            i = image.length;
        }
          slider_content.innerHTML = "<img class='mySlides w3-animate-fading' src="+image[i-1]+".jpg>";
        
        }
        
        
        // script for auto image slider
        
        setInterval(nextImage , 3000);
        
            </script>


</body>

</html>

