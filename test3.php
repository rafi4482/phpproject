<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhakaChaka Car Rental</title>
    <link rel="stylesheet" href="test3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <?php
     if(isset($_POST['back'])){
        echo "inside back";
        echo "<script> location.href='myhome.php'</script>" ;
       }
    ?>
    <div class="container">
     <form class="form" id="form" action="test3.php" method="post">
        <h2>Register With DhakaChaka</h2>
       <div class="form-control ">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <div class="form-control ">
            <label for="address">Address</label>
            <input name="address" type="text" id="address" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <div class="form-control ">
            <label for="mobile">Mobile</label>
            <input name="mobile" type="text" id="mobile" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <div class="form-control ">
            <label for="email">Email</label>
            <input name="email" type="text" id="email" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <div class="form-control ">
            <label for="password">Password</label>
            <input name="password" type="password" id="password" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <div class="form-control ">
            <label for="cpassword">Confirm Password</label>
            <input name="cpassword" type="password" id="cpassword" placeholder="Type your name" />
            <small>Error message</small>
       </div>
       <button type="submit" name="submit" id="submit" >Submit</button>
       <button type="submit" name="back" onclick="return backPage()" >Back</button>
</form>
    </div>
<div id="message">

</div>
 <script src="test3.js"></script>
<script>
    function backPage(){
        window.location.href="index.php";
    }
</script> 
<script>


    $(document).ready(function (){
        
        $("#submit").click(function (){
            let name=$("#name").val();
            let address=$("#address").val();
            let mobile=$("#mobile").val();
            let email=$("#email").val();
            let password=$("#password").val();
            let cpassword=$("#cpassword").val();
           
            


            //alert('name='+name+address+mobile+email+password+cpassword);
            $.ajax(
                {
                    url:"test4.php",
                    method:"POST",
                    data:
                    {
                        name1:name,
                        address1:address,
                        mobile1:mobile,
                        email1:email,
                        password1:password,
                        cpassword1:cpassword

                    },
                    success:function(response)
                    {
                       
                        if(response==0)
                        {
                            alert("Error: user already exists");   
                        }
                        else if(response==1)
                            {
                                alert("User registration successful");   
                            }
                            else if(response==2){
                                alert("Data access error");   
                            }
                            else if(response==3){
                                alert(" One or more fields are empty");   
                            }
                            else if(response==4){
                                alert(" Password does not matched");   
                            }
                    }
                }
            )
        })
    })
</script>
</body>
</html>