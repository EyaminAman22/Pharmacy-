<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li></a>
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Employee</li></a>
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Products</li></a>
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Company</li></a>
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Invoice</li></a>
                    <a href=""><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Monthly Revenue</li></a>
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
    </div>
    <div class="w-4/5">
        <div class="w-auto bg-navy flex justify-around p-5 text-white">
            <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-100px]" placeholder="    Search Here">
            <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
            <a href="" class="font-semibold text-20 ml-[50px]">Log Out</a>
        </div>
        
        <div class="flex p-5 justify-around pt-28">
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-36" src="images/employee.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Add Employee</h4>
            </div>
        </a>
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-36" src="images/company.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Add Company</h4>
            </div>
        </a>
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-36" src="images/invoice.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Add Invoice</h4>
            </div>
        </a>
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-36" src="images/out-of-stock.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Out of Stock</h4>
            </div>
        </a>
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-36" src="images/expired.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Expiry</h4>
            </div>
        </a>
        </div>
        <div class="flex p-5 justify-around">
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-36" src="images/medicine.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Add Products</h4>
                </div>
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-36" src="images/sales.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Monthly Sales</h4>
                </div>
            </a>

            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-36" src="images/order.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Check Orders</h4>
                </div>
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-36" src="images/cart.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Add to Cart</h4>
                </div>
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-36" src="images/payment.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Payments</h4>
                </div>
            </a>
            </div>
    </div>
    
</div>
</body>
</html>
