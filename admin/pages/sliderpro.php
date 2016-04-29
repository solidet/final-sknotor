<?php
require_once '../../includes/dbconnectionsomrak.php';
$provincerow=$sliderforpro->SelectProvince();
?>
<?php include ("../includes/header.php");?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-sliders"></i> Slider For Province</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr class="info">
                          <td>PROVINCE</td>
                          <td>SLIDER TOTAL</td>
                          <td>OPTION</td>
                        </tr>
                         <?php foreach($provincerow as $row){ ?>
                         <tr>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                            <td>
                                <?php echo "UNKOWN"; ?>
                            </td>
                            <td> 
                                <a href="" title="View Detail"><i class="fa fa-search"></i></i></a> |
                                <a href="" title="Update"><i class="fa fa-pencil"></i></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div> <!-- /.row -->
            </div><!-- /.row -->
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
<?php include ("../includes/footer.php");