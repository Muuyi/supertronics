<button class="btn btn-success" data-toggle="modal" data-target="#add_electronic" id="electronic_modal">Add electronic</button>
<table border="1px solid #000000" style="width:100%; text-align:center;">
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>IMAGE</th>
        <th>PRICE</th>
        <th>DESCRIPTION</th>
        <th>DATE ADDED</th>
        <th>DELETE</th>
        <?php
            $qry = "SELECT * FROM electronics";
            $rQ = mysqli_query($con, $qry);
            $i = 0;
            while($row = mysqli_fetch_array($rQ)){
                $i += 1;
                echo "
                    <tr>
                        <td>".$i."</td>
                        <td>".$row['name']."</td>
                        <td><img src='../images/".$row['image']."' width='100px' height='100px' /></td>
                        <td>".$row['price']."</td>
                        <td>".$row['description']."</td>
                        <td>".$row['date_added']."</td>
                        <td><button class='btn btn-danger delete_electronic' id='".$row['id']."' >Delete</button></td>
                    </tr>
                ";
            }
            
        ?>
    </tr>
</table>
<div class="modal" id="add_electronic" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="POST" action="admin.php?electronics" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add electronic</h3>
                    <button class="close" data-dismiss="modal" >&times;</button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label>Electronic category</label>
                            <select class="form-control" name="category">
                            <?php
                                $qry = "SELECT * FROM category";
                                $rQ = mysqli_query($con, $qry);
                                $i = 0;
                                while($row = mysqli_fetch_array($rQ)){
                                    $i += 1;
                                    echo "
                                        <option>".$row['name']."</option>
                                    ";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Electronic name</label>
                            <input type="text" name="name" class="form-control" placeholder="Add food name" />
                        </div>
                        <div class="form-group">
                            <label>Electronic image</label>
                            <input name="img" type="file" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Electronic price</label>
                            <input name="price" type="text" class="form-control" placeholder="Add food price" />
                        </div>
                        <div class="form-group">
                            <label>Electronic description</label>
                            <textarea class="form-control" name="description"></textarea>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="save_electronics" class="btn btn-success">Save food</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['save_electronics'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $fimg = $_FILES['img']['name'];
        $floc = $_FILES['img']['tmp_name'];
        $qry = "INSERT INTO electronics (category,name,price,image,description,date_added) VALUES ('$category','$name','$price','$fimg','$description',now())";
        $rQ = mysqli_query($con, $qry);
        if($rQ){
            move_uploaded_file($floc, '../images/'.$fimg);
            echo "<script type='text/javascript'>alert('Electronic successfully added!')</script>";
            echo"<script>window.open('admin.php?electronics','_self')</script>";
        }else{
            echo mysqli_error($con);
        }

    }
?>