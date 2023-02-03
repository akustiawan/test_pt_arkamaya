
    <!-- Page Wrapper -->
   

 
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow"> 
                                <a class="dropdown-item" href="<?=base_url('login/logout')?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><h4>Project</h4></h6>
                        </div>
                        
                         <div class="card-body">
                         <div class="table-responsive">
                        <table  class="table table-bordered" width="100%" cellspacing="0">
                        	<tr>
                        		<td>
                                    
                               <div class="row align-items-center">
                                <div class="col">
                                    <small ><p style="margin-left: 40px;">Project Name</p></small>
                                   <label for="filter"id="filter">Filter</label>
                                    <input type="text" name="filter"id="filter"style="padding-left: 10px;">
                                </div>
                                <div class="col">
                                  <small ><p>All Client</p></small>
                                  <select>
                                      <option>All Client</option>
                                  </select>
                                </div>
                                <div class="col">
                                  <small ><p>Status</p></small>
                                   <select>
                                      <option>Status</option>
                                  </select>
                                </div>
                                <div class="col">
                                    <small ><p></p></small><br>
                                <button type="submit">Clear</button>
                                </div>
                              </div>
                        		</td>                            
                        	</tr>
                        	
                        </table>
                        </div> 
                        </div>                      
                        <div class="card-body">
                         <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    	<tr>
                                    		<th>
                                        		<a href=""class="btn btn-secondary"data-toggle="modal" data-target="#newModal">New</a>
                                        	</th>
                                        	<th>
                                        		<a href=""class="btn btn-secondary">Delete</a>
                                        	</th>
                                    	</tr>                                                                            	
                                        <tr style="background-color: grey;">
                                        	<th><input type="checkbox" name=""></th>
                                            <th><span>Action</span></th>
                                            <th><span>Project Name</span></th>
                                            <th><span>Client</span></th>
                                            <th><span>Project Start</span></th>
                                            <th><span>Project End</span></th>
                                            <th><span>Status</span></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $count=0;
                                        foreach ($join_table as $row) : ?>
                                        <tr>
                                        	<td><input type="checkbox" name=""></td>
                                            <td>
                                                <a href=""class="btn btn-secondary">Edit</a>
                                            </td>
                                            <td><?=$row->project_name;?></td>
                                            <td><?=$row->client_name;?></td>
                                            <td><?=$row->project_start;?></td>
                                            <td><?=$row->project_end;?></td>
                                            <td><?=$row->project_status;?></td>
                                        </tr>
                                    <?php $count++;?>
                                  <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ade Kustiawan <?=date('Y')?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('login/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- add modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=""method="post">
      <div class="modal-body">
         <div class="form-group">
        <label for="formGroupExampleInput">Project Name</label>
        <input type="text" class="form-control" id="project_name"name="project_name">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Client Name</label>
        <input type="text" class="form-control" id="client_name"name="client_name" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Project Start</label>
        <input type="text" class="form-control" id="project_start"name="project_start" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Project End</label>
        <input type="text" class="form-control" id="project_end"name="project_end" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Status</label>
        <input type="text" class="form-control" id="project_status"name="project_status" >
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"name="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>



    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/')?>js/demo/datatables-demo.js"></script>

</body>

</html>