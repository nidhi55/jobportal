<div role="tabpanel" class="tab-pane" id="featuredjobs">
        <div class="mj_tabcontent mj_toppadder30">
                            
                <table class="table table-striped">
                     <?php  
            $a=$_SESSION['comp_user'];
            $stmt=$conn->prepare("select * from post_job where compid=:a");
            $stmt->bindparam(':a',$a);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $date=date("y-m-d");
            foreach ($result as $value) 
            {
                $date1=$value['closingdate'];
                if (strtotime($date)<strtotime($date1)) {
                    $id2=$value["compid"];
                    $stmt1= $conn->prepare("select * from comp_user where (id=:id)");
                    $stmt1->bindparam(':id',$id2);
                    $stmt1->execute();
                    $result1=$stmt1->fetch();
            ?>                      
           
                            <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">UX Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_bluebtn">Freelance</a>
                                            </td>
                                            <td><span>$20,000</span>
                                            </td>
                             </tr>
                             <?php  }}?>
                </table>
        </div>
</div>