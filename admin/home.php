<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <?php include("include/head_links.php"); ?>
    
</head>
<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?> 

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>dashboard</p>
            </div>

            <div class="dashboard-body">

                <div class="box">
                    <div><i class="fa-solid fa-location-dot" style="color:rgb(219, 40, 4);"></i></div>
                    <a href="dest.php">destinations</a>
                </div>

                <div class="box">
                    <div><i class="fa-solid fa-book" style="color:rgb(132, 0, 240);"></i></div>
                    <a href="bookings.php">bookings</a>
                </div>
                
                <div class="box">
                    <div><i class="fa-solid fa-user" style="color:rgb(0, 129, 242);"></i></div>
                    <a href="users.php">users</a>
                </div>
                
                <div class="box">
                    <div><i class="fa-solid fa-chart-simple" style="color:rgb(161, 0, 176);"></i></div>
                    <a href="packages.php">packages</a>
                </div>

                <div class="box">
                    <div><i class="fa-solid fa-money-check-dollar" style="color:rgb(245, 5, 165);"></i></div>
                    <a href="payments.php">Payments</a>
                </div>

                <div class="box">
                    <div><i class="fa-solid fa-receipt" style="color:rgb(255, 102, 0);"></i></div>
                    <a href="accounts.php">accounts</a>
                </div>

                <div class="box">
                    <div><i class="fa-solid fa-comment" style="color:rgb(2, 179, 25);"></i></div>
                    <a href="reviews.php">reviews</a>
                </div>
            </div>

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>
</html>