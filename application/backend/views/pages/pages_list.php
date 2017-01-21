

 <div id="page-wrapper">

			<div class="container-fluid">
				
					        <div class="row">
							<div class="col-lg-12">
                        <h2>Pages Detail</h2>
                        <span class="row" ><h3><u><b><a href="<?php echo base_url('cms_management/pages_add_view'); ?>">New</a></b></u></h3></span>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                         <th>Sr.no</th>
                                        <th>Page Name</th>
                                        <th>Created At</th>
                                        <th>Modified At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									 if(count($pages_data)):
									 $srno = 1;
									 foreach($pages_data as $data){
								     ?>
                                    <tr>
                                       <td><?php echo $srno++; ?></td>
                                        <td><?php echo $data->page_name; ?></td>
                                        <td><?php echo $data->created_at; ?></td>
                                        <td><?php echo $data->modified_at; ?></td>
                                        <td>
											<a class="btn btn-default" href="#">Select</a>&nbsp;
											<a class="btn btn-danger" href="#">Delete</a>
										</td>
                                    </tr>
                                     <?php } ?>
                                  <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


    

