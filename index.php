<?php
include_once 'includeDirectory/include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-size: 16px;
            color: rgb(189, 184, 184);
        }
       body{
           background-image: linear-gradient(45deg,#a64bf4,#00dbde,#fc00ff);
           line-height: 40px;
    
       

       }
        .content{
            text-align: center;
            font-weight: bolder;
            font-size: 2em;
            margin-top:20px;
            color: rgb(0, 0, 0);
        }
        
        input{
            display: flex;
            border: none;
            width: 100%;
            border-bottom: 1px grey solid;
            padding: 5px;
            background-color: transparent;
            font-size: 1.3em;
            font-weight: bolder;
            background-image: url()  no-repeat 70% 50%;
    
        }
        .custom-row{
            line-height: 50px;
        }
        .custom-container{
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            margin-top: 10px;
            height: 100%;
            min-width: 400px;
            min-height: 1080px;
            
        }
        
        input[type='button']{
            border-radius: 50px;
            background: url('arrow.png') no-repeat 70% 50%;
            background-image: linear-gradient(90deg,#fc00ff,#a64bf4,#00dbde);
            
            
        }
        select {
            background: transparent;
            border: none;
            width: 100%;
            -webkit-appearance: none;
            appearance: none;
            background: url('arrow.png') no-repeat 95% 50%;
            color: rgb(0, 0, 0);
            font-size: 1.2em;
            font-weight: bold;
            padding: 10px;
        }
        option{
            color: rgb(0, 0, 0);
        }
        label{
            color: rgb(32, 32, 32);
        }
        .custom{
            line-height: 20px;
        }
        .custom-con-2{
            align-content: center;
            padding: 20px;
            min-width: 400px;
        }
        .top{
            background: linear-gradient(45deg,#a64bf4,#00dbde,#fc00ff);
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="container">
            <div class="container custom-container">
               <div class="custom-con-2">
                    <div class="row custom-row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 content">Say Hello!</div>
                            <div class="col-md-4"></div>
                        </div><br>
                        <div class="row custom-row">
                             <div class="col-md-4"></div>
                             <div class="col-md-4">
             
                                 <div class="custom">
                                         <label for="enter your name">your name</label>
                                         <div class="row container">
                                             <input id='input-1' type="text" placeholder="enter your name" onfocus="onFocus(this)"
                                             onblur="onBlur(this)"
                                             name="name"
                                             >
                                         </div>
                                 </div>
                                 <br>
                                 <div class="custom">
                                         <label for="enter your name">your email </label>
                                         <div class="row container">
                                             <input id='input-2' type="email" placeholder="enter your email"
                                             onfocus="onFocus(this)"
                                             onblur="onBlur(this)"
                                             name="email"
                                             >
                                         </div>
                                 </div>
                                 <br>
                                 <div class="custom">
                                         <label for="enter your name">need services </label>
                                         <div class="row container">
                                                 <select name="choose services" id="" onfocus="onFocus(this)"
                                                 onblur="onBlur(this)"
                                                 name="service"
                                                 >
                                                         <option value="" class="top">Choose Services</option>
                                                         <option value="">online store</option>
                                                         <option value="">eCommerce</option>
                                                         <option value="">UI/UX designer</option>
                                                         <option value="">online services</option>
                                                 </select>
                                         </div>
                                 </div>
                                 <br>
                                 <div class="custom">
                                         <label for="enter your name">Select Budget </label>
                                         <div class="row container">
                                                 <select name="choose services" id="" onfocus="onFocus(this)"
                                                 onblur="onBlur(this)"
                                                 name="budget"
                                                 >
                                                         <option value="" class="top">Select Budget</option>
                                                         <option value="">1500$</option>
                                                         <option value="">2000$</option>
                                                         <option value="">3000$</option>
                                                         <option value="">any other</option>
                                                 </select>
                                         </div>
                                 </div>
                                 <br>
                                 <div class="custom">
                                         <label for="enter your name">Enter Your Message</label>
                                         <div class="row container">
                                             <input id='input-3' type="text" name="" id="" placeholder="leave a message here" onfocus="onFocus(this)"
                                             onblur="onBlur(this)"
                                             
                                             name="message">
                                         </div>
                                 </div>
                                </br>
                                 <div class="row container">
                                     <input type="button" name="submit" id="" value="submit" class="btn" onclick="check()">
                                 </div>
                             </div>
                             <div class="col-md-4"></div>
                         </div>
               </div>
            </div>
        </div>

    </form>
 
</body>
<?php
        $sql="SELECT *FROM formdata;";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck>0){
            while ($row=mysqli_fetch_assoc($result)){
                echo "<script>alert('Connected to some data base')</script>";
        }
        }
    ?>
<script src="app.js"></script>
</html>