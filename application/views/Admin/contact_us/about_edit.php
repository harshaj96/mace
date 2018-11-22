<?php  $this->load->view('admin/links');?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <?php  $this->load->view('admin/header');?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php  $this->load->view('admin/leftnav');?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         About
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edit About
                
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
           
                 <form method="post">
                     <input type="hidden" name="id" value="<?= $about['id'] ?>">
                     <div class="form-group" >
                        <label for="about" class="control-label col-lg-2">Title</label>
                      <div class="col-lg-10">
                          <input type="text"  value="<?php echo $about['title']; ?>" name="title" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
                    
                     <div class="form-group" style="padding-top: 50px;">
                        <label for="about" class="control-label col-lg-2">Description</label>
                        <div class="col-lg-10">
                    <textarea id="editor1" name="description" rows="10" cols="80">
                           <?php echo $about['description']; ?>                
                    </textarea>                        </div>
                      </div><!-- /.form-group -->
                   <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10"> <br><br>
                            <input type="submit" name="update"class="btn btn-primary btn-flat" value="Submit">
                        </div>
                      </div><!-- /.form-group -->
              </form>
            <a href="<?=base_url('admin/about');?>" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Back</a>

            </div>
          </div>
          <!-- /.box -->

          <div class="box" style="display:none;">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/footer'); ?>
 
</div>
<!-- ./wrapper -->

</body>
</html>
