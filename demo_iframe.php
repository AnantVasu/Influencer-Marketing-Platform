<!DOCTYPE html>
<html>
<head>
  <title>Influence</title>
  <style>
  body {
    margin: 0;
    font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
  }
  </style>
  </head>
  <body>

    <?php
    $con= mysqli_connect("localhost","root","", "influence");
    if(!$con)
    {
    	die("Connection Failed: " . mysqli_connect_error());
    }

    $q =  " select * from campaigns " ;
    $result = mysqli_query($con, $q);
    ?>

    <div><center>
      <?php

           if(mysqli_num_rows($result)>0)
           {
             while($row=mysqli_fetch_array($result))
             {

        ?>
     <table>
          <tr>
              <th>ID</th>
              <th>Brand Name</th>
              <th>Campaign Title</th>
              <th>The Brand And Campaign Overview</th>
              <th>Brief to the Creator</th>
              <th>Product(s) to Feature</th>
              <th>Other Details</th>
              <th>Campaign Budget($)</th>
              <th>Gender</th>
              <th>Start Date</th>
              <th>End Date</th>
          </tr>
          <tr><center>

                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['bname']; ?></td>
                  <td><?php echo $row['ctitle']; ?></td>
                  <td><?php echo $row['overview']; ?></td>
                  <td><?php echo $row['brief']; ?></td>
                  <td><?php echo $row['ptf']; ?></td>
                  <td><?php echo $row['aod']; ?></td>
                  <td><?php echo $row['cbudget']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['cstart']; ?></td>
                  <td><?php echo $row['cend']; ?></td>
                <?php

                }
                }
                else{
                  echo "<font size='6'><center>You have no ongoing Campaigns!</center></font><br><br>";
                }
                 ?>

              </center></tr>
       </table>
    </center></div>



  </body>
</html>
