<html>
<head>
<title>Your Cart</title>
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
    -webkit-animation: fadein 2s; 
            animation: fadein 2s;
}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}


h1 {
    font-weight: bold;
    color: #444;
    font-size: 45px;
    text-align: center;
}

h2{
    font-family: Roboto,sans-serif;
    font-weight: 400;
    font-size:30px;
    color: #828282;
}

h3 {
    font-size: 25px;
    color: #444;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
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

.imgcontainer {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 82%;
    top: -1%; 
  margin: 24px 0 12px 0;
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


img.avatar {
  width: 40px;
  border-radius: 80%;
}

figure img{
	height: 60%;
	width:100%;
	 position: relative;
}


.content{
    border-style:solid;
    border-width:2px;
    border-radius:2px;
}

table,th {
    text-align:center;
  border: 1px solid black;
  font-size:27px;
  color:black;
}

article{
    margin-top:50px;   
}

article .hexa{
    width:1185px;
    display:inline-block;
}

article .hexa2{
    width:222px;
    height:53px;
    text-align:center;
    display:inline-block;
    border:2px solid black;
    margin-left:5px;
    padding-bottom:20px;
    padding-top:0px;
}


button {
  color: white;
  padding:26px 20px 21px 20px;
  font-weight: bold;
  font-size: 25px;
  margin: 8px 0;
  cursor: pointer;
  width: 100%;
  background: linear-gradient(to left, black 10%, red 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: all 1.5s ease-out;
}

button:hover {

background-position: left bottom;
    color:black;
    cursor:pointer;
}
table{
    background-color:white;
}
tr{
    color:black;
}
a{
    color:black;
}

.name a{
    color:black;
}
td{
    font-size:20px;
    color:black;
}
.itemimage img{
    height:150px;
    weight:170px;
    border: 1px solid black;
   
}


</style>
</head>
<body>
<form action="payment.php" method="POST">
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
<div class="name"><a href="home.php"><?php echo $_SESSION['fname']; ?></a></div>
</div>
</div>
<hr>
<h2 style="text-align:center">- CART -</h2>
</header>
</div>
</hgroup>
<section>
    <div class="content">
    <table>
    <col width="20">
    <col width="200">
    <col width="800">
    <col width="200">
    <col width="200">
    <col width="200">
    

        <tr>
             <th height="40"><I>NO.<I></th>
             <th height="40"><I>Item<I></th>
             <th height="40" ><I>Your Orders<I></th>
             <th height="40" ><I>Price<I></th>
             <th height="40" ><I>Total<I></th>
             <th height="40" ><I>Remove<I></th>
        </tr>

        <?php
        $connect_mysql=mysqli_connect("localhost","root","","oyf2");
        if(!$connect_mysql)
        {
            alert("Connection Failed" .mysqli_connect_error());
        }
        $table=$_SESSION["fname"];
        $sql = "SELECT *FROM $table";
        $sql2="SELECT SUM(price) FROM $table";
        $result = $connect_mysql->query($sql);
        $result2 = $connect_mysql->query($sql2);
        $row2 = $result2->fetch_assoc();
        $iter=1;
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                //echo "<h1>"."id: " . $row["id"]. " - Price: " . $row["price"]. " " . $row["foodname"]."</h1>" ."<br>";
                echo '<tr>'.
                '<td height="70" >'.$iter.'</td>'.
                '<td height="70" >'.'<div class="itemimage"><img src='.$row["img"].'>'.'</td></div>'.
                '<td height="70" >'.$row['foodname'].'</td>'.
                '<td height="70" >'.$row['price'].'</td >'.
                '<td height="70" >'.$row['price'].'</td >'.
                '<td height="70" ><a href = "delete.php?id1=' .$row['id']. '">&times;';
           $iter++;
            }
        } else {
            echo "<td height='70' >"."Your Cart is Empty"."</td height='70'>";;
        }
        ?>
      
        
</table>
</div>
</section>
<article>
    <div class="hexa">
    <button type="submit">Checkout</button>
    </div>
    <div class="hexa2">
        <h3><?php echo "Total : ".$row2["SUM(price)"]." Rs";?></h4>
</div>
</article>
</form>
</body>
</html>