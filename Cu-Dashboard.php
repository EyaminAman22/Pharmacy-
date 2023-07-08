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
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Medicine</li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Surgical Equipment
                    </li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Health Care
                        products</li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Skin Care Products
                    </li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Baby Care Products
                    </li>
                </a>
                <a href="">
                    <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Food Supplyment and
                        Vitamins</li>
                </a>
            </ul>
        </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
    </div>
    <div class="w-4/5">
        <div class="w-auto bg-navy flex justify-around p-5 text-white ">
            <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-80px]" placeholder="    Search Here">
            <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
            <a href="Cu-logout.php" class="font-semibold text-20 ml-[50px]">Log out</a>
        </div>
    
<div id="default-carousel" class="relative w-full mt-[20px]" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./images/dash1.webp" class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./images/dash2.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./images/dash3.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./images/dash4.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/dash5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-gray-800" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-gray-800" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
</div>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        
    <div class="flex p-5 pt-12 justify-around">
        <a href="">
            <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                <img class=" w-24" src="images/addcart.png" alt="">
                <h4 class="text-white text-20 font-semibold pt-2">Add to Cart</h4>
            </div>
        </a>
            <a href="" class="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-24" src="images/prescription.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Prescription</h4>
                </div>
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-24" src="images/track.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Pending Order</h4>
                </div>
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-24" src="images/checklist.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Quick Order</h4>
                </div>
                <!-- asas -->
                <div class="prescription py-48 h-screen w-full fixed left-0 top-0 flex justify-center items bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded shadow-lg h-48 w-1/3">
                        <div class="border-b px-4 py-2">
                            <h3 class="font-semibold text-lg">An address will sent to your mobile number.</h3>
                        </div>
                        <div class="p-3">
                            A transaction ID will be sent to your Mobile Number.
                        </div>
                        <div class="flex justify-end items-center w-100 border-t p-3 space-x-3">
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Proceed</a>
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out close-prescription" href="#">Cancel</a>
                        </div>
                    </div>
                </div>
                <script>
                    const prescription=document.querySelector('.prescription');
                    const showprescription=document.querySelector('.show-prescription');
                    const closeprescription=document.querySelector('.close-prescription');
                    showprescription.addEventListener('click',function(){
                        prescription.classList.remove('hidden')
                    });
                    closeprescription.addEventListener('click',function(){
                        prescription.classList.add('hidden')
                    });
                </script>
                <!-- asfas -->
            </a>
            <a href="">
                <div class="block bg-navy text-center rounded-2xl hover:bg-li-navy hover:ease-in py-4 ease-out duration-400 p-5">
                    <img class=" w-24" src="images/settings.png" alt="">
                    <h4 class="text-white text-20 font-semibold pt-2">Settings</h4>
                </div>
            </a>
        </a>
    </div>
       
           
    </div>
    
</div>
</body>
</html>
