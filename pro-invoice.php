<?php
    session_start();
    include('db_connect.php');
    $provider_id = $_SESSION['provider_id'];
    if(isset($_GET['dlt'])){
        $i_id = $_GET['dlt'];
        $dlt = mysqli_query($conn, "DELETE FROM invoices WHERE invoice_id = '$i_id'");
    }
    $sql = "SELECT* FROM invoices WHERE provider_id LIKE '$provider_id'";
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
                    <a href="pro-dashboard.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li></a>
                    <a href="pro-employee.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Employee</li></a>
                    <a href="pro-medicine.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Products</li></a>
                    <a href="pro-company.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Company</li></a>
                    <a href="pro-invoice.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Invoice</li></a>
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
    <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy">Invoice Details</h1>
    <table class=" mt-4 table-auto text-center mx-auto bg-navy text-white border  border-white border-collapse">
        <thead>
            <tr class="">
                <th class="p-2 border  border-white">Invoice ID</th>
                <th class="p-2 border  border-white">Total Payment</th>
                <th class="p-2 border  border-white">Payment Due</th>
                <th class="p-2 border  border-white">Paid Amount</th>
                <th class="p-2 border  border-white">Company ID</th>
                <th class="p-2 border  border-white">Invoice Date</th>
                <th class="p-2 border  border-white">Operation</th>
            </tr>
        </thead> <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <tbody class="">
            <tr class="">
                <td class="p-2 border  border-white"><?php echo $row['invoice_id']?></td>
                <td class="p-2 border  border-white"><?php echo $row['total_payment']?></td>
                <td class="p-2 border  border-white"><?php echo $row['payment_due']?></td>
            <td class="p-2 border  border-white"><?php echo $row['paid_amount']?></td>
            <td class="p-2 border  border-white"><?php echo $row['company_id']?></td>
            <td class="p-2 border  border-white"><?php echo $row['invoice_date']?></td>
            <td class="p-2 border  border-white space-x-3">
            <!--<a class="inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="#">Edit</a>-->
                <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="invoice.php?dlt=<?php echo $row['invoice_id']?>">Delete</a>
            </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</div>
    </div>
</body>
</html>
