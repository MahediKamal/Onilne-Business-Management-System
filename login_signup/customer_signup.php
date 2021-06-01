<?php 
    $title = "signup";
    require_once '../includes/header.php';
?>

     <!-- <form action="post_signup.php" method="post">

        <input type="text" name="CUSTOMER_ID" placeholder="CUSTOMER_ID" />
        <input type="text" name="CUSTOMER_NAME" placeholder="CUSTOMER_NAME" />

        <input type="text" name="CUSTOMER_CITY" placeholder="CUSTOMER_CITY" />

        <input type="submit" name="submit" />
    </form>  -->
    <!-- ///////////styles////////// -->
    <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background-color: rgb(219, 226, 226);
            }
            .row{
                background-color: white;
                border-radius: 30px;
                box-shadow: 12px 12px 22px grey;
            }
            img{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
            }
            .btn1{
                border: none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;
                font-weight: bold;
            }
            .btn1:hover{
                background: white;
                border: 1px solid;
                color: black;
            }
        .font-weight-bold {
            color: black;
            padding-top: 7px;
            margin-left: 25px;
            padding-bottom: 4px;
    
        }
    </style>


    
    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <img src="https://img.freepik.com/free-photo/beautiful-asian-woman-carrying-colorful-bags-shopping-online-with-mobile-phone_8087-3877.jpg?size=626&ext=jpg"  height="550" width="500" alt="" >
                </div>
                <div class="col-lg-7 px-5 ">
                    <h1 class="font-weight-bold  ">Signup</h1>

                    <!-- ............................form.................... -->
                    <form action="customer_post_signup.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="cst_id" placeholder="ID" class="form-control my-2 p-2 mx-4" >
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="cst_name" placeholder="Name" class="form-control my-2 p-2 mx-4">
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" name="cst_phone" placeholder="Phone-number" class="form-control my-2 p-2 mx-4">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-7">
                                            <input type="text" name="cst_email" placeholder="Email" class="form-control my-2 p-2 mx-4">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-7">
                                                <input type="text" name="cst_city" placeholder="City" class="form-control my-2 p-2 mx-4">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-7">
                                                    <input type="text" name="cst_houseno" placeholder="Holding Number" class="form-control my-2 p-2 mx-4">
                                                </div>

                                                <div class="form-row">
                                                <div class="col-lg-7">
                                                    <input type="text" name="cst_street" placeholder="Street Number" class="form-control my-2 p-2 mx-4">
                                                </div>
                                                <div class="form-row">
                                                <div class="col-lg-7">
                                                    <input type="text" name="cst_password" placeholder="*********" class="form-control my-2 p-2 mx-4">
                                                </div>


                                                <div class="form-row">
                                                    <div class="col-lg-7 mx-4 my-3">
                                     
                                                 <input class="btn1" type="submit" name="Signup">
                                                  
                                               

                                                    </div>                    
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>

    </section>


<?php require_once '../includes/footer.php'; ?>