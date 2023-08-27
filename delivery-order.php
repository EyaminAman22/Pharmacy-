<?php
    session_start();
    include('db_connect.php');

    $sql = "SELECT* FROM medicine WHERE category LIKE 'skincare'";
    $result = mysqli_query($conn,$sql);

    
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
            <h3 class="pt-2 pb-56 ">+880 20134-173959</h3>
        </div>
        <div class="w-4/5">
            <div class="w-auto bg-navy flex justify-around p-5 text-white ">
                <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-80px]"
                    placeholder="    Search Here">
                <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
                <a href="Cu-logout.php" class="font-semibold text-20 ml-[50px]">Log Out</a>
            </div>
            <div class="mt-2 ml-16 mx-auto text-center">
               <div class="flex mx-auto gap-x-12 justify-center mb-12">
                <div class="text-2xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">Drug Store Address</h1>
                    <h2>153 Karmicheal Road</h2>
                </div>
                <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">Delivery Address</h1>
                    <h2>153 Karmicheal Road</h2>
                </div>
                <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">Phone No.</h1>
                    <h2>001301231124</h2>
                </div>
               </div>
                
                    <div class="flex mx-auto gap-x-12 justify-center mb-12">
                        <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                            <h1 class="font-bold mb-8">Payment</h1>
                            <h2>1765TK</h2>
                            </div>
                            <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                                <h1 class="font-bold mb-8">Charge</h1>
                                <h2>45tk</h2>
                                </div>
                    </div>
                <div class="w-1/3 mx-auto">
                <div class="text-4xl bg-navy text-white p-6 rounded-xl">
                    <h1 class="font-bold mb-8">Confirm Order?</h1>
                    <a class="hover:px-2 hover:py-2 hover:bg-white hover:text-navy hover:rounded-lg ease-in-out duration-700" href="#">Proceed</a>
                <a class="hover:px-2 hover:py-2 hover:bg-white hover:text-navy hover:rounded-lg ease-in-out duration-700" href="#">Cancel</a>
                </div>
            </div>
            </div>
        </div>
</body>

</html>