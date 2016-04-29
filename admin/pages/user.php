<?php include ("../includes/header.php");
$userrow=$user->SelectUser();
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header"><i class="fa fa-reddit-square"></i> USERS</h1>
                </div>
               <div class="col-lg-3">
                    <h1 class="page-header"><input type="submit" class="btn btn-primary" value="ADD NEW"></h1>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Search Accommodation Name ..." style="margin-top:45px;">        
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr class="info">
                          <td>FirstName</td>
                          <td>LastName</td>
                          <td>Gender</td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>Address</td>
                          <td>UserType</td>
                          <td>Owner Acco</td>
                          <td>OPTION</td>
                        </tr>
                         <?php foreach($userrow as $row){ ?>
                         <tr>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                            <td><?php echo $row[8]; ?></td>
                            <td> 
                                <a href="" title="View Detail"><i class="fa fa-search"></i></i></a> |
                                <a href="" title="Update"><i class="fa fa-pencil"></i></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>  <!-- /.row -->
        </div> <!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
<?php include ("../includes/footer.php");
   