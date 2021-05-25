<?php  
    session_start();
    if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:50:14 GMT -->
<?php
include 'header.php';
include 'connect.php';
?>
        <!-- end header -->
        <!-- start color quick setting -->
       <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include 'sidebarmenu.php'; ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
              <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Advance Tables</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Data Tables</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Advance Tables</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>CANDIDATES TABLE</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                   
                                  <div class="table-scrollable">
                                    <table id="example1" class="display" style="width:100%;">
                                        <?php 
                                            $stmt=$conn->prepare("select * from user");
                                            $stmt->execute();
                                            
                                            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                                         ?>
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile No</th>
                                                <th>Date Of Birth</th>
                                                <th>City</th>
                                                <th>Qualification</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $value) 
                                            { ?>
                                            <tr>
                                                <td><img src="../images/users/<?php echo $value['photo']; ?>" height="50" width="50"></td>
                                                <td><?php echo $value['name']; ?>&nbsp<?php echo $value['surname'];?></td>
                                                <td><?php echo $value['email']; ?></td>
                                                <td><?php echo $value['mobileno']; ?></td>
                                                <td><?php echo $value['dob']; ?></td>
                                                <td><?php echo $value['city']; ?></td>
                                                <td><?php echo $value['qualification']; ?></td>
                                                <td><a href="#"><button class="btn btn-danger btn-xs del22" value="<?php echo $value['uid'] ?>">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button></a>
                                                             <?php $a=0; 
                                                             if ($a==$value['block_sta']) {
                                                     ?>    
                                                    <a href="block_user.php?id=<?php echo $value['uid']; ?>"><button class="btn btn-primary btn-xs" value="<?php echo $value['uid'] ?>">
                                                        <!--<i class="fa fa-ban"></i>-->
                                                        Block
                                                    </button></a>
                                                    <?php }else{ ?>
                                                        <a href="unblock_user.php?id=<?php echo $value['uid']; ?>"><button class="btn btn-primary btn-xs" value="<?php echo $value['uid'] ?>">
                                                        <!--<i class="fa fa-ban"></i>-->
                                                        UnBlock
                                                    </button></a>
                                                    <?php }?>
                                                    
                                                    
                                                </td>
                                            </tr>
                                           <?php  } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- data tables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
 	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js" ></script>
    <script type="text/javascript">
        $('.del22').click(function(){
            
            var r = confirm("Do you want to delete?");
            if (r == true)
            {
                var id=$(this).val();
                window.location.href = "delete_user.php?id="+id;
            }
            else
            {
                    widow.location.href="user.php";
            }
        })
    </script>

    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:50:14 GMT -->
</html>
<?php }
    else
    {
        header("location:login.php");
    }
 ?>