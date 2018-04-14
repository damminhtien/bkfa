<section id="login">
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>
                </div>
                <div id="div-forms">
                    <form id="login-form">
                        <h3 class="text-center">Login</h3>
                        <div class="modal-body">
                            <label for="username">Username</label>
                            <input id="login_username" class="form-control" type="text" placeholder="Enter username " required>
                            <label for="username">Password</label>
                            <input id="login_password" class="form-control" type="password" placeholder="Enter password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer text-center">
                            <div>
                                <button type="submit" class="btn btn-general btn-white">Login</button>
                            </div>
                            <div>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <form id="register-form" style="display:none;">
                        <h3 class="text-center">Register</h3>
                        <div class="modal-body">
                            <label for="username">Username</label>
                            <input id="register_username" class="form-control" type="text" placeholder="Enter username" required>
                            <label for="register_email">E-mailId</label>
                            <input id="register_email" class="form-control" type="text" placeholder="Enter eMail" required>
                            <label for="register_password">Password</label>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-general btn-white">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>