<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Shoppers Stop-Men</title>

<!--JQuery--------------->
<script src="js/JQuery.js"></script>
<!--fav-icon---------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using FontAwesome--------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
	<!--style----->
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    body{
    margin:0px;
    padding: 0px;
    font-family: poppins;
    background-color: white;
}
*{
    box-sizing: border-box;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}

footer{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    border-top: 1px solid rgba(0,0,0,0.1);
    flex-wrap: wrap;
    margin-top: 20px;
}
.copyright{
    font-size: 0.9rem;
    color: #4e4e4e;
    letter-spacing: 1px;
}
.subscribe input{
    width:240px;
    height: 43px;
    padding: 0px 20px;
    border: 1px solid rgba(0,0,0,0.1);
    outline: none;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
}
.subscribe input[type="submit"]{
    width:120px;
    background-color: #0b9d8a;
    color: #ffffff;
    margin: 0px 5px;
}

</style>
	
    </head>

    <body>

 <!--footer---------------------------->
 <footer>
  <!--copyright-------------->
  <span class="copyright">
      Copyright 2020 - Shoppers Stop
  </span>
  <!--subcribe---------------->
  <div class="subscribe">
      <form>
      <input type="email" placeholder="Example@gmail.com" required/>
      <input type="submit" value="Subscribe">
      </form>
  </div>
</footer>


</body>
</html>
