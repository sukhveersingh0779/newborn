

 <div id="page-wrapper">

			<div class="container-fluid">
				                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="<?php echo base_url('cms_management/pages_add'); ?>" >

                            <div class="form-group">
                                <label>Page Title</label>
                                <input class="form-control" name="page_name" required>
                                <p class="help-block">Enter title of page to show on site</p>&nbsp;<p><?php echo $this->session->flashdata('page_add'); ?> </p>
                            </div>

                          
                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control" rows="3" name="page_text" required ></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Cancel</button>

                        </form>

                    </div>
				</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


    

