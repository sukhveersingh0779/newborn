

 <div id="page-wrapper">

			<div class="container-fluid">
				
					        <div class="row">
							
                      
                        <h2>Link Pages</h2>
                        <form role="form"  method="POST" action="<?php echo base_url('cms_management/link_page_add'); ?>">
							<div class="col-lg-6">
                                <div class="form-group">
                                     <label for="Select">Select Position</label>
                                    <select id="Select" name="position_code" class="form-control">
										<?php
									 if(count($link_pos_page_data['position_data'])):
									 foreach($link_pos_page_data['position_data'] as $pos_data){
									 ?>
                                        <option value="<?php echo $pos_data->id; ?>" > <?php echo $pos_data->position_name; ?></option>
                                        <?php
                                         }
                                         endif;
                                          ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Select">Select Page</label>
                                    <select id="Select" name="page_code" class="form-control">
									<?php
									 if(count($link_pos_page_data['page_data'])):
									 foreach($link_pos_page_data['page_data'] as $page_data){
									 ?>
                                        <option value="<?php echo $page_data->id; ?>" > <?php echo $page_data->page_name; ?></option>
                                        <?php
                                         }
                                         endif;
                                          ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>&nbsp;<p><?php echo $this->session->flashdata('lnk_page_add'); ?> </p>
                                 </div>
                                 
                                 <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Select">Link Page Title</label>
                                    <input class="form-control" id="Input" name="lnk_name" type="text" placeholder="Link page Title" >
                                </div>
                                 </div>
                        </form>
                        </div>

					 <div class="row">
                      <div class="col-lg-12">
                      
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                         <th>Sr.no</th>
                                         <th>Position</th>
                                        <th>Page</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									 if(count($link_pos_page_data['link_page_data'])):
									 $srno = 1;
									 foreach($link_pos_page_data['link_page_data'] as $data){
								     ?>
                                    <tr>
                                       <td><?php echo $srno++; ?></td>
                                        <td><?php echo $data->position_name; ?></td>
                                        <td><?php echo $data->page_name; ?></td>
                                        <td><?php echo $data->lnk_name; ?></td>
                                        <td><?php echo $data->status; ?></td>
                                        <td><?php echo $data->order; ?></td>
                                        <td><a class="btn btn-danger" href="#">Delete</a></td>
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


    

