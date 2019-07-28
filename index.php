<?php
    include("header.php")
?>
    <div class="row">
        <div class="col-2">
            <ul id="category_list">
            <?php
                $q = "SELECT * FROM category";
                $rQ = mysqli_query($con, $q);
                while($rw = mysqli_fetch_array($rQ)){
                    echo"
                        <li class='view_categories' id='".$rw['id']."'>".$rw['name']."</li>
                    ";
                }
            ?>
            </ul>
        </div>
        <div class='col-10'>
            <div class="row">
                <?php
                    $q = "SELECT * FROM electronics";
                    $rQ = mysqli_query($con, $q);
                    while($rw = mysqli_fetch_array($rQ)){
                        echo "
                            <div class='col-lg-2'>
                                <div class='card'>
                                    <img src='images/".$rw['image']."' class='card-img-top' height='200px'/>
                                </div>
                                <div class='card-body' style='text-align:center; color:#34495E; font-weight:bolder;'>
                                    <small>".$rw['description']."</small>
                                    ".$rw['name']."<br />
                                    Kshs.".$rw['price']."<br />
                                    <button class='btn btn-success btn_buy' id='".$rw['id']."'>Buy equipment</button>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="modal" id="buy_food_modal" role="dialog">
            <div class="modal-dialog" role="document">
                <form id="order_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="payment">Buy electronic</h3>
                            <button class="close" data-dismiss="modal" >&times;</button>
                        </div>
                        <div class="modal-body" id="body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="cname" class="form-control" placeholder="Customer name" />
                                </div>
                                <div class="form-group">
                                    <label>Phone number:</label>
                                    <input type="text" name="name" id="cno" class="form-control" placeholder="Customer phone number" />
                                </div>
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" />
                                </div>
                                <div class="form-group">
                                    <label>Pickup location</label>
                                    <input name="price" type="text" id="cloc" class="form-control" placeholder="Pickup location" />
                                </div>
                                <input name="price" type="hidden" id="elec_id"/>
                        </div>
                        <div class="modal-footer" id="footer">
                            <button name="save_food" id="buy_food" class="btn btn-success">Buy food</button>
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
<?php
    include("footer.php")
?>