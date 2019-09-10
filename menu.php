<!DOCTYPE html>
<html>
 
<head>
    <title>Menu</title>

    <?php
    session_start();
    $x=2;
    if($_SESSION['index']==$x){
    echo "<script>
alert('Item Added');
</script>";

$_SESSION['index']=1;
    }?>

    <style>
html {
  scroll-behavior: smooth;
}
body{
    -webkit-animation: fadein 2s; 
            animation: fadein 2s;
}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

header{
    position: fixed;
   width: 75%;
   margin-left: 360px;
   background-color: white;
   height: 80px;
   margin-top: -200px;
}

header img{
    position: fixed;
    margin-left: 960px;
   margin-top: -68px;
}

h1{
    font-size: 35px;
}

    h2{
        text-decoration: underline;
        font-weight: bold;
    }
        nav{
            margin-left: -8px;
            position: fixed;
            margin-top: -200px;
            width: 400px;
            background-color: #990012;
            height: 100%;
        }

        nav h3{
            text-align: center;
            margin-bottom: 10px;
            font-size: 60px;
            color: aliceblue;
            font-family: cursive;
        }

        nav h4{
            text-align: center;
            font-size: 30px;
            color: aliceblue;
            margin-bottom: 10px;
            font-family: cursive;
        }
        nav ul{
            margin-left: -35px;
            font-size: 20px;
            font-weight: bold;
            color: aliceblue;
            text-align: center;
            text-decoration: none;
        }
        nav ul li{
            list-style-type: none;
            margin: 10px 10px;
            color:white;
        }


 .tooltiptext {
  visibility:hidden;
  width: 120px;
  background-color: #ccc;
  color: #444;
  text-align: center;
  border-radius: 2px;
  padding: 10px 10px;
  position: fixed;
    margin-left: 915px;
   margin-top: -18px;

}


.mid:hover .tooltiptext {
  visibility: visible;
  -webkit-animation: fadein 1s; 
            animation: fadein 1s;
}
p{
    font-size:20px;
    font-weight:bold;
}


section{
    margin-left: 400px;
    margin-top: 200px;
    
}
#secondary-content{
    font-family: fantasy;
}

.hell{
    margin-bottom: 800px;
    margin-left: 25px;
}

#veg{
    margin-top: 140%;
}

#breads{
    margin-top: 180%;
}

#secondary-content article {
    margin-top: 50px;
    font-weight: bold;
    margin-left: 40px;
    text-align: center;
    border: 10px solid white;
    color: #02b8dd;
    box-shadow: 0px 0px 5px 2px #ccc;
    width: 402px;
    height: 270px;
    float: left;    /*isise float krke left side ajata h neeche ki jagah*/
    background-color: #f5f5f5;
}

        #secondary-content article p {
            margin-bottom: 120px;
    color: white;
    text-align: center;
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
    color:White;
}

nav ul a h4:hover{
    color:black;
    transition:transform .5s;
    cursor:pointer;
}

