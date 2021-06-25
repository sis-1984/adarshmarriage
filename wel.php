<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  include("navb.php"); ?>   

<div class="contanier mx-4 my-2">

<form action="/phpbot/wel.php" method="post">
    <div class="form-group row">

    <div class="col-xs-2">
      <label for="ex1"> Gender</label>
        <select name="pname" class="form-control" style="width:auto;" >
          <option value="<?php if (isset($_POST['pname'])) echo $_POST['pname']; ?>"><?php if (isset($_POST['pname'])){ echo $_POST['pname'];}else { echo "Select Party";} ?></option>
          <?php
              include("config.php");
              $sql = mysqli_query($mysqli, "SELECT gender From sarchhd");
              $row = mysqli_num_rows($sql);
              while ($row = mysqli_fetch_array($sql)){
              echo "<option value='". $row['party_name'] ."'>" .$row['party_name'] ."</option>" ;

              }
              
          ?>

         </select>
      </div>
    
      <div class="col-xs-2">
      <label for="ex1">Cast</label>
        <select name="iname" class="form-control" style="width:auto;">
          <option value="pick">Select Item</option>
          <?php
              include("config.php");
              $sql = mysqli_query($mysqli, "SELECT im_name From itemmst");
              $row = mysqli_num_rows($sql);
              while ($row = mysqli_fetch_array($sql)){
              echo "<option value='". $row['im_name'] ."'>" .$row['im_name'] ."</option>" ;
              }
          ?>  
        </select>
      </div>
      
      <div class="col-xs-3 mx-1">
        <label for="ex2">City</label>
        <Select name="city" class="form-control" style="width:auto;">
         <option value="pick">Select Item</option>
        </Select>
      </div>

      <div class="col-xs-3 mx-1">
        <label for="ex3">Income</label>
        <input class="form-control" id="rate" name="rate" type="text" onkeyup="sum()">
      </div>

      <div class="col-xs-3 mx-1">
        <label for="ex3">Occupation</label>
        <input class="form-control" id="total" name="total" type="text">
      </div>

      <div class="col-xs-6 mx-1 my-4">
         <button type="submit" class="btn btn-primary" name="ok">Submit</button>
      </div>   
    </div>     
    
    <?php

function disp(){

 include("config.php");

   echo"<table class='table table-sm' border='2'>";
   echo"<thead class='thead-dark'>";
   echo"<tr>";
   echo"<th scope='col'> Quoy_No </th>";
   echo"<th scope='col' > Item_Name </th>";
   echo"<th scope='col'> Qty </th>";
   echo"<th scope='col'> Rate </th>";
   echo"<th scope='col'>  Total </th>";
   echo"<th scope='col'> Edit </th>";
   echo"</tr>";
   echo"</thead>";
   echo "<tbody>";
         
         $q2="select * from qutmst";
         $run=mysqli_query($mysqli, $q2);
         $sumt=0;
         while($row=mysqli_fetch_array($run))
         {
             $id=$row[0];
             $dname=$row[1];
             $dqty=$row[2];
             $drate=$row[3];
             $dtotal=$row[4];
       
           echo"<tr>";
           echo"<td>".$id."</td>";
           echo"<td>".$dname."</td>";
           echo"<td>".$dqty."</td>";
           echo"<td>".$drate."</td>";
           echo"<td>".$dtotal."</td>";
          /* echo"<td><a href="edit.php?edit= <?php echo $id; ?>">".echo"Edit";."</a></td>"; */
           $sumt=$dtotal+$sumt ;           
         echo"</tr>";
           
         }
         echo "</tbody>";   
      echo"</table>";
      echo"Total";
      echo "<input id='sumt' name='sumt' type='text' value='$sumt' />";
  }   
  
?>  

    <?php

         include("config.php");
        
         
       if(isset($_POST['ok']))
          {

            echo "<h1> Pls Pay</h1>";
          }
      ?>   
       
      <!--    /*  $qtyt=$_POST['qty'];
            $ratet=$_POST['rate'];
            $tott= $qtyt*$ratet;
            
           
            

            $iname = $_POST['iname'];
            $qty = $_POST['qty'];
            $rate = $_POST['rate'];
            $total =$_POST['total'];
            $pname=$_POST['pname'];
            $qut_date1=date("Y/m/d");
            $result = mysqli_query($mysqli,"insert into qutmst values('','$iname','$qty','$rate','$total','$pname','$qut_date1')");
            if($result)
            {
                //$pname=$_POST['pname']
                              
                disp();
              //  echo "Add Successfully";

            }
            else{
                echo "failed:";
                echo("Errorcode: " . mysqli_errno($mysqli));
                
            }
            
          }
          $doca = mysqli_query($mysqli,"select * from sarchhd");
          $docno=mysqli_fetch_array($doca);
          $docno['doc_no']=$docno['doc_no'];

       
          if(isset($_POST['save']))
          
          {

         
              $q3="select * from qutmst";
              $run1=mysqli_query($mysqli, $q3);
              
              $docno1=$docno['doc_no']+1;
               
              while($row=mysqli_fetch_array($run1))
              {
                  $id=$docno['doc_no'];
                  $dname=$row[1];
                  $dqty=$row[2];
                  $drate=$row[3];
                  $dtotal=$row[4];
                  $pname=$_POST['pname'];
                  $gtotal=$_POST['sumt'];
                  $unit="No";
                  $qut_date=date("Y/m/d");
                  
//echo "$dname,$dqty,$drate,$dtotal,$pname,$gtotal,$unit";
                $result = mysqli_query($mysqli,"insert into imtrans values('$id','$qut_date','$dname','$unit','$dqty','$drate','$dtotal','$pname','$gtotal')");
                  
                if($result)
                    {
                        //echo "Save Successfully";
                       // disp();
                    }
                    else{
                      echo "failed:";
                      echo("Error: " . mysqli_errno($mysqli));
                      
                     }  
               }
             //  echo "$docno1";
               $docup=mysqli_query($mysqli,"update document set doc_no='$docno1' where doc_type='QUT'");
               disp();
               
               echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
               <strong></strong>Save Successfully
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
               </button>
             </div>";
               $delt = mysqli_query($mysqli,"delete from qutmst");
               

          }

         


    ?>

 <!--<button type="submit" class="btn btn-primary col-xs-6 mx-1 my-4" name="save">Save</button> -->
 
 
 </form>   
  <!-- <form method='get' action='invoice.php'>
    Quotaion No.
     <input id="doc_no" name="doc_no" type="text"  margin="left: 2000px" value="<?php echo $docno['doc_no'] ?>">
 
     <button  type="submit" class="btn btn-primary col-xs-6 mx-1 my-4" name="Print">Print</button>
    </form>  -->
  
 </div>
 <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('qty').value;
            var txtSecondNo = document.getElementById('rate').value;
            var result = parseInt(txtFirstNo) * parseInt(txtSecondNo);
            if (!isNaN(result)) {
                document.getElementById('total').value = result;
            }
        }
    </script>
</body>
</html>
