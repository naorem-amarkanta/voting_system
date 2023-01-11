<?php require_once('../partials/header.php') ?>

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

                                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <span class="h1 fw-bold mb-0">Online Voting System</span>
                                    </div>

                                    <h5 class="fw-normal mb-2 pb-3" style="letter-spacing: 1px;">Registration Page</h5>

                                    <div class="d-sm-flex justify-content-between mb-3">

                                        <div class="form-floating mb-2">
                                            <input type="text" name="name" class="form-control" id="name" required>
                                            <label for="name">Enter your name</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="number" name="mob" class="form-control" id="phone" required>
                                            <label for="phone">Enter you phone number</label>
                                        </div>
                                    </div>

                                    <div class="d-sm-flex justify-content-between mb-2">

                                        <div class="form-floating mb-2">
                                            <input type="password" name="pass" class="form-control" id="password" required>
                                            <label for="password">Password</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="password" name="cpass" class="form-control" id="cpassword" required>
                                            <label for="cpassword">Confirm Password</label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input type="text" name="add" class="form-control" id="address" required>
                                        <label for="address">Address</label>
                                    </div>

                                    <div class="mb-2">
                                        <label for="formFile" class="form-label">Upload Image</label>
                                        <input class="form-control" type="file" id="formFile" name="image" required>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <select name="role" class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
                                            <option selected>-- Choose --</option>
                                            <option value="1">Voter</option>
                                            <option value="2">Group</option>
                                        </select>
                                        <label for="floatingSelect">Select who you are ?</label>
                                    </div>

                                    <div class="d-grid mb-2">
                                        <button id="loginbtn" class="btn btn-primary" type="submit" name="registerbtn">Register</button>
                                    </div>

                                    <div class="text-center">
                                        Already have an account?
                                        <a href="../login.php" class="card-link">Login here</a>
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








<?php require_once('../partials/footer.php') ?>