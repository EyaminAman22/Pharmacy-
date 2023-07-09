<?php
    session_start();
    include('db_connect.php');
    $provider_id = $_SESSION['provider_id'];

    if(isset($_GET['dlt'])){
        $md_name = $_GET['dlt'];
        $dlt = mysqli_query($conn, "DELETE FROM medicine WHERE medicine_name LIKE '$md_name'");
    }
    $sql = "SELECT* FROM medicine WHERE provider_id LIKE '$provider_id'";
    $result = mysqli_query($conn,$sql);  
?>
<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medicine</title>
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
                  ]
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
    </div>
    <div class="w-4/5">
        <div class="w-auto bg-navy flex justify-around p-5 text-white">
            <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-100px]" placeholder="    Search Here">
            <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
            <a href="#" class="font-semibold text-20 ml-[50px]">Log Out</a>
        </div>
        <div class=" mt-5 text text-center"> 
    <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy">Medicine Details</h1>
    <table class=" mt-4 table-auto text-center mx-auto bg-navy text-white border  border-white border-collapse">
        <thead>
            <tr class="">
                <th class="p-2 border  border-white">Medicine Name</th>
                <th class="p-2 border  border-white">Dosage</th>
                <th class="p-2 border  border-white">manufacture Date</th>
                <th class="p-2 border  border-white">Expire Date</th>
                <th class="p-2 border  border-white">Category</th>
                <th class="p-2 border  border-white">Quantity</th>
                <th class="p-2 border  border-white">Amount</th>
                <th class="p-2 border  border-white">base Price</th>
                <th class="p-2 border  border-white">Sell price</th>
                <th class="p-2 border  border-white">Company ID</th>
                <th class="p-2 border  border-white">Operation</th>
            </tr>
        </thead>
            <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tbody class="">
                <tr class="">
                    <td class="p-2 border  border-white"><?php echo $row['medicine_name']?></td>
                    <td class="p-2 border  border-white"><?php echo $row['dosage']?></td>
                    <td class="p-2 border  border-white"><?php echo $row['mgf']?></td>
                <td class="p-2 border  border-white"><?php echo $row['exp']?></td>
                <td class="p-2 border  border-white"><?php echo $row['category']?></td>
                <td class="p-2 border  border-white"><?php echo $row['quantity']?></td>
                <td class="p-2 border  border-white">
                    <input type="text" class="w-2/3 rounded-lg text-center form-control" placeholder="  Quantity" name = "qu"> <//?php echo $row['quantity']?>
                </td>
                <td class="p-2 border  border-white"><?php echo $row['base_price']?></td>
                <td class="p-2 border  border-white"><?php echo $row['sell_price']?></td>
                <td class="p-2 border  border-white"><?php echo $row['company_id']?></td>
                <td class="p-2 border  border-white space-x-3">
                <input type = "submit" class = "btn btn-lg btn-primary inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out mb-2" value = "Add to Cart">
                    <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="medicine.php?dlt=<?php echo $row['medicine_name']?>">Delete</a>
                </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</div>    
    </div>
    
</div>
</body>
</html>
