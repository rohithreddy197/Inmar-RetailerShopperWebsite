<html>
    <head>

        <title>Inmar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">



<style>
body {
    background-image: url("images/frat18.jpg");
     background-repeat: no-repeat;
     background-size: cover;
}
</style>
<style>
h1
{
	text-align:center;
	color:red;
}
button
{
	width:200px;
	height:50px;
} 
button a:visited 
{
    color: green;
    background-color: transparent;
    text-decoration: none;
padding:20px;
}
button a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
   padding:20px;
}
button a:active {
    color: green;
    background-color: transparent;
    text-decoration: underline;
 padding:20px;   
}
.centered{
position:absolute;
left:40%;
top:15%;
}
.a{
margin-left:300px;
margin-top:300px;
position:absolute;
}
</style>
</head>
    <body>
        
           <h1> Welcome Retailer!<h1>

           <div class="centered">
           <button type="button"><a href="create.php">CREATE STORE</a></button>
             <br>
              
            <br>
            <button type="button"><a href="update.html">UPDATE PRICES</a></button>
           <br>
             
             <br>
            <button type="button"><a href="additems.html">ADD NEW ITEMS</a></button>
          <br>
           <br>
                <button type="button"><a href="wallet.php">CHECK WALLET</a></button>
          <br>
           <br>
            <button type="button"><a href="store.php">CHECK STORE</a></button>
          <br>
           <br>
            <button type="button"><a href="custpurch.php">CUSTOMER PURCHASES</a></button>
          <br>
<br>
           <button type="button"><a href="logout.php">LOGOUT</a></button><br>
  </div>
    </body>
</html>