nav ul a li:hover{
    color:black;
    transition:transform .5s;
    cursor:pointer;
}
.more-link {
    border: 1px solid #02b8dd;
    color: #02b8dd;
    padding: 6px 20px;
    font-weight:bold;
    border-radius: 3px;
   background: linear-gradient(to left, white 50%, black 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: all .5s ease-out;
}
.more-link:hover {
    background-position: left bottom;
    cursor:pointer;
}

        </style>
</head>
<body>
    <header>
        <h1 style="text-align:center">SELECT FROM VARIETY OF FOODS</h1>
        <div class="mid">
        <span class="tooltiptext">Click to Check Cart</span>
        <a href="cart.php"><img src="cart.jpg" height="50px" width="50px"></a>
</div>
    </header>
  
    <nav>
        
        <ul>
            <h3>Menu</h3>
            <a style="text-decoration:none;" href="#top"><h4>Fast Foods</h4></a>
            <a style="text-decoration:none;" href="#top"><li>Pizza</li></a>
            <a style="text-decoration:none;" href="#burger"><li>Burger</li></a>
            <a style="text-decoration:none;" href="#pasta"><li>Pasta</li></a>
            <a style="text-decoration:none;" href="#noodles"><li>Noodles</li></a>
            <a style="text-decoration:none;" href="#wraps"><li>Wraps</li></a>
           <a style="text-decoration:none;" href="#maincourse"> <h4>Main Course</h4></a>
           <a style="text-decoration:none;" href="#nonveg"><li>Non Veg</li></a>
           <a style="text-decoration:none;" href="#veg"><li>Veg</li></a>
           <a style="text-decoration:none;" href="#breads"><li>Breads</li></a>
           <a style="text-decoration:none;" href="#dessert"><h4>Dessert</h4></a>
           <a style="text-decoration:none;" href="#icecreams"><li>Ice Creams</li></a>
           <a style="text-decoration:none;" href="#Pastrys"><li>Pastrys</li></a>
        </ul>
    </nav>
    
    <section>
           <div id="fastfoods"> <h1 style="text-align:center">- FAST FOODS -</h1></div>
            
                <div id="secondary-content">
                <div id="pizza">  <h2 style="text-align:center">Pizza</h2></div>
                    <hr>
                    <div class="hell">
                        
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/p1.jpg');">
                            <div class="overlay">
                                <h4>Margherita Pizza</h4>
                                  <p>Price : 120</p>
                                    <input type="hidden" name="header" value="Pastry">
                                <input type="hidden" name="price" value="120">
                                <input type="hidden" name="header" value="Margherita Pizza">
                                <input type="hidden" name="img" value="img/p1.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                          </article>
                    </form>
                   
                    
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/p2.jpg');">
                            <div class="overlay">
                                <h4>Mexican Green Wave</h4>
                                  <p>Price : 250</p>
                                    <input type="hidden" name="header" value="Mexican Green Wave">
                                <input type="hidden" name="price" value="250">
                                <input type="hidden" name="img" value="img/p2.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>
                    
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/p3.jpg');">
                                <div class="overlay">
                                    <h4>Farm House</h4>
                                      <p>Price : 200</p>
                                    <input type="hidden" name="header" value="Farm House">
                                <input type="hidden" name="price" value="200">
                                    <input type="hidden" name="img" value="img/p3.jpg">
                                <button class="more-link">Order Now</button>
                                </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/p4.jpg');">
                            <div class="overlay">
                                <h4>Chicken Dominator</h4>
                                  <p>Price : 400</p>
                                    <input type="hidden" name="header" value="Chicken Dominator">
                                <input type="hidden" name="price" value="400">
                                <input type="hidden" name="img" value="img/p4.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    
                    </div> 
                </div>
                
                <div id="secondary-content">
                   <div id="burger"> <h2 style="text-align:center">Burger</h2></div>
                    <hr>
                <div class="hell">
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/bb1.jpg');">
                            <div class="overlay">
                                <h4>Aloo Tikki Burger</h4>
                                  <p>Price : 70</p>
                                    <input type="hidden" name="header" value="Aloo Tikki Burger">
                                <input type="hidden" name="price" value="70">
                                <input type="hidden" name="img" value="img/bb1.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/bb2.jpg');">
                            <div class="overlay">
                                <h4>Classic Veg Burger</h4>
                                  <p>Price : 80</p>
                                    <input type="hidden" name="header" value="Classic Veg Burger">
                                <input type="hidden" name="price" value="80">
                                <input type="hidden" name="img" value="img/bb2.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/bb3.jpg');">
                                <div class="overlay">
                                    <h4>Chicken Burger</h4>
                                      <p>Price : 90</p>
                                    <input type="hidden" name="header" value="Chicken Burger">
                                <input type="hidden" name="price" value="90">
                                    <input type="hidden" name="img" value="img/bb3.jpg">
                                <button class="more-link">Order Now</button>
                                </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/bb4.jpg');">
                            <div class="overlay">
                                <h4>Fish Burger</h4>
                                  <p>Price : 90</p>
                                    <input type="hidden" name="header" value="Fish Burger">
                                <input type="hidden" name="price" value="90">
                                <input type="hidden" name="img" value="img/bb4.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    </div>       
                </div>

                <div id="secondary-content">
                   <div id="pasta"> <h2 style="text-align:center">Pasta</h2></div>
                    <hr>
                    <div class="hell">
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/pp1.jpg');">
                            <div class="overlay">
                                <h4>Arabita Pasta</h4>
                                  <p>Price : 120</p>
                                    <input type="hidden" name="header" value="Arabita Pasta">
                                <input type="hidden" name="price" value="120">
                                <input type="hidden" name="img" value="img/pp1.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/pp3.jpg');">
                            <div class="overlay">
                                <h4>Mediterian Pasta</h4>
                                  <p>Price : 140</p>
                                    <input type="hidden" name="header" value="Mediterian Pasta">
                                <input type="hidden" name="price" value="140">
                                <input type="hidden" name="img" value="img/pp3.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/pp4.jpg');">
                                <div class="overlay">
                                    <h4>Penne Pasta</h4>
                                      <p>Price : 140</p>
                                    <input type="hidden" name="header" value="Penne Pasta">
                                <input type="hidden" name="price" value="140">
                                    <input type="hidden" name="img" value="img/pp4.jpg">
                                <button class="more-link">Order Now</button>
                                </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/pp2.jpg');">
                            <div class="overlay">
                                <h4>Spagheti Pasta</h4>
                                  <p>Price : 160</p>
                                    <input type="hidden" name="header" value="Paneer Spagheti Pasta">
                                <input type="hidden" name="price" value="160">
                                <input type="hidden" name="img" value="img/pp2.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>
 
                    </div>      
                </div>

                <div id="secondary-content">
                   <div id="noodles"> <h2 style="text-align:center">Noodles</h2></div>
                    <hr>
                    <div class="hell">
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/n1.jpg');">
                            <div class="overlay">
                                <h4>Veg Noodles</h4>
                                  <p>Price : 100</p>
                                    <input type="hidden" name="header" value="Veg Noodles">
                                <input type="hidden" name="price" value="100">
                                <input type="hidden" name="img" value="img/n1.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/n2.jpeg');">
                            <div class="overlay">
                                <h4>Paneer Noodles</h4>
                                  <p>Price : 120</p>
                                    <input type="hidden" name="header" value="Paneer Noodles">
                                <input type="hidden" name="price" value="120">
                                <input type="hidden" name="img" value="img/n2.jpeg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/n3.jpg');">
                                <div class="overlay">
                                    <h4>Chicken Noodles</h4>
                                      <p>Price : 150</p>
                                    <input type="hidden" name="header" value="Chicken Noodles">
                                <input type="hidden" name="price" value="150">
                                    <input type="hidden" name="img" value="img/n3.jpg">
                                <button class="more-link">Order Now</button>
                                </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/n4.jpg');">
                            <div class="overlay">
                                <h4>Hakka Noodles</h4>
                                  <p>Price : 170</p>
                                    <input type="hidden" name="header" value="Hakka Noodles">
                                <input type="hidden" name="price" value="170">
                                <input type="hidden" name="img" value="img/n4.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                        
                    </div>     
                </div>

                <div id="secondary-content">
                   <div id="wraps"> <h2 style="text-align:center">Wraps</h2></div>
                    <hr>
                    <div class="hell">
                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/w1.jpeg');">
                            <div class="overlay">
                                <h4>Veg Wrap</h4>
                                  <p>Price : 60</p>
                                    <input type="hidden" name="header" value="Veg Wrap">
                                <input type="hidden" name="price" value="60">
                                <input type="hidden" name="img" value="img/w1.jpeg">
                                <button class="more-link">Order Now</button>
                            </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/w2.jpg');">
                            <div class="overlay">
                                <h4>Paneer Wrap</h4>
                                  <p>Price : 70</p>
                                    <input type="hidden" name="header" value="Paneer Wrap">
                                <input type="hidden" name="price" value="70">
                                <input type="hidden" name="img" value="img/w2.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/w3.jpg');">
                                <div class="overlay">
                                    <h4>Chicken Wrap</h4>
                                      <p>Price : 90</p>
                                    <input type="hidden" name="header" value="Chicken Wrap">
                                <input type="hidden" name="price" value="90">
                                    <input type="hidden" name="img" value="img/w3.jpg">
                                <button class="more-link">Order Now</button>
                                </div>
                          </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/w4.jpg');">
                            <div class="overlay">
                                <h4>Aloo Tikki Wrap</h4>
                                  <p>Price : 70</p>
                                    <input type="hidden" name="header" value="Aloo Tikki Wrap">
                                <input type="hidden" name="price" value="70">
                                <input type="hidden" name="img" value="img/w4.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>       
                </div>
            </div>


            <div id="maincourse"><h1 style="text-align:center">- MAIN COURSE -</h1></div>
            <div id="secondary-content">
                <div id="nonveg"><h2 style="text-align:center">Non Veg</h2></div>
                <hr>
                <div class="hell">
                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c1.jpg');">
                        <div class="overlay">
                            <h4>Butter Chicken</h4>
                              <p>Price : 300</p>
                                    <input type="hidden" name="header" value="Butter Chicken">
                                <input type="hidden" name="price" value="300">
                            <input type="hidden" name="img" value="img/c1.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c2.jpg');">
                        <div class="overlay">
                            <h4>Chicken Tikka</h4>
                              <p>Price : 300</p>
                                    <input type="hidden" name="header" value="Chicken Tikka masala">
                                <input type="hidden" name="price" value="300">
                            <input type="hidden" name="img" value="img/c2.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c3.jpg');">
                            <div class="overlay">
                                <h4>Chicken Afgani</h4>
                                  <p>Price : 300</p>
                                    <input type="hidden" name="header" value="Chicken Afgani">
                                <input type="hidden" name="price" value="300">
                                <input type="hidden" name="img" value="img/c3.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c4.jpg');">
                        <div class="overlay">
                            <h4>Mutton Masala</h4>
                              <p>Price : 380</p>
                                    <input type="hidden" name="header" value="Mutton Masala">
                                <input type="hidden" name="price" value="380">
                            <input type="hidden" name="img" value="img/c4.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c6.jpg');">
                        <div class="overlay">
                            <h4>Chicken Chilly</h4>
                              <p>Price : 320</p>
                                    <input type="hidden" name="header" value="Chicken Chilly">
                                <input type="hidden" name="price" value="320">
                            <input type="hidden" name="img" value="img/c6.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c5.jpg');">
                        <div class="overlay">
                            <h4>Chicken Manchurian</h4>
                              <p>Price : 320</p>
                                    <input type="hidden" name="header" value="Chicken Manchurian">
                                <input type="hidden" name="price" value="320">
                            <input type="hidden" name="img" value="img/c5.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c7.jpg');">
                        <div class="overlay">
                            <h4>Chicken 65</h4>
                              <p>Price : 300</p>
                                    <input type="hidden" name="header" value="Chicken 65">
                                <input type="hidden" name="price" value="300">
                            <input type="hidden" name="img" value="img/c7.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>


                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/c8.jpg');">
                        <div class="overlay">
                            <h4>Chicken Chettinad</h4>
                              <p>Price : 330</p>
                                    <input type="hidden" name="header" value="Chicken Chettinad">
                                <input type="hidden" name="price" value="330">
                            <input type="hidden" name="img" value="img/c8.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                </div>      
            </div>

            <div id="secondary-content">
                <div id="veg"> <h2 style="text-align:center">Veg</h2></div>
                <hr>
                <div class="hell">
                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v1.jpg');">
                        <div class="overlay">
                            <h4>Butter Paneer</h4>
                              <p>Price : 250</p>
                                    <input type="hidden" name="header" value="Butter Paneer Masala">
                                <input type="hidden" name="price" value="250">
                            <input type="hidden" name="img" value="img/v1.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v2.jpg');">
                        <div class="overlay">
                            <h4>Paneer Tikka</h4>
                              <p>Price : 250</p>
                                    <input type="hidden" name="header" value="Paneer Tikka Masala">
                                <input type="hidden" name="price" value="250">
                            <input type="hidden" name="img" value="img/v2.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v3.jpg');">
                            <div class="overlay">
                                <h4>Chilly Paneer</h4>
                                  <p>Price : 240</p>
                                    <input type="hidden" name="header" value="Chilly Paneer">
                                <input type="hidden" name="price" value="240">
                                <input type="hidden" name="img" value="img/v3.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v4.jpg');">
                        <div class="overlay">
                            <h4>Manchurian</h4>
                              <p>Price : 240</p>
                                    <input type="hidden" name="header" value="Manchurian">
                                <input type="hidden" name="price" value="240">
                            <input type="hidden" name="img" value="img/v4.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v5.jpg');">
                        <div class="overlay">
                            <h4>Dum Aloo</h4>
                              <p>Price : 200</p>
                                    <input type="hidden" name="header" value="Dum Aloo">
                                <input type="hidden" name="price" value="200">
                            <input type="hidden" name="img" value="img/v5.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>


                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v6.jpg');">
                        <div class="overlay">
                            <h4>Mix Veg</h4>
                              <p>Price : 200</p>
                                    <input type="hidden" name="header" value="Mix Veg">
                                <input type="hidden" name="price" value="200">
                            <input type="hidden" name="img" value="img/v6.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v7.jpg');">
                        <div class="overlay">
                            <h4>Dal Makhani</h4>
                              <p>Price : 170</p>
                                    <input type="hidden" name="header" value="Dal Makhani">
                                <input type="hidden" name="price" value="170">
                            <input type="hidden" name="img" value="img/v7.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>



                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v8.jpg');">
                        <div class="overlay">
                            <h4>Dal Fry</h4>
                              <p>Price : 170</p>
                                    <input type="hidden" name="header" value="Dal Fry">
                                <input type="hidden" name="price" value="170">
                            <input type="hidden" name="img" value="img/v8.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v9.jpg');">
                        <div class="overlay">
                            <h4>Kaju Curry</h4>
                              <p>Price : 230</p>
                                    <input type="hidden" name="header" value="Kaju Curry">
                                <input type="hidden" name="price" value="230">
                            <input type="hidden" name="img" value="img/v9.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>


                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/v10.jpg');">
                        <div class="overlay">
                            <h4>Malai Kofta</h4>
                              <p>Price : 230</p>
                                    <input type="hidden" name="header" value="Malai Kofta">
                                <input type="hidden" name="price" value="230">
                            <input type="hidden" name="img" value="img/v10.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>


                </div>      
            </div>


            <div id="secondary-content">
                <div id="breads"><h2 style="text-align:center">Breads</h2></div>
                <hr>
                <div class="hell">
                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/b1.jpg');">
                        <div class="overlay">
                            <h4>Butter Roti</h4>
                              <p>Price : 40</p>
                                    <input type="hidden" name="header" value="Butter Roti">
                                <input type="hidden" name="price" value="40">
                            <input type="hidden" name="img" value="img/b1.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/b2.jpg');">
                        <div class="overlay">
                            <h4>Butter Naan</h4>
                              <p>Price : 60</p>
                                    <input type="hidden" name="header" value="Butter Naan">
                                <input type="hidden" name="price" value="60">
                            <input type="hidden" name="img" value="img/b2.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/b3.jpg');">
                            <div class="overlay">
                                <h4>Garlic Naan</h4>
                                  <p>Price : 70</p>
                                    <input type="hidden" name="header" value="Garlic Naan">
                                <input type="hidden" name="price" value="70">
                                <input type="hidden" name="img" value="img/b3.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/b4.jpg');">
                        <div class="overlay">
                            <h4>Rumali Roti</h4>
                              <p>Price : 50</p>
                                    <input type="hidden" name="header" value="Rumali Roti">
                                <input type="hidden" name="price" value="50">
                            <input type="hidden" name="img" value="img/b4.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                </div>      
            </div>

           <div id="dessert"> <h1 style="text-align:center">- DESSERT -</h1></div>
            <div id="secondary-content">
               <div id="icecreams"> <h2 style="text-align:center">Ice Creams</h2></div>
                <hr>
                <div class="hell">
                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/i1.jpg');">
                        <div class="overlay">
                            <h4>StrawBerry</h4>
                              <p>Price : 100</p>
                                    <input type="hidden" name="header" value="StrawBerry Ice Cream">
                                <input type="hidden" name="price" value="100">
                            <input type="hidden" name="img" value="img/i1.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/i2.jpg');">
                        <div class="overlay">
                            <h4>Choclate</h4>
                              <p>Price : 90</p>
                                    <input type="hidden" name="header" value="Choclate Ice Cream">
                                <input type="hidden" name="price" value="90">
                            <input type="hidden" name="img" value="img/i2.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/i3.jpg');">
                            <div class="overlay">
                                <h4>ButterScotch</h4>
                                  <p>Price : 100</p>
                                    <input type="hidden" name="header" value="ButterScotch Ice Cream">
                                <input type="hidden" name="price" value="100">
                                <input type="hidden" name="img" value="img/i3.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/i4.jpg');">
                        <div class="overlay">
                            <h4>Oreo</h4>
                              <p>Price : 120</p>
                                    <input type="hidden" name="header" value="Oreo Ice Cream">
                                <input type="hidden" name="price" value="120">
                            <input type="hidden" name="img" value="img/i4.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                </div>      
            </div>

            <div id="secondary-content">
               <div id="Pastrys"> <h2 style="text-align:center">Pastrys</h2></div>
                <hr>
                <div class="hell">
                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/chocolavacake.jpg');">
                        <div class="overlay">
                        <h4>Choco Lava Pastry</h4>
                              <p>Price : 95</p>
                                    <input type="hidden" name="header" value="Choco Lava Pastry">
                                <input type="hidden" name="price" value="95">
                            <input type="hidden" name="img" value="img/chocolavacake.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/berryblastcake.jpg');">
                        <div class="overlay">
                            <h4>Berry Blast Pastry</h4>
                              <p>Price : 80</p>
                                    <input type="hidden" name="header" value="Berry Blast Pastry">
                                <input type="hidden" name="price" value="80">
                            <input type="hidden" name="img" value="img/berryblastcake.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/redvelvet.jpg');">
                            <div class="overlay">
                            <h4>Red Velvet Pastry</h4>
                                  <p>Price : 70</p>
                                    <input type="hidden" name="header" value="Red Velvet Pastry">
                                <input type="hidden" name="price" value="70">
                                <input type="hidden" name="img" value="img/redvelvet.jpg">
                                <button class="more-link">Order Now</button>
                            </div>
                      </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/rainbow.jpg');">
                        <div class="overlay">
                        <h4>Rainbow Pastry</h4>
                              <p>Price : 80</p>
                                    <input type="hidden" name="header" value="Rainbow Pastry">
                                <input type="hidden" name="price" value="80">
                            <input type="hidden" name="img" value="img/rainbow.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                    <form action="calc.php" method="POST">
                        <article style="background-image: url('img/fruitcake.jpg');">
                        <div class="overlay">
                        <h4>Fruit Pastry</h4>
                              <p>Price : 80</p>
                                    <input type="hidden" name="header" value="Fruit Pastry">
                                <input type="hidden" name="price" value="80">
                            <input type="hidden" name="img" value="img/fruitcake.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                        <form action="calc.php" method="POST">
                        <article style="background-image: url('img/whiteforest.jpg');">
                        <div class="overlay">
                        <h4>White Forrest Pastry</h4>
                              <p>Price : 80</p>
                                    <input type="hidden" name="header" value="White Forrest Pastry">
                                <input type="hidden" name="price" value="80">
                            <input type="hidden" name="img" value="img/whiteforest.jpg">
                                <button class="more-link">Order Now</button>
                        </div>
                  </article>
                    </form>

                </div>      
            </div>


        </section>
    
</body>
</html>