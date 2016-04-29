<?php include ("../includes/header.php");
$accommodationrow=$accommodation->SelectAccommodation();
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header"><i class="fa fa-university"></i> Accommodations</h1>
                </div>
                <div class="col-lg-3">
                    <h1 class="page-header"><input type="submit" class="btn btn-primary" value="ADD NEW"></h1>            
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Search Accommodation Name ..." style="margin-top:45px;">
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trello fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>HOTEL</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-delicious fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>GUST HOUSE</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr class="info">
                          <td>ACCOMODATION</td>
                          <td>OWNER</td>
                          <td>ADDRESS</td>
                          <td>FEATURE</td>
                          <td>ACTIVATE</td>
                          <td>OPTION</td>
                        </tr>
                        </tr>
                         <?php foreach($accommodationrow as $row){ ?>
                         <tr>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                            <td>
                                <?php echo $row[2].' '.$row[3]; ?>
                            </td>
                            <td>
                                <?php echo $row[4]; ?>
                            </td>
                            <td>
                                <?php if ($row[5]==1){ echo "FEATURE";  }else{ echo "UN-FEATURE"; } ?>
                                
                            </td>
                            <td>
                                <?php if ($row[6]==1){ echo "ACTIVATE"; }else{  echo "DES-ACTIVATE";  } ?>
                            </td>
                            <td> 
                                <a href="" title="View Detail"><i class="fa fa-search"></i></i></a> |
                                <a href="" title="Update"><i class="fa fa-pencil"></i></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div><!-- /.row -->
        </div><!-- /#page-wrapper -->
    </div> <!-- /#wrapper -->
   <?php include ("../includes/footer.php");