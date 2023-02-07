<?php 
include "config.php";
top_structure('Inward ', 0, 'error', 'Success', 'done');
if(isset($_POST[submit])){
    $total=$d_detail[wallet]+$_POST[amt];
    $inward_total=$d_detail[inward]+$_POST[amt];
    
    $qry="INSERT INTO `io_inward`(`i_id`, `u_id`,`name`, `mobile`, `purpose`, `type`, `amount`,`total_amount`) VALUES (NULL,'$_SESSION[u_id]','$_POST[name]','$_POST[mob]','$_POST[purpose]','$_POST[payment]','$_POST[amt]','$total');";
    
    $qry1="UPDATE `io_user` SET `inward`='$inward_total',`wallet`='$total' WHERE `u_id`='$_SESSION[u_id]';";
   
    if($con->query($qry) === TRUE AND $con->query($qry1) === TRUE){
        echo "<script>location.href='inward.php?n=s';</script>";
    }else{
        echo "<script>location.href='inward.php?n=f';</script>";
    }
    
}
sidebar();
header_bar();?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>INWARD</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="offset-md-1 col-md-10 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Inward Add</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!--<br />-->
            <form class="form-label-left input_mask" method="post">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Name" name="name">
                <!--<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Mobile No." name="mob">
                <!--<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Purpose" name="purpose">
                <!--<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
              </div>
    
               <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Amount" name="amt">
                <!--<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
              </div>
              
              
              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <!--<input type="text" class="form-control"  placeholder="Phone">-->
                <select class="form-control" id="inputSuccess5" name="payment">
                    <option selected>Payment</option>
                    <option  value="1">Cash</option>
                    <option value="2">Online</option>
                    <option value="3">Check</option>
                </select>
                <!--<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>-->
              </div>
              <div class="ln_solid"></div>
              <div class="form-group row">
                <div class="col-md-9 col-sm-9  offset-md-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
				   <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inward List</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                      <thead>
                        <tr>
                         <th>S.No</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Purpose</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Balance</th>
                        </tr>
                      </thead>

                      <tbody>
<?php
$r=$con->query("SELECT * FROM `io_inward` WHERE `u_id`='$_SESSION[u_id]' ORDER BY `i_id` DESC");
$a="0";
while($val=$r->fetch_assoc()){
    
?>
                        <tr>
                          <td><?php echo ++$a;?></td>
                          <td><?php echo $val[name];?></td>
                          <td><?php echo $val[mobile];?></td>
                          <td><?php echo $val[purpose];?></td>
                          <td><?php if($val[type]=="1") {
                              echo "Cash";
                          }elseif($val[type]=="2"){
                              echo"Online";
                          }elseif($val[type]=="3"){
                              echo "Check";
                          }else{
                              echo "-";
                          }
                              
                          
                         ?></td>
                          <td><?php echo "<b style='color:green;'>+₹".$val[amount]."</b>";?></td>
                          <td><?php echo "₹".$val[total_amount];?></td>
                        </tr>
<?php
}
?>                     
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
  </div>
</div>
<!-- page content -->
<?php 
bottom_structure('EIBO Services All Right Reserved || Developed by <a href="http://eibo.in/" target="_blank">EIBO Software</a>');


?>
