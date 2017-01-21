
 <div id="page-wrapper">

			<div class="container-fluid">
				
					<div class="row">
                      <div class="col-lg-6">
                        <form  method="POST" action="<?php echo base_url('cms_management/position_add'); ?>" >
							<div class="form-group">
                                <label><h3>Position</h3></label>
                                <input type="text" class="form-control" name="position_name"  >
                                <p class="help-block">Postion of Menubar to setup</p>&nbsp;<p><?php echo $this->session->flashdata('pos_add'); ?> </p>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Add" />
                           </form>
                       </div>
                     </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Positions Detail</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Position Code</th>
                                        <th>Position Name</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									 if(count($position_data)):
									 $srno = 1;
									 foreach($position_data as $data){
								     ?>
                                    <tr class="active">
										<td><?php echo $srno++; ?></td>
                                        <td><?php echo $data->id; ?></td>
                                        <td><?php echo $data->position_name; ?></td>
                                        <td><?php echo $data->status; ?></td>
                                        <td><?php echo $data->order; ?></td>
                                        <td>
											<a class="btn btn-default" href="#">Edit</a>&nbsp;
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


    

