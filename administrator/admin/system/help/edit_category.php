<?php

//Include header page
require_once('lib/header.php');

//If category_id is present
if (!empty($_GET['category_id'])) {
    
    //Database Connection Open
    $conn = new Connection();
    $con  = $conn->Open();

    if ($con) {
                  
        //Data retrive from category table
        $category_retr_sql = "select * from `category` where `cate_id`=:cate_id1";

        $pre = $con->prepare($category_retr_sql);

        $pre->bindparam(':cate_id1', $_GET['category_id']);

        if($pre->execute())
            $row = $pre->fetch(PDO::FETCH_ASSOC);
        //End of data retrive
    }

    //Close Database Connection
    $conn->Close();
}

//If update_category button click
if (isset($_POST['update_category'])) {
  
    //Include dynamic_func page function
    require_once('lib/dynamic_func.php');

    if (edit_category_info($_GET['category_id'], $_POST['cate_name']))
        print "<script>window.location.href='all_category.php'</script>";
    else
        $msg = "Something wrong while updating";
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Category</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <h2 style="text-align: right;">
                                <a href="all_category.php">All Category</a> 
                            </h2>
                           
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                            <form id="form_validate" method="POST" autocomplete="off" enctype="multipart/form-data">

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-12">
                                        <label class="form-label">Category</label>
                                        <input type="text" class="form-control" name="cate_name" value="<?php !empty($row['cate_name'])? print $row['cate_name']: print '';?>" required> 
                                    </div>  
                                </div> 
                                                
                                <button class="btn btn-primary waves-effect" type="submit" name="update_category">Save Category</button>
                            
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