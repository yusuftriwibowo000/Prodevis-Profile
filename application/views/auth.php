<div id="loginModal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg text-center">
            <div class="modal-body">
                <div class="modal-container">
                    <div class="text-left my-3">
                        <h3 class="d-inline">Login</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                            </div>
                    <div class="dropdown-divider"></div>

                    

                    <form method="post" action="<?= base_url(); ?>">
                    <?= $this->session->flashdata('message'); ?>
                        <input type="hidden" name="_token" value="WZ3HJh5o3F8qBeduUWufiKCknKMeVIIwfbhlwWG1">
                        <div class="row my-3">
                            <div class="col-md-12 my-2">
                                <h6><label for="emailForLogin">Email:</label></h6>
                                <input required type="text" 
                                type="email" class="form-control simpli-border shadow-sm" id="emailForLogin"
                                    name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('username', '<small class = "text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-12 my-2">
                                <h6><label for="passwordForLogin">Password :</label></h6>
                                <input required type="text"  type="password" class="form-control simpli-border shadow-sm"
                                       id="passwordForLogin" name="password" >
                                    <?= form_error('password', '<small class = "text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 my-2">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input"
                                           name="remember" checked
                                           id="remember" value="1">

                                    <label class="custom-control-label checkbox-simpli ml-2"
                                           for="remember">
                                        <h6>Remember Me</h6>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button class="primary-btn my-3" type="submit">Login
                                <span class="lnr lnr-arrow-right"></span></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>


                    <div class="dropdown-divider"></div>

                    <a href="#" data-toggle="modal" data-target="#registerModal"
                       class="primary-btn border-0 d-block m-1 p-2">Register<span
                            class="lnr lnr-chevron-right"></span>
                    </a>
                    <a href="en/forget-my-password.html" rel="nofollow" title="Forget Password"
                       class="primary-btn border-0 d-block m-1 p-2">Forget Password<span
                            class="lnr lnr-lock"></span>
                    </a>
                </div>
   
            </div>
        </div>
    </div>
</div>