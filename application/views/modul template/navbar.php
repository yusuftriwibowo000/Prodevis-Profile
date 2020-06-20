<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <img src="build/img/Ulogonav.png" alt="" width="60" height="50">
    </a>
    <button class="navbar-toggler" class="navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item mr-4">
                <a href="<?= base_url('Pricing'); ?>" class="nav-link">
                <strong>Pricing</strong>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a href="<?= base_url('Help'); ?>" class="nav-link">
                <strong>Help</strong>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a href="<?= base_url('Contact'); ?>" class="nav-link">
                <strong>Contact</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Apps'); ?>" class="btn btn-md btn-primary my-2 my-sm-0 btn-success btn-bold">
                <i class="fas fa-plus mr-2"></i>Create Giveaway 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" 
                data-toggle="modal" data-target="#loginModal" class="lnr lnr-user text-light">Login
                <span class="lnr lnr-user text-light"></span>
                </a>    
            </li>
            <!-- <li class="nav-item dropdown ml-2">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <strong style="text-transform: uppercase;">en</strong>
                </a>
                <div class="dropdown-menu dropdown-menu-lang" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">English</a>
                    <a class="dropdown-item" href="">Español</a>
                    <a class="dropdown-item" href="https://app-sorteos.com/fr">Francais</a>
                    <a class="dropdown-item" href="https://app-sorteos.com/pt">Português</a>
                </div>
            </li> -->
        </ul>
        </div>
</nav>

<!-- LOGIN -->
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

                    

                    <form method="post" action="<?= base_url('auth'); ?>">
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
<script type="3943a0f289fc8f7a9a21f33f-text/javascript">
    $(document).ready(function () {


        $('#loginModal').on('show.bs.modal', function (e) {
            $('.modal').modal('hide');
        });

        $('#loginModal').on('shown.bs.modal', function (e) {
            if (!$('body').hasClass('modal-open')) {
                $('body').addClass('modal-open');
            }
        });
    });
</script>
<!-- REGISTER -->
<div id="registerModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg text-center">
            <div class="modal-body">
                <div class="text-left my-3">
                    <h3 class="d-inline">
                        Simple Register</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <div class="dropdown-divider"></div>
                <form id="kaydolForm" action="https://simpliers.com/en/kaydol-kaydet" method="POST">
                    <div class="row my-3">
                        <input type="hidden" name="_token" value="WZ3HJh5o3F8qBeduUWufiKCknKMeVIIwfbhlwWG1">
                        <input type="hidden" value="" name="fbUserID">
                        <input type="hidden" name="nextUrl"
                               value="">


                        <div class="col-md-8 offset-md-2 mb-4">
                            <h5 class="text-center">
                                <label for="nameForRegister">Name and Surname* :</label>
                            </h5>
                            <input type="text" required
                                   class="form-control simpli-border shadow  "
                                   id="nameForRegister" name="name" value="">
                            <div class="text-center">
                                                            </div>
                        </div>

                        <div class="col-md-8 offset-md-2 mb-4">
                            <h5 class="text-center">
                                <label for="email" class="mb-0">E-Mail Address* :</label>
                                <small class="d-block text-muted" style="font-size: 10px">
                                                                    </small>
                            </h5>
                            <input type="email" required
                                   class="form-control simpli-border shadow "
                                   id="email" name="email" value="">
                            <div class="text-center">
                                                            </div>
                        </div>

                        <div class="offset-md-1 col-md-4 mb-4">
                            <h5 class="text-center">
                                <label for="password">Password* :</label>
                            </h5>
                            <input type="password" required
                                   class="form-control simpli-border shadow  "
                                   id="password" name="password">
                            <div class="text-center">
                                                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <h5 class="text-center"><label
                                    for="passwordRepeat">Password Repeat*
                                    :</label>
                            </h5>
                            <input type="password" required
                                   class="form-control simpli-border shadow"
                                   id="passwordRepeat" name="passwordRepeat" value="">
                            <div id="sifrelerEslesmiyor" class="text-center" style="display: none;">
                                <p class="error-desc">Passwords Doesn&#039;t Match</p>
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            <button type="submit"
                                    class="primary-btn my-3">
                                Register Now                                <span
                                    class="lnr lnr-arrow-right align-middle"></span>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="dropdown-divider"></div>
                <div class="modal-container">
                    <a href="#" data-toggle="modal" data-target="#loginModal"
                       class="primary-btn border-0 d-block m-1 p-2">Already Have An Account?<span
                            class="lnr lnr-chevron-right"></span>
                    </a>
                </div>
            </div>
            
            
            
            
            
            
            
            
        </div>
    </div>
</div>
<script type="3943a0f289fc8f7a9a21f33f-text/javascript">
    $(document).ready(function () {
        $('#registerModal').on('show.bs.modal', function (e) {
            $('.modal').modal('hide')
        });

        $('#registerModal').on('shown.bs.modal', function (e) {
            if (!$('body').hasClass('modal-open')) {
                $('body').addClass('modal-open');
            }
        });


        $("body").on("keyup", "#password, #passwordRepeat", function () {
            var pass1 = $("#password").val();
            var pass2 = $("#passwordRepeat").val();
            if (pass1 === pass2) {
                $("#sifrelerEslesmiyor").slideUp("fast");
            } else {
                $("#sifrelerEslesmiyor").slideDown("fast");
            }
        });
    })
</script>