<button class="btn btn-success" data-toggle="modal" data-target="#categories" id="modal_show">Add category</button>
<table border="1px solid #000000" style="width:100%; text-align:center;">
    <tr>
        <th>NO</th>
        <th>CATEGORY NAME</th>
        <?php
            $qry = "SELECT * FROM category";
            $rQ = mysqli_query($con, $qry);
            $i = 0;
            while($row = mysqli_fetch_array($rQ)){
                $i += 1;
                echo "
                    <tr>
                        <td>".$i."</td>
                        <td>".$row['name']."</td>
                    </tr>
                ";
            }
            
        ?>
    </tr>
</table>
<div class="modal" id="categories" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="POST" action="admin.php?category" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add item category</h3>
                    <button class="close" data-dismiss="modal" >&times;</button>
                </div>
                <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Add category name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Enter category name" />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="save_category" class="btn btn-success">Save category</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['save_category'])){
        $category_name = $_POST['category_name'];
        $qry = "INSERT INTO category (name) VALUES ('$category_name')";
        $rQ = mysqli_query($con, $qry);
        if($rQ){
            echo "<script type='text/javascript'>alert('Category successfully added!')</script>";
            echo"<script>window.open('admin.php?category','_self')</script>";
        }else{
            echo mysqli_error($con);
        }

    }
?>