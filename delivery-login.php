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
            $login_info = mysqli_query($conn, "SELECT* FROM delivery_man WHERE name = '$username'");

            if (mysqli_num_rows($login_info) > 0){
            
                $row = mysqli_fetch_assoc($login_info);

                if ($row['pass'] == $pass) 
                {
                        $_SESSION['dname'] = $username;
                        $_SESSION['mobile'] = $row['phone'];
                        $_SESSION['dman_id'] = $row['user_id'];
                        
                        header('Location: delivery-dashboard.php');
                    
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
        <div class="w-3/5 bg-cover bg-med">
        </div>
        <div class="w-2/5 bg-indigo h-[790px]">
            
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="bg-white flex flex-col w-3/5 rounded-3xl gap-y-5 p-[50px] text-center mx-auto my-[200px]" method = "POST">
                <h1 class="text-indigo text-44 font-pop font-semibold">Login</h1>
                <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="text" placeholder="  User Name" name = "username">

                <input class="w-[300px] h-[40px] rounded-xl outline outline-1" type="password" placeholder="  Password" name = "pass">

                <input class="text-white text-24 font-semibold bg-indigo w-[120px] p-2 rounded-xl place-self-center ease-in duration-300 hover:bg-white hover:text-indigo hover:focus:ring hover:focus:border-blue-500 hover:outline" type="submit" placeholder="Login" name = "submit">
                <br>
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
            </form>
        </div>
    </div>
</body>
</html>