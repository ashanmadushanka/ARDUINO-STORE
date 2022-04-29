<?php include 'conn/connection.php' ?>

<?php

      $pro=mysqli_query($conn,"SElECT * FROM product") or mysqli_error("server error");
        echo "
            
          
              <table cellspacing='4' style='text-align: center;border:2px solid blue;'>
                <thead style='background-color:darkblue;color:orange'>
                  <tr>
                    <th id='t'>ProId</th>
                    <th id='t'>Pro_name</th>
                    <th id='t'>Price</th>
                    <th id='t'>Quantity</th>
                    <th id='t'>Discript</th>
                    <th id='t'>Full Discript</th>
                    <th id='t'>Details</th>
                    <th id='t'>Product Pic</th>
                    <th id='t'>Discount</th>
                  </tr>
                </thead>
                <tbody>";
      while ($row=mysqli_fetch_array($pro))
      {
       
            $products=mysqli_query($conn,"SElECT * FROM product WHERE id='".$row['id']."'") or mysqli_error("server error");


            while ($row=mysqli_fetch_array($products)) 
            {
              echo "
                  <td id='t'>".$row['id']."</td>
                  <td id='t'>".$row['p_name']."</td>
                  <td id='t'>".$row['price']."</td>
                  <td id='t'>".$row['quantity']."</td>
                  <td id='t'>".$row['description']."</td>
                  <td id='t'>".$row['full_description']."</td>
                  <td id='t'>".$row['detail']."</td>
                  <td id='t'><img src='".$row['img']."' height='60px' width='80px'></td>
                  <td id='t'>".$row['discount']."</td>

              </tr>";
 
              //$sum=$sum+$row['fprice'];
      
            }      
      }
      echo "
                  </tbody>
              </table>";
?>