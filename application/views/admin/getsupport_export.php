<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Support - export  </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
 
	 <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/datatables/media/css/dataTables.bootstrap4.css" />
    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/prism/prism.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/app.min.css" type="text/css">

     <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/datepicker/daterangepicker.css" type="text/css">
 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->


<!-- Layout wrapper -->
<div class="layout-wrapper">

  
    <!-- ./ Header -->
<?php   $this->load->view('admin/file/header')?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
     

		<?php   $this->load->view('admin/file/navbar')?>
        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Get SupportInquiry Export </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="<?php echo base_url();?>Inquiry/view_get_support"> 
                    Get Support List </a>
                    </li>
                    <li class="breadcrumb-item active">
                         <a href="#">  Get Support Export  </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
  				   <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">  Get Support Inquiry Export  </h6>
                            
                           <?php  echo form_open_multipart('Inquiry/export_getsupport'); ?>
	   
                              <div data-label=" Inquiry Export " class="demo-code-preview row"> 
 	     <input type="hidden"   name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
	
      <div class="col-md-6 mb-3">
         <label for="daterangepicker2">Select Start Date</label>
       <input type="text" id ="daterangepicker" name="daterangepicker" class="form-control" required>
   <div class="invalid-tooltip">   Please Enter Password.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="daterangepicker2">Select End Date</label>
        <input type="text" name="daterangepicker2" id="daterangepicker2" class="form-control"required>
        
           <div class="invalid-tooltip">   Please End Date.  </div>
      </div>
     	<br> 
    	 <button class="btn btn-primary" type="submit">Show data </button> 
                             
             
     </div>
     <?php  echo form_close();?>
     <br>  <br>
       <h6 class="card-title">  Get Support Inquiry Export  
       <?php  $msg2= $this->session->flashdata('export_msg');
       $msgggggg= $this->session->flashdata('export_msg');
       if ( $msgggggg != "" )
       {
           echo $msgggggg;
         //  echo "toastr.error('$msgggggg');";
       } 
       
       ?>
       </h6>  <hr>          
                                  <div class="table-responsive">
                               	<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                    <thead>
                                    <tr class="table-dark">
                                       <th> #id </th>
                                        <th> Name </th>
                                        <th> Email</th>
                                        <th> Mobile </th>
                                         <th>Message </th>
                                       
                                        <th>Date & time </th>
                                       <th>Verified </th>
                                      
                                      </tr>
                                    </thead>
                                    <tbody>
                                 <?php 
                                    	
                                    	
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->g_id;   
                                    	    $status = $row->g_status;?>
				 			    <tr>
                                        
                                         <td> <?php echo $row->g_id; ?></td>
                                        <td> <?php echo $row->g_name; ?></td>
                                        <td> <?php echo $row->g_email; ?>  </td>
                                        <td> <?php echo $row->g_mobno; ?></td>
                                        <td> <?php echo $row->g_message; ?></td>
                                        
                                         <td> <?php 
                                         echo date("d-M-Y",strtotime($row->g_date));
                                        ?></td>
                                     
                                           <td>  <?php
                   							   $verify = $row->verify;
                   							   if ($verify=="1") {  echo "Verified"?>
                   							    <span title="Mobile number is Verified" class="badge btn-primary"><i class="fa fa-check-circle-o" aria-hidden="true"></i>  </span>
                   							   <?php }?> </td>  
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

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <?php  $this->load->view('admin/file/footer')?>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="<?php echo base_url();?>public/vendors/bundle.js"></script>
  <!-- Prism -->
  
  <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

		<script src="<?php echo base_url();?>public/vendors/datatables/media/js/jquery.dataTables.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>		
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>



<!-- App scripts -->
<script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

<script src="<?php echo base_url();?>public/assets/js/examples.datatables.default.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.row.with.details.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.tabletools.js"></script>

<script src="<?php echo base_url();?>public/vendors/datepicker/daterangepicker.js"></script>



<script type="text/javascript">
$(document).ready(function (){
    $('#example2').DataTable();
});

 
 toastr.options = {
        timeOut: 6000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

 <?php

 $msg= $this->session->flashdata('success');
 if ( $msg != "" )
 { 
 echo "toastr.success('$msg');";
 } 
 $msg2= $this->session->flashdata('error');
 if ( $msg2 != "" )
 {
     echo "toastr.error('$msg2');";
 } ?>


 $('input[name="daterangepicker"]').daterangepicker({
	  singleDatePicker: true,
	  showDropdowns: true
	});
 $('input[name="daterangepicker2"]').daterangepicker({
	  singleDatePicker: true,
	  showDropdowns: true
	});
</script>
</body>
</html>
