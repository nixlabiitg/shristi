  <?php

//Include header page
require_once('lib/header.php');
?>
  <section class="content">
        <div class="container-fluid">
           

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Available Category
                            </h2>
                            
                            <h2 style="text-align: right;">
                                <a href="category.php">Add Category</a> 
                            </h2>
                            
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons"></i>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       <?php
                                        //Retriving Category
                                        try{

                                            //Database Connection Open
                                            $conn = new Connection();
                                            $con  = $conn->Open();

                                            if ($con) {
                                            
                                                $category_retr_sql = "select * from `category`";

                                                $pre = $con->prepare($category_retr_sql);

                                                $i = 0;

                                                if($pre->execute()){

                                                    while ($row = $pre->fetch(PDO::FETCH_ASSOC)){ 

                                                        $i++; 

                                                        if($row['status'] == '0')
                                                            $status = 'Active';
                                                        else
                                                            $status = 'Deactive';

                                                        print "<tr>";
                                                        print "<td>".$i."</td>";
                                                        print "<td>".$row['cate_name']."</td>";
                                                        print "<td>".$row['date']."</td>";
                                                        print "<td><a href=\"changes_category_status.php?category_id=$row[cate_id]\" style=\"text-decoration:none;\">".$status."</a></td>";
                                                        print "<td><a href=\"edit_category.php?category_id=$row[cate_id]\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>";
                                                        print "</tr>";
                                                    }
                                                }
                                            }

                                            //Close Database Connection
                                            $conn->Close();
                                        }
                                        catch(PDOException $e){

                                        }
                                        //End of Category
                                        ?> 
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <?php

//Include footer page
require_once('lib/footer.php');
?>