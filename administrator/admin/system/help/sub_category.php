<?php

//Include header page
require_once('lib/header.php');

//If add_sub_category button click
if (isset($_POST['add_sub_category'])) {
  
    //Include dynamic page function
    require_once('lib/dynamic_func.php');

    if (add_sub_category($_POST['category_id'], $_POST['sub_category']) == "2")
        $msg = "Sub Category has been added successfully.";
    else if (add_sub_category($_POST['category_id'], $_POST['sub_category']) == "5")
        $msg = "Sub Category already registered.";
    else
        $msg = "Something wrong while registering";
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Sub Category</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: right;">
                                <a href="all_sub_category.php">All Sub-Category</a> 
                            </h2>
                        </div>
                        <div class="body">
                            <center>
                                <font>
                                    <?php 

                                      if (!empty($msg))
                                        print $msg; //Message print 
                                    ?>   
                                </font>
                            </center><br>
                            <form method="POST" autocomplete="off" enctype="multipart/form-data">

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" name="category_id" required>
                                            <option></option>
                                            <?php
                                                //Category
                                                try{

                                                    //Database Connection Open
                                                    $conn = new Connection();
                                                    $con  = $conn->Open();

                                                    if ($con) { 

                                                        $category_retr_sql = "select * from `category` where `status`=:status1";

                                                        $pre = $con->prepare($category_retr_sql);

                                                        $pre->bindValue(':status1', '0');

                                                        if($pre->execute()){

                                                            while ($row = $pre->fetch(PDO::FETCH_ASSOC))
                                                                print "<option value='$row[cate_id]'> $row[cate_name] </option>";
                                                        }
                                                    }
                                                    //Close Database Connection
                                                    $conn->Close();
                                                }
                                                catch(PDOException $e){} 
                                            ?>
                                        </select>
                                    </div> 
                                    <div class="col-sm-6">
                                        
                                    </div> 
                                </div> 

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Sub Category</label>
                                        <input type="text" class="form-control" name="sub_category" required> 
                                    </div> 
                                </div>
                                                
                                <button class="btn btn-primary waves-effect" type="submit" name="add_sub_category">Add Sub-Category</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
        </div>
    </section>
<?php

//Include footer page
require_once('lib/footer.php');
?>