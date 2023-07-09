<?php
    session_start();
    include 'db_connect.php';
    
    if(isset($_POST['submit'])){
        

        $c_name = $_POST['cname'];
        $cphone = $_POST['phone'];
        $c_pass = $_POST['pass'];

        $error = [];

        if(empty($c_name)){
            $error['cname'] = 'Please write the Customer Name';
        }
        if(empty($cphone)){
            $error['phone'] = 'Please write the Phone Number';
        }
        if(empty($c_pass)){
            $error['cpass'] = 'Please write the password';
        }

        if(count($error)==0){
            
            $insert = "INSERT INTO customer_info(c_name,c_phone,pass) VALUES ('$c_name','$cphone','$c_pass')";

            if(mysqli_query($conn,$insert)){
                $MSG = " Signup Successfully";
                header('Location: Cu-login.php');
            }
        }

    }

?>
<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/all.min.css">
  <script src="js/tailwind.config.js"></script>
</head>
<body class="m-0 p-0 font-pop">
    <div class="flex">
        <div class="w-3/5 bg-cover bg-med bg-fit">
        </div>
        <div class="w-2/5 bg-indigo item-center">
            <div class="w-3/5 mx-auto">
                <form  class="bg-white flex flex-col rounded-3xl gap-y-5 p-[50px] text-center my-[131px]" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
                    <h1 class="text-indigo text-44 font-pop font-semibold">Login</h1>
                    <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="text" placeholder="  User Name" name = "cname">
                    <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="number" placeholder="  Phone Number" name = "phone">
    
                    <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="password" placeholder="  Password" name = "pass">
    
                    <input class="text-white text-24 font-semibold bg-indigo w-[120px] p-2 rounded-xl place-self-center ease-in duration-300 hover:bg-white hover:text-indigo hover:focus:ring hover:focus:border-blue-500 hover:outline" type="submit" placeholder="Login" name = "submit">
                    <span>
                      
                    </span>
                    <h2 class="text-24 font-semibold">Already have an Account? <a href="" class=" duration-700 ease-in-out text-violet-800 hover:bg-navy hover:text-white hover:px-4 hover:py-2 hover:rounded-xl">Log in</a></h2>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
