
<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Parking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header">
                   <h1 style="color:red"> Parking Lot Management System</h1>
                 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-3">
                    <h2 class="register">Registration Form</h2>
                    <form action="save.php" method="post">
                        <form action ="pay2.php" method="post">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="owner"> Owner Name:</span>
                        </div>
                        <input type="text" name="owner_name" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Vehicle Name:</span>
                        </div>
                        <input type="text" name="vehicle_name" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Vehicle Number:</span>
                        </div>
                        <input type="text" name="vehicle_number" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Entry Date:</span>
                        </div>
                        <input type="date" name="entry_date" class="form-control">
                    </div>
                    
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Exit Date:</span>
                        </div>
                        <input type="date" name="exit_date" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Amount:</span>
                        </div>
                        <input type="number" name="amount" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Pay Now:</span>
                        </div>
                        <input type="text" name="pay_now" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Status:</span>
                        </div>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Update Record:</span>
                        </div>
                        <input type="text" name="update_record" class="form-control">
                    </div>
                  
                   <input type="submit" _blank ="" onclick="click()" class="btn btn-primary mt-0">
                
                   </form>
</form>

                </div>
               
                <div class="col-md-6">
                    <img src="images/car.png" class="car" style="width: 650px; height: 250px; margin-top: 200px;" alt="car picture">
                   
                </div>
            </div>
        </div>             
    </div>
    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="register1">All Vehicle Entry Records</h2>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" >Search</span>
                       </div>
                        <input type="text" class="form-control" onkeyup="search()" id="text" placeholder="Search Vehicle Details">
                   </div>
                   
                   <table class="table table-striped" id="table" >
                   <?php
                     $conn = Mysqli_connect("localhost", "root", "", "parking_project") or die("conection failed!");
                     $sql = "SELECT * FROM vehicle_info";
                     $result = Mysqli_query($conn, $sql) or die("query Failed");
                    
                    
                  if(mysqli_num_rows($result)>0)
                  {
                      
                       ?>
                    
                       <thead>
                        <tr>
                            <th>Owner Name</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Number</th>
                            <th>Entry Date</th>
                            <th>Exit Date</th>
                            <th>Amount</th>
                            <th>Pay Now</th>
                            <th>Status</th>
                            <th>Update Record</th>
                            <th>Delete Record</th>
                            
                            
                            <!--<th>Update Record</th>
                            <th>Delete Record</th>-->
                            
                        </tr>
                  </thead>
                  <?php
                  while($row = mysqli_fetch_assoc($result))
                  {

                    ?>
                    
                    <tbody>                      
                        <tr>
                            <td><?php echo $row['Owner_name']; ?></td>
                            <td>  <?php echo $row['Vehicle_name']; ?></td>
                            <td><?php echo $row['Vehicle_number']; ?></td>
                            <td><?php echo $row['Entry_date']; ?></td>
                            <td><?php echo $row['Exit_date']; ?></td>
                          <!--  <td> <a href="">ExitDate </a></td> -->
                            <td><?php echo $row['Amount']; ?></td>
                            <td><a href="pay2.php?vehicle_number=<?php echo $row['Vehicle_number'] ?>">pay now</a></td> 
                            <td><?php echo $row['Status']; ?></td>
                           
                            <td><?php echo $row['Update_record']; ?></td>
                           
                        <td><a href="delete-inline.php?vehicle_number=<?php echo $row['Vehicle_number']?>">Delete</a></td>
                        </tr>  
                    </tbody>
                  
                    
                   <?php
                  }
                   ?>

                 
                    
                </table> 
                
                <?php
                  }
                   ?>
                
               
          
               </div>
            </div>
        </div>
    </section>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">     
        const search = () =>{
            var input_value = document.getElementById("text").value.toUpperCase();
            var table = document.getElementById("table");
            var tr = table.getElementsByTagName("tr");
            for(var i =0; i<tr.length; i++){
               td = tr[i].getElementsByTagName("td")[0];
            
               
               if(td){
                 var text_value = td.textContent;
                 if(text_value.toUpperCase().indexOf(input_value)>-1){
                    tr[i].style.display = "";
                    
                 }else{
                    tr[i].style.display= "none";
                 }
               }
            }
        }
        
          
    </script>
</body>
</html>
    