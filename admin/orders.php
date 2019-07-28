<table border="1px solid #000000" style="width:100%;text-align:center;">
    <tr>
        <th>NO</th>
        <th>ORDER ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>LOCATION</th>
        <th>EQUIPMENT NAME</th>
        <th>IMAGE</th>
        <th>TIME</th>
        <th>STATUS</th>
        <th>DELETE</th>
    </tr>
    <?php
        $q = "SELECT * FROM orders INNER JOIN electronics ON orders.elec_id=electronics.id ORDER BY order_date DESC";
        $rQ = mysqli_query($con, $q);
        $i = 0;
        while($rw = mysqli_fetch_array($rQ)){
            $i += 1;
            echo"
                <tr>
                    <td>".$i."</td>
                    <td>".$rw['id']."</td>
                    <td>".$rw['name']."</td>
                    <td>".$rw['phone']."</td>
                    <td>".$rw['location']."</td>
                    <td>".$rw['name']."</td>
                    <td><img src='../images/".$rw['image']."' width='100px' height='100px' /> </td>
                    <td>".$rw['order_date']."</td>
                    <td>";
                        if($rw['status'] == 'pending'){
                            echo '<button class="btn btn-success change_status" id='.$rw['id'].'>Pending</button>';
                        }else{
                            echo '<button class="btn btn-danger change_status" id='.$rw['id'].'>Cleared</button>';
                        }
                    echo"</td>
                    <td><button class='btn btn-danger delete_order' data-id='".$rw['id']."'>Delete</button></td>
                </tr>
            ";
        }
    ?>
</table>