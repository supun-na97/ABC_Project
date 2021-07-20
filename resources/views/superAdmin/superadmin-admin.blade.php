 <!DOCTYPE html>
 <html dir="ltr" lang="en">

 <head>
     @include('superadmin.layouts.head')
     <!--    Data Tables CSS-->
     @include('superadmin.layouts.datatablecss')

     <![endif]-->
</head>

<body>

<!-- Preloader - style you can find in spinners.css -->

<div class="preloader">
    @include('superadmin.layouts.preloader')
</div>

<!-- Main wrapper - style you can find in pages.scss -->

<div id="main-wrapper">

    <!-- Topbar header - style you can find in pages.scss -->

    <header class="topbar">
        @include('superadmin.layouts.header')
    </header>

    <!-- End Topbar header -->

    <!-- Left Sidebar - style you can find in sidebar.scss  -->

    <aside class="left-sidebar">
        @include('superadmin.layouts.aside')
        <!-- End Sidebar scroll-->
    </aside>

    <!-- End Left Sidebar - style you can find in sidebar.scss  -->

    <!-- Page wrapper  -->

    <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">ADMIN SECTION</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Container fluid  -->

        <div class="container-fluid">

            <!-- Start Page Content -->

            <!-- basic table -->

            <!-- language options -->
            <div class="col-md-12">
               
            </div>
            <div class="row">
                <div class="col-12">
               
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">ADMIN</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <a href="#long-modal-new" class="btn waves-effect waves-light btn-outline-success
                                    col-md-1 img-fluid" data-toggle="modal" data-target="">Add New</a>

                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                            
                                <table id="lang_opt" class="table table-striped table-bordered display"
                                      >
                                    <thead>
                                    <tr>

                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                    <tr>
                                    <input type="hidden" class="ncdelete_val_id" value="">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                        <td>
                                            <a class="btn waves-effect waves-light btn-outline-primary
                                    edit" data-toggle="modal" data-target="">Edit</a>

                                    <button type="button" class="btn waves-effect waves-light btn-outline-primary ncdeletebtn
                                    " data-toggle="" data-target="">Delete</button>
                                        </td>

                                    </tr>
                                  
                                    
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>

                                    </tr>
                                    </tfoot>
                                </table>
                               
                        <!-- <div style="text-align:center"><span style="text-align:right;color:red">No Records Found</span></div> -->
                               

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- End PAge Content -->

            <!-- End Right sidebar -->

        </div>

        <!-- End Container fluid  -->

        <!-- footer -->

       

        <!-- End footer -->

    </div>

    <!--  News Category Update Modal-->

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vertically Center</h4>
                <!-- sample modal content -->
                <div id="edit_newscategory" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h4 class="mb-0 text-white">Admin Update Section</h4>
                                            </div>
                                            <form action="" method="POST">
                                            
                                                <hr>
                                                <div class="form-body">
                                                    <div class="card-body">
                                                        <div class="row pt-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                  
                                                                    <input id="a_id"
                                                                           name="a_id" class="form-control"
                                                                           placeholder="" type="hidden">
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>

                                                        
                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Name</label>
                                                                    <input type="text" id="a_name" name="a_name"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="email" id="a_email" name="a_email"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="password" id="a_password" name="a_password"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Confirm Password</label>
                                                                    <input type="password" id="a_password1" name="a_password1"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>

                                                      </div>

                                                            <div class="form-actions">
                                                                <div class="card-body">
                                                                    <button type="submit" class="btn btn-success"
                                                                           ><i
                                                                            class="fa fa-check"></i>Update
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!--End update modal-->
        </div>
    </div>


    <!--    Save News Modal-->
    <div class="modal" id="long-modal-new" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h4 class="mb-0 text-white">Add Admin</h4>
                                </div>
                                <form action="" method="POST">

                                   
                                    <hr>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Name</label>
                                                                    <input type="text" id="a_name" name="a_name"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="email" id="a_email" name="a_email"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="password" id="a_password" name="a_password"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group has-danger">
                                                                    <label class="control-label">Confirm Password</label>
                                                                    <input type="password" id="a_password1" name="a_password1"
                                                                           class="form-control form-control-danger"
                                                                           placeholder="" required>
                                                                    <small class="form-control-feedback"></small>
                                                                </div>
                                                            </div>
                                                            
                                                      </div>

                                                <div class="form-actions">
                                                    <div class="card-body">
                                                        <button type="submit" id="savebtn" class="btn btn-success"
                                                                ><i class="fa fa-check"></i> Upload
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
        <!-- footer -->
        @include('superadmin.layouts.footer')
       

<!-- End footer -->


            </div>
            <!-- /.modal-content -->
           
        </div>
        <!-- /.modal-dialog -->
    </div>
   
    <!-- End Wrapper -->

    <div class="chat-windows"></div>

    <!-- All Jquery -->

    @include('superadmin.layouts.js')

    <!--Data Tables JS-->
    @include('superadmin.layouts.datatablejs')

    <!--    update products script-->
    

    <!--This page plugins -->


</body>

</html>