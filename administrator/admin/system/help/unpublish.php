  <?php

//Include header page
require_once('lib/header.php');
?>
  <section class="content">

    <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Post Information</h4>
            </div>
            <div class="modal-body">
                <p style="font-weight: bold;" id="modal_category"></p>
                <p style="font-weight: bold;" id="modal_post_header"></p>
                <p style="font-weight: bold;" id="modal_post_desc"></p>
                <p style="font-weight: bold;" id="modal_posted_by"></p>
                <p style="font-weight: bold;" id="modal_date"></p>
                 <p style="font-weight: bold;" id="modal_labels"></p>
            </div>
          </div>
          
        </div>
      </div>

        <div class="container-fluid">
           

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Unpublish Post
                            </h2>
                            
                            <h2 style="text-align: right;">
                                <a href="create_post.php">Add Post</a> 
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
                                            <th>Header</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Posted By</th>
                                            <th>Date</th>
                                            <th>Labels</th>
                                            <th>Status</th>

                                            
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       <?php
                                        //Retriving Medicine
                                        try{

                                            //Database Connection Open
                                            $conn = new Connection();
                                            $con  = $conn->Open();

                                            if ($con) {
                                            
                                                $post_retr_sql = "select * from `post`  where `post_status`=:post_status1";

                                                $pre = $con->prepare($post_retr_sql);

                                                $pre->bindValue(':post_status1', '1'); 

                                                $j = 0;

                                                if($pre->execute()){

                                                    while ($row = $pre->fetch(PDO::FETCH_ASSOC)){

                                                        $category_retr_sql = "select * from `category` where `cate_id`=:cate_id1";

                                                        $pree = $con->prepare($category_retr_sql);

                                                        $pree->bindParam(':cate_id1', $row['cate_id']); 

                                                        if($pree->execute())
                                                            $row_1 = $pree->fetch(PDO::FETCH_ASSOC);

                                                        $sub_category_retr_sql = "select * from `sub_category` where `sub_cate_id`=:sub_cate_id1";

                                                        $preee = $con->prepare($sub_category_retr_sql);

                                                        $preee->bindParam(':sub_cate_id1', $row['sub_cate_id']); 

                                                        if($preee->execute())
                                                            $row_2 = $preee->fetch(PDO::FETCH_ASSOC);

                                                        $j++; 

                                                        print "<tr>";
                                                        print "<td data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$j."</td>";
                                                        print "<td id=\"cate_name$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$row_1['cate_name']."</td>";
                                                        print "<td id=\"cate_name$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$row_2['sub_cate_name']."</td>";
                                                        print "<td id=\"post_header_name$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$row['post_header_name']."</td>";
                                                        print "<td><img style=\"width: 80px;height: auto;\" src=\"".$row['post_img']."\"/></td>";
                                                        print "<td id=\"post_desc$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".substr($row['post_desc'], 0, 30)."...</td>";
                                                        print "<td id=\"posted_by$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$row['posted_by']."</td>";
                                                        print "<td id=\"post_date$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".$row['post_date']."</td>";

                                                        print "<td id=\"post_labels$j\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"view_post('".$j."');\">".substr($row['labels'], 0, 30)."</td>";

                                                        print "<td><a href=\"changes_post_status_1.php?post_id=$row[post_id]\">Unpublish</a></td>";
                                                        print "<td><a href=\"edit_post_1.php?post_id=$row[post_id]\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>";
                                                        print "</tr>";
                                                    }
                                                }
                                            }

                                            //Close Database Connection
                                            $conn->Close();
                                        }
                                        catch(PDOException $e){

                                        }
                                        //End of New Register
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

<script type="text/javascript">

function view_post(post_id) {

    $("#modal_category").text("Category : "+$("#cate_name"+post_id).text());
    $("#modal_post_header").text("Header : "+$("#post_header_name"+post_id).text());
    $("#modal_post_desc").text("Description : "+$("#post_desc"+post_id).text());
    $("#modal_posted_by").text("Posted by : "+$("#posted_by"+post_id).text());
    $("#modal_date").text("Date : "+$("#post_date"+post_id).text());
     $("#modal_labels").text("Labels : "+$("#post_labels"+post_id).text());
}
</script>