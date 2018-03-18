{{-- <div class="animation-model">
	<div class="md-modal md-effect-1" id="modal-1">
	    <div class="md-content">
	        <h3>User Role Form</h3>
	        <div>
	            <form id="main" method="post" action="/" novalidate>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Simple Input</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Text Input Validation">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password input">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Repeat Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
                            <span class="messages"></span>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Radio Buttons</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female
                                </label>
                            </div>
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
	           	 			<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
                        </div>
                    </div>
                </form>
	        </div>
	    </div>
	</div>

	<div class="md-overlay"></div>

</div>
 --}}

 <div class="modal fade" id="modal-form" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
	        <form method="post" data-toggle="validator">
	            <div class="modal-header">
	                <h5 class="modal-title">User Role Form</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body p-b-0">
	                	
                	{{ method_field('POST') }}

                	<input type="hidden" name="id" id="id">

                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <label class="form-control-label">Role Name</label>
                                <span class="role_name-message text-danger"></span>
                                <input type="text" name="role_name" class="form-control" id="role_name" placeholder="Enter the role name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <label class="form-control-label">Description</label>
                                <span class="description-message text-danger"></span>
                                <textarea name="description" class="form-control" id="description" rows="5" placeholder="Add description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-t-15">
                        <div class="col-sm-12">

                        </div>
                    </div>
	            </div>
	            <div class="modal-footer">
	                <button type="submit" class="btn btn-primary">Save</button>
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	            </div>
	        </form>
        </div>
    </div>
</div>