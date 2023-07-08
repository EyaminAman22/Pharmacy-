<?php
    session_start();
    include('db_connect.php');
    $provider_id = $_SESSION['provider_id'];

    if(isset($_GET['delete'])){
        $e_id = $_GET['delete'];
        
        $dlt = mysqli_query($conn, "DELETE FROM employee WHERE id = $e_id");
    }
    $sql = "SELECT* FROM employee WHERE provider_id LIKE '$provider_id'";
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
            <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy">Employee Details</h1>
            <table class=" mt-4 table-auto text-center mx-auto bg-navy text-white border  border-white border-collapse">
                <thead>
                    <tr class="">
                        <th class="p-2 border  border-white">Employee ID</th>
                        <th class="p-2 border  border-white">Image</th>
                        <th class="p-2 border  border-white">First Name</th>
                        <th class="p-2 border  border-white">Last Name</th>
                        <th class="p-2 border  border-white">Gender</th>
                        <th class="p-2 border  border-white">E-mail</th>
                        <th class="p-2 border  border-white">Phone</th>
                        <th class="p-2 border  border-white">Join Date</th>
                        <th class="p-2 border  border-white">Salary</th>
                        <th class="p-2 border  border-white">Address</th>
                        <th class="p-2 border  border-white">Operation</th>
                    </tr>
                </thead>
              <?php
                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tbody class="">
                        <tr class="">
                            <td class="p-2 border  border-white"><?php echo $row['id']?></td>
                            <td class="p-2 border  border-white">---</td>
                            <td class="p-2 border  border-white"><?php echo $row['first_name']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['last_name']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['Gender']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['email']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['phone']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['join_date']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['salary']?></td>
                        <td class="p-2 border  border-white"><?php echo $row['address']?></td>
                        <td class="p-2 border  border-white space-3 gap-y-2">
<!--                            <a class="mb-1 inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="#">Edit</a> -->
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="pro-employee.php?delete=<?php echo $row['id'] ?>">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                <?php
                }?>
                    
            </table>
        </div>
       
    </div>
    
</div>
</body>
</html>
