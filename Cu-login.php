<?php

    session_start();
    include('db_connect.php');
    
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $error = [];

        if(empty($username)){
            $error['username'] = "Please write your user name";
        }
        if(empty($pass)){
            $error['pass'] = "Please write your Password";
        }

        if(count($error)==0){
            $login_info = mysqli_query($conn, "SELECT* FROM customer_info WHERE c_name = '$username'");

            if (mysqli_num_rows($login_info) > 0){
            
                $row = mysqli_fetch_assoc($login_info);

                if ($row['pass'] == $pass) 
                {
                        $_SESSION['c_name'] = $username;
                        $_SESSION['c_phone'] = $row['c_phone'];
                        $_SESSION['customer_id'] = $row['customer_id'];
                        
                        header('Location: CustomerDashboard.php');
                    
                }
                else 
                {
                $pass_match = 'Password Incorrect';
                }
            } 

            else
            {
                $email_match = 'User not found';
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
                <form  class="bg-white flex flex-col rounded-3xl gap-y-5 p-[50px] text-center my-[161px]" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                    <h1 class="text-indigo text-44 font-pop font-semibold">Login</h1>
                    <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="text" placeholder="  User Name" name = "username">
    
                    <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="password" placeholder="  Password" name = "pass">
    
                    <input class="text-white text-24 font-semibold bg-indigo w-[120px] p-2 rounded-xl place-self-center ease-in duration-300 hover:bg-white hover:text-indigo hover:focus:ring hover:focus:border-blue-500 hover:outline" type="submit" placeholder="Login" name = "submit">
                    <span>
                    <?php
                        if(isset($email_match)){
                            echo $email_match;
                        }
                        elseif(isset($pass_match)){
                            echo $pass_match;
                        }
                    ?>
                    </span>
                    <h2 class="text-24 font-semibold">Don't have an Account? <a href="Cu-signup.php" class=" duration-700 ease-in-out text-violet-800 hover:bg-navy hover:text-white hover:px-4 hover:py-2 hover:rounded-xl">Sign up</a></h2>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
