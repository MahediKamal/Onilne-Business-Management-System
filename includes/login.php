<?php 
    $title = "login";
    require_once 'header.php';
?>
      <style>
        body{
   background-image: url(https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmFja2dyb3VuZHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60) ;
   background-size: cover;
   background-attachment: fixed;

}
.form-container{
    border: 1px solid white;
    padding: 40px 60px;
    margin-top: 20vh;
    box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.25);
}
.btn
{
    border: none;
            outline: none;
            height: 45px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
         
}
.btn:hover{
    background: white;
    border: 1px solid;
    color: black;
}

      </style>

  </head>
  <body>

      <div class="container-fluid bg">
       
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
             <!--form-->
             <form class="form-container">
                <h1>Login</h1>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" placeholder="Enter email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" placeholder="Enter password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn ">Login</button>
              </form>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
          </div>
      </div>


      <?php require_once 'footer.php'; ?>

 
  </body>
</html>