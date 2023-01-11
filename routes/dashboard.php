<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: ../");
}
$data = $_SESSION['data'];

if ($_SESSION['status'] == 1) {
    $status = '<b style="color: green">Voted</b>';
} else {
    $status = '<b style="color: red">Not Voted</b>';
}
?>

<style>
    body {
        background-image: url("../assets/img/bg.png");
        background-size: cover;
        background-attachment: fixed;
    }

    .page-title {
        color: #ffffff;
        font-size: 2rem;
        text-decoration: none;
    }

    .page-title:hover {
        color: #ffffff;
    }

    #header #logo img {
        padding: 0;
        margin: 0;
        max-height: 40px;
    }

    @media (max-width: 992px) {
        #header #logo img {
            max-height: 30px;
        }
    }

    /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
    #footer {
        background: #101522;
        padding: 0 0 25px 0;
        color: #eee;
        font-size: 14px;
    }

    #footer .footer-top {
        background: #040919;
        padding: 60px 0 30px 0;
    }

    #footer .footer-top .footer-info {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-info h3 {
        font-size: 26px;
        margin: 0 0 20px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-family: "Raleway", sans-serif;
        font-weight: 700;
        color: #fff;
    }

    #footer .footer-top .footer-info img {
        height: 40px;
        margin-bottom: 10px;
    }

    #footer .footer-top .footer-info p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Raleway", sans-serif;
        color: #fff;
    }

    #footer .footer-top .social-links a {
        display: inline-block;
        background: #222636;
        color: #eee;
        line-height: 1;
        margin-right: 4px;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    #footer .footer-top .social-links a i {
        line-height: 0;
        font-size: 16px;
    }

    #footer .footer-top .social-links a:hover {
        background: #f82249;
        color: #fff;
    }

    #footer .footer-top h4 {
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 12px;
        border-bottom: 2px solid #f82249;
    }

    #footer .footer-top .footer-links {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footer .footer-top .footer-links ul i {
        padding-right: 5px;
        color: #f82249;
        font-size: 18px;
    }

    #footer .footer-top .footer-links ul li {
        border-bottom: 1px solid #262c44;
        padding: 10px 0;
    }

    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }

    #footer .footer-top .footer-links ul a {
        color: #eee;
    }

    #footer .footer-top .footer-links ul a:hover {
        color: #f82249;
    }

    #footer .footer-top .footer-contact {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-contact p {
        line-height: 26px;
    }

    #footer .footer-top .footer-newsletter {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-newsletter input[type=email] {
        border: 0;
        padding: 6px 8px;
        width: 65%;
    }

    #footer .footer-top .footer-newsletter input[type=submit] {
        background: #f82249;
        border: 0;
        width: 35%;
        padding: 6px 0;
        text-align: center;
        color: #fff;
        transition: 0.3s;
        cursor: pointer;
    }

    #footer .footer-top .footer-newsletter input[type=submit]:hover {
        background: #e0072f;
    }

    #footer .copyright {
        text-align: center;
        padding-top: 30px;
    }

    #footer .credits {
        text-align: center;
        font-size: 13px;
        color: #ddd;
    }
</style>

<?php require_once('../partials/header.php') ?>
<!-- Navbar Section -->
<section class="py-3" id="header">
    <div class="container">
        <div class="d-sm-flex" id="logo">
            <a class="page-title" href=""><img src="../assets/img/evote-logo.png" class="mb-3" alt=""></a>

            <div class="ms-auto">
                <a href="../routes/logout.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div id="mainSection">
            <div id="profileSection">
                <div class="card group-card bg-dark text-light" style="width: 18rem;">

                    <div class="upper"><img src="../assets/img/india.png"></div>

                    <div class="user text-center">
                        <div class="profile">
                            <img src="../uploads/<?php echo $data['photo'] ?>" class="rounded-circle" width="80" alt="Profile Picture">
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo $data['name'] ?></h5>
                        <p class="card-text">Address: <?php echo $data['address'] ?></p>
                        <p class="card-text">Mobile: <?php echo $data['mobile'] ?></p>
                        <p class="card-text">Status: <?php echo $status ?></p>
                    </div>
                </div>
            </div>
            <div id="groupSection">
                <?php

                if (isset($_SESSION['groups'])) {
                    $groups = $_SESSION['groups'];
                    for ($i = 0; $i < count($groups); $i++) {
                ?>

                        <div class="card my-3 group-card bg-dark text-light" style="width: 18rem;">

                            <div class="upper"><img src="../assets/img/india.png" class="img-fluid"></div>


                            <div class="user text-center">
                                <div class="profile">
                                    <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" class="rounded-circle" width="80" alt="Profile Picture">
                                </div>
                            </div>


                            <div class="card-body">
                                <h5 class="card-title"><?php echo $groups[$i]['name'] ?></h5>
                                <h5 class="card-title">Votes: <?php echo $groups[$i]['votes'] ?></h5>

                                <form method="POST" action="../api/vote.php">
                                    <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                    <input type="hidden" name="gid" value="<?php echo $groups[$i]['id'] ?>">
                                    <?php

                                    if ($_SESSION['status'] == 1) {
                                    ?>
                                        <button disabled class="btn btn-success" type="button">Voted</button>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn btn-primary" type="submit">Vote</button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                        <b>No groups available right now.</b>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>eVote</strong>. All Rights Reserved <span id="year"></span>
        </div>
        <div class="credits">Designed by <a href="">BCA Team, VIMIT</a></div>
    </div>
</footer><!-- End  Footer -->


<?php require_once('../partials/footer.php') ?>