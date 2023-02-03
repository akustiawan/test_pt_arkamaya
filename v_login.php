

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">login</h1>
                                    </div>
                                    <form class="user"method="post"action="<?=base_url('Login/login_aksi')?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username"name="username" aria-describedby="emailHelp"
                                                placeholder="username">
                                                <small><span class="text-danger"><?=form_error('username')?></span></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password"name="password" placeholder="Password">
                                                 <small><span class="text-danger"><?=form_error('password')?></span></small>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                      
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

