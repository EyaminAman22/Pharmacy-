<?php
    session_start();
    include('db_connect.php');
    $dman_id = $_SESSION['dman_id'];
    if(isset($_GET['active'])){
        $active = $_GET['active'];
        $sql1 = mysqli_query($conn, "UPDATE delivery_man SET active = '$active' WHERE user_id = '$dman_id'");
    }
?>
<!doctype html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="js/tailwind.config.js"></script>


</head>

<body class="m-0 p-0 font-pop">
    <div class="flex">
        <div class="w-1/5 bg-navy text-white font-semibold text-center pt-4">
            <h3 class="text-4xl pb-5">Pharma Mart</h3>
            <i class="fa-solid fa-user text-white text-[100px]"></i>
            <nav class="">
                <ul class="flex pt-10 flex-col text-20">
                    <a href="delivery-dashboard.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li>
                    </a>
                    <a href="delivery-order.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Orders</li>
                    </a>
                    <a href="delivery-orderdetails.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Order Details
                        </li>
                    </a>
                   
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-[297px] ">+880 20134-173959</h3>
        </div>
        <div class="w-4/5">
            <div class="w-auto bg-navy flex justify-around p-5 text-white ">
                <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-80px]"
                    placeholder="    Search Here">
                <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
                <a href="Cu-logout.php" class="font-semibold text-20 ml-[50px]">Log Out</a>
            </div>
               <div class="w-1/3 text-center mx-auto gap-y-12 justify-center mt-12">
                <div class="mb-12 text-4xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">Monthly Income</h1>
                    <h2>45tk</h2>
                </div>
                <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">New Order Accept?</h1>
                    <a class="hover:px-2 hover:py-2 hover:bg-white hover:text-navy hover:rounded-lg ease-in-out duration-700" href="delivery-dashboard.php?active=1">Yes</a>
                <a class="hover:px-2 hover:py-2 hover:bg-white hover:text-navy hover:rounded-lg ease-in-out duration-700" href="delivery-dashboard.php?active=0">No</a>
                </div>
        </div>
</body>

</html>