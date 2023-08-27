<?php
    session_start();
    include("db_connect.php");

    if(isset($_POST['submit'])){
        
        $medicine_name = $_POST['medicine_name'];
        $dosage = $_POST['dosage'];
        $mgf =$_POST['mgf'];
        $exp = $_POST['exp'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $quantity = $_POST['quantity'];
        $base_price = $_POST['base_price'];
        $sell_price = $_POST['sell_price'];
        $company_id = $_POST['company_id'];
        $provider_id = $_SESSION['provider_id'];

        $error = [];

        if(empty($medicine_name)){
            $error['medicine_name'] = "Error";
        }
        if(empty($dosage)){
            $error['dosage'] = "Error";
        }
        if(empty($mgf)){
            $error['mgf'] = "Error";
        }
        if(empty($exp)){
            $error['exp'] = "Error";
        }
        if(empty($category)){
            $error['category'] = "Error";
        }
        if(empty($type)){
            $error['type'] = "Error";
        }
        if(empty($quantity)){
            $error['quantity'] = "Error";
        }
        if(empty($base_price)){
            $error['base_price'] = "Error";
        }
        if(empty($sell_price)){
            $error['sell_price'] = "Error";
        }
        if(empty($company_id)){
            $error['company_id'] = "Error";
        }

        if(count($error) == 0){
            $add_info = mysqli_query($conn, "SELECT* FROM companies WHERE provider_id = '$provider_id' AND company_id = '$company_id'");

            if(mysqli_num_rows($add_info)>0){
                $insert = "INSERT INTO medicine(medicine_name,dosage,mgf,exp,category,type,quantity,base_price,sell_price,company_id,provider_id)
                            VALUES('$medicine_name','$dosage','$mgf','$exp','$category','$type','$quantity','$base_price','$sell_price','$company_id','$provider_id')";

                            if(mysqli_query($conn,$insert)){
                                echo "ADD DONE";
                                $MSG = "Successfully Added Medicine";
                            }
            }
            else{
                echo "company not exist in your database";
                $err_msg = "company not exist in your database" ;
            }
        }
        else{
            echo "Fill the Full form";
        }
    }
    if(isset($_POST['reset'])){
        header('addmedicine.php');
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
                    <a href="index.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li></a>
                    <a href="employee.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Employee</li></a>
                    <a href="medicine.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Products</li></a>
                    <a href="company.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Company</li></a>
                    <a href="invoice.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Invoice</li></a>
                    <a href="Pro-revenue.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Monthly Revenue</li></a>
                    
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
    </div>
    <div class="w-4/5">
        <div class="w-auto bg-navy flex justify-around p-5 text-white">
            <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-100px]" placeholder="    Search Here">
            <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
            <a href="logout.php" class="font-semibold text-20 ml-[50px]">Log Out</a>
        </div>
        <div class="bg-navy mx-48 my-16 py-8 rounded-3xl text-white">
            <div class="flex justify-around">
                     <p class="font-semibold text-20 ml-[350px] mb-4">Medicine Details</p>
                     <a href="index.php"><img  class="w-14 ml-64 mt-[-30px] ease-out duration-400 hover:w-16 hover:ease-in"  src="images/back.png" alt=""></a>
            </div>
            <div class="text-20">
               <form class="flex flex-col text-center text-black gap-y-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                     <input class="w-96 ml-72 rounded-2xl" name="medicine_name" placeholder="Medicine Name"type="text">
            <input class="w-96 ml-72 rounded-2xl" name="dosage" placeholder="Dosage(mg/ml)"type="number">
            <input class="w-96 ml-72 rounded-2xl" name="mgf" placeholder="MGF"type="date">
              <input class="w-96 ml-72 rounded-2xl" name="exp" placeholder="EXP" type="date">
              <input class="w-96 ml-72 rounded-2xl" name="category" placeholder="Category" type="text" list="exampleList">
                    <datalist id="exampleList">
                        <option value="Medicine">  
                        <option value="skincare">
                        <option value="suplement&vitamin">  
                        <option value="surgical Equipment">
                        <option value="health care">
                        <option value="Baby care">
                          </datalist>
              <input class="w-96 ml-72 rounded-2xl" name="type" placeholder="Type"type="text">
                    <datalist id="exampleList">
                        <option value="Tablet">  
                        <option value="Syrup">
                        <option value="Powder">  
                        <option value="Equipment">
                          </datalist>
              <input class="w-96 ml-72 rounded-2xl" name="quantity" placeholder="Quantity"type="number">
              <input class="w-96 ml-72 rounded-2xl" name="base_price" placeholder="Base Price" type="number">
              <input class="w-96 ml-72 rounded-2xl" name="sell_price" placeholder="Sell Price"type="number">
              <input class="w-96 ml-72 rounded-2xl" name="company_id" placeholder="Company ID"type="number">
                <div class="flex justify-center gap-x-5 ">
                    <input class="inline-block ml-[-40px] bg-sky-500 ease-out duration-400 hover:bg-blue-500 hover:ease-in p-2 rounded-xl" type="submit" name = "submit">
                    <input class="inline-block bg-sky-500 ease-out duration-400 hover:bg-blue-500 hover:ease-in p-2 rounded-xl" type="reset" name = "reset">
                </div>
               </form>
            </div>
        </div>
       
           
    </div>
    
</div>
</body>
</html>
