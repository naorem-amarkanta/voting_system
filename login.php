<?php require_once('./partials/header.php') ?>
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="api/login.php" method="POST">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Online Voting System</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Page</h5>

                                    <div class="form-floating mb-3">
                                        <input type="number" name="mob" class="form-control" id="InputPhone" placeholder="1234567890" required>
                                        <label for="InputPhone">Enter Phone Number</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Enter Password" required>
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select name="role" class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
                                            <option selected>-- Choose --</option>
                                            <option value="1">Voter</option>
                                            <option value="2">Group</option>
                                        </select>
                                        <label for="floatingSelect">Select who you are ?</label>
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button id="loginbtn" class="btn btn-primary" type="submit" name="loginbtn">Login</button>
                                    </div>

                                    <div class="text-center">
                                        Does't have an account?
                                        <a href="routes/register.php" class="card-link">Register here</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('./partials/footer.php') ?>