<?php $this->load->view('admin/links'); ?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <?php $this->load->view('admin/header'); ?>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('admin/leftnav'); ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Approve Faculty

                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Approve Faculty</a></li>

                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Table row -->
                <div class="pad margin no-print" style>
                    <div class="callout callout-info" style="margin-bottom: 0!important;">
                    </div>
                </div>

                <!-- Main content -->
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-info-circle"></i> Approve Faculty.

                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
<?php 
    if ($this->session->flashdata('success_msg')) {
        echo '<div class="col-md-12 col-sm-6"> <div class="panel panel-success">		
                        <div class="panel-heading">';
        echo $this->session->flashdata('success_msg');
        echo '</div> </div></div>';
    }else if ($this->session->flashdata('error_msg')) {
        echo '<div class="col-md-12 col-sm-6"> <div class="panel panel-danger">		
                        <div class="panel-heading">';
        echo $this->session->flashdata('error_msg'); 
        echo '</div> </div></div>';
    }
    ?>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
										<th>Designation</th>
										<th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              <?php $i=1;
                                foreach ($approve_faculty as $row) {  ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $i; ?> </td>
                                            <td> <?php echo $row['name']; ?></td>
                                            <td> <?php echo $row['employee_id']; ?></td>
											<td> <?php echo $row['designation']; ?></td>
											<td> <?php 
											
											if($row['status']=='Approved')
											{
											echo $row['status']; ?></td>
                                            <td><div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-block btn-danger" onClick="show_delete_confirm(<?php echo $row['id'] ?>)" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash-o" aria-hidden="true" ></i> Delete</button>
                                                   
                                                </div>
                                            </td>
											<?php  } 
											
											else
											{
											echo $row['status']; ?></td>
                                            <td><div class="btn-group-vertical">
                                                    <a href="<?= base_url('Admin/approve_faculty/') . $row['id']; ?>"> <button type="button" class="btn btn-block btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Approve</button> </a>
                                                    <button type="button" class="btn btn-block btn-danger" onClick="show_delete_confirm(<?php echo $row['id'] ?>)" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash-o" aria-hidden="true" ></i> Delete</button>
                                                   
                                                </div>
                                            </td>
											
											
											<?php  } ?>
											
											
											
											
                                        <?php $i++;  } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want delete this item?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" style="float:right!important;"class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <!-- this row will not appear when printing -->
                   
                </section>

                <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('admin/footer'); ?>

        <?php // $this->load->view('admin/sidebar'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->

    <!-- FastClick -->
    <script src="<?= base_url(); ?>/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url(); ?>/dist/js/demo.js"></script>
    <!-- CK Editor -->
    <script src="<?= base_url(); ?>/bower_components/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url(); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
   <script type="text/javascript">
    function show_delete_confirm(id)
    {
      
        var r = confirm("Are you sure you want to delete? ");
        if (r == true) {
            window.location = "<?php echo base_url(); ?>admin/del_approve_faculty/" + id;
        }
    }
</script>
 <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
</body>
</html>

