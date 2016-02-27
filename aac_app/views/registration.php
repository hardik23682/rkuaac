<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Register</h3>
                    </div>
                    <div class="panel-body">
						<?php if(!empty($error)) { ?>
							<div class="alert alert-danger fade in"><?=$error;?></div>
						<?php } ?>
                        <?php if(!empty($msg)) { ?>
                            <div class="alert alert-success fade in"><?=$msg;?></div>
                        <?php } ?>

                        <?php echo form_open(current_url(), array(
                            'id' => 'frmregistration',
                            'role' => 'form'
                        )); ?>
                            <fieldset>
                                <div class="form-group">
                                    <label for="txtexperience">Name</label>
                                    <input class="form-control" placeholder="Your name" name="txtname" id="txtname" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">School</label>
                                    <select name="txtschool" id="txtschool" class="form-control" required>
                                        <option value="1">School of Computer Science</option>
                                        <option value="2">School of Diploma Studies</option>
                                        <option value="3">School of Engineering</option>
                                        <option value="4">School of Management</option>
                                        <option value="5">School of Pharmacy</option>
                                        <option value="6">School of Physiotherapy</option>
                                        <option value="7">School of Science</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">Mobile Number</label>
                                    <input class="form-control" placeholder="Mobile Number" name="txtmobile" id="txtmobile" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">Total Experience</label>
                                    <input class="form-control" placeholder="Year" name="txtyear" id="txtyear" type="text" required>
                                    <input class="form-control" placeholder="Month" name="txtmonth" id="txtmonth" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">Email id</label>
                                    <input class="form-control" placeholder="E-mail" name="txtemail" id="txtemail" type="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">Password</label>
                                    <input class="form-control" placeholder="Password" name="txtpass" id="txtpass" type="password" value="" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtexperience">Confirm Password</label>
                                    <input class="form-control" placeholder="Confirm Password" name="txtcpass" id="txtcpass" type="password" value="" maxlength="15" required>
                                </div>

                                <input type="submit" class="btn btn-lg btn-success btn-block" name="btnRegister" id="btnRegister" value="Register">
								<div class="form-group">
                                    <label>
                                        <a href="<?=site_url('login');?>">Already register? Click Here</a>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>