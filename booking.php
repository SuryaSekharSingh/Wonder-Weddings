<?php
include("include/db_connect.php");

if(isset($_GET['hall_sno'])){
    $hall_sno = $_GET['hall_sno'];
    $hallName = $_GET['hall_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />
    <link rel="stylesheet" type="text/css" href="css/styleBooking.css" />
    <title>Book With Us</title>


</head>

<body class="body">

    <div class="container">
        <?php 
            include("include/header.php"); 
            // echo $_SESSION['userID'];
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Gname = $_POST['g-name'];
                $Bname = $_POST['b-name'];
                $GPname = $_POST['g-p-name'];
                $BPname = $_POST['b-p-name'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $package = $_POST['package'];
                $weddingDate = $_POST['date'];
                $hall_sno = $_POST['hall_sno'];
                $hallName = $_POST['venue'];
                if(isset($_SESSION['userID'])){
                    $userID = $_SESSION['userID'];
                    
                    $packageQuery = "select * from pricing where plan='$package'";
                    $packageResult = mysqli_query($conn, $packageQuery);
                    $packageRow = mysqli_fetch_assoc($packageResult);
                    $payment_due = $packageRow['price'];

                    $bookingQuery = "insert into booking (user_id, groom_name, bride_name, groom_parent, bride_parent, contact, email, hall_sno, wedding_date, package, payment_done , payment_due) VALUES 
                    ($userID , '$Gname' , '$Bname' , '$GPname' , '$BPname' , '$contact' , '$email' , '$hall_sno' , '$weddingDate' , '$package' , 0 , '$payment_due')";
                    $bookingResult = mysqli_query($conn, $bookingQuery);
                    header("location:index.php?booking=true");
                    exit();
                }
                else{
                    header("location:booking.php?hall_sno=$hall_sno&hall_name=$hallName");
                    exit();
                }
            }
        ?>

        <section class="venues">
            <div class="info">
                <h3>pick a date</h3>
                <div class="title-dash" style="width:10rem;"></div>

                <div class="booking">
                    <div class="calendar">

                        <div class="date">

                            <div class="month">

                                <div class="previous"> <button class="button" onclick="month_change_button_click(-1)"><i
                                            class="fa-solid fa-angles-left"></i></button></div>
                                <div class="current"
                                    style="box-shadow: var(--box-shadow-ultra);transform: translateY(-.5rem);"> <button
                                        class="button" onload="month_change_button_click(0)"></button>
                                </div>
                                <div class="next"> <button class="button" onclick="month_change_button_click(1)"><i
                                            class="fa-solid fa-angles-right"></i></button></div>

                            </div>

                            <div class="year">
                                <span class="prev-year" onclick="year_change_button_click(-1)">
                                    <i class="fa-solid fa-angles-left" style="font-size:2rem;"></i>
                                </span>
                                <p></p>
                                <span class="next-year" onclick="year_change_button_click(1)">
                                    <i class="fa-solid fa-angles-right" style="font-size:2rem;"></i>
                                </span>

                            </div>
                        </div>



                        <div class="cal-row">
                            <div class="cal-week" style="background-color: var(--transparent-white);color:var(--red);">S
                            </div>
                            <div class="cal-week">M</div>
                            <div class="cal-week">T</div>
                            <div class="cal-week">W</div>
                            <div class="cal-week">T</div>
                            <div class="cal-week">F</div>
                            <div class="cal-week">S</div>
                        </div>

                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                        <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div>
                    </div>

                    <div class="booking-form">
                        <form action="booking.php" method="POST">
                            <h2>details</h2>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-person"> </i>
                                </span>
                                <input type="text" name="g-name" id="g-name" required />
                                <label for="g-name">Groom's Name</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-person-dress"> </i>
                                </span>
                                <input type="text" name="b-name" id="b-name" required />
                                <label for="b-name">Bride's Name</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-user"> </i>
                                </span>
                                <input type="text" name="g-p-name" id="g-p-name" required />
                                <label for="g-p-name">Groom's Parent</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-user"> </i>
                                </span>
                                <input type="text" name="b-p-name" id="b-p-name" required>
                                <label for="b-p-name">Bride's Parent</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-phone"> </i>
                                </span>
                                <input type="text" id="contact" name="contact" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0,10)" required>
                                <label for="contact">Contact</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-envelope"> </i>
                                </span>
                                <input type="text" id="email" name="email" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-calendar"> </i>
                                </span>
                                <input type="text" name="date" id="dateInput" class="dateInput" maxlength="10" oninput="formatDateInput()" onfocus="useDatePicker()" required>
                                <label for="dateInput">Date of Wedding (yyyy-mm-dd)</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fa-solid fa-location-dot fa-beat"></i>
                                </span>
                                <input type="text" id="venue" name="venue" value="<?=$hallName?>" required>
                                <input type="hidden" name="hall_sno" value="<?=$hall_sno?>">
                                <label for="venue">Venue Selected</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                </span>
                                <select name="package" id="package">
                                    <option value="">Package</option>
                                    <?php
                                        $sql = "select * from pricing";
                                        $res = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($res)){
                                            $price = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['price']);
                                            echo '
                                            <option value="' . $row["plan"] . '">' . $row["plan"]. ' - ₹ ' . $price . '/-</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div>

                            <input type="submit" class="button" name="id" value="Book Now" />

                        </form>
                    </div>
                </div>
            </div>

        </section>

        <?php include("include/footer.php"); ?>
    </div>







    <?php  include("include/body_links.php");?>

    <script src="js/calendar.js"></script>
    <script>
    var calendar_div = document.querySelector(".calendar");
    var calendar_cols = document.querySelectorAll(".cal-col");
    var calendar_year = document.querySelector(".calendar .date .year p");
    var current = document.querySelector(".current .button");
    var previous = document.querySelector(".previous .button");
    var next = document.querySelector(".next .button");
    var dateInput = document.querySelector(".dateInput");
    var dateClickTracker;

    Array.from(calendar_cols).forEach((element) => {
        element.addEventListener("click", (e) => {

            dateClickTracker = e.target.innerText.trim();
            if (dateClickTracker != "") {
                var checkedDate = year + "-" + (cm + 1).toString().padStart(2, '0') + "-" + dateClickTracker;
                dateInput.value = checkedDate;
            }
        })
    })

    // function formatDateInput() {
    //     var input = document.querySelector(".dateInput");
    //     var value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
    //     var formattedValue = '';

    //     if (value.length >= 4) {
    //         formattedValue += value.substring(0, 4) + '-';
    //     }

    //     if (value.length >= 6) {
    //         formattedValue += value.substring(4, 6) + '-';
    //     }

    //     if (value.length >= 8) {
    //         formattedValue += value.substring(6, 8);
    //     }

    //     input.value = formattedValue;
    // }
    // function useDatePicker(){
    //     console.log("hello date picker")
    //     dateInput.title="use the calendar";
    // }
    
    var cal = new Calendar();
    var d = new Date();
    var CurrentMonth = d.getMonth();
    var year = d.getFullYear();
    var pm = CurrentMonth - 1;
    var nm = CurrentMonth + 1;
    var cm = CurrentMonth;
    var cy = year;
    // var plusYear = 0,minusYear = 0;
    calendar_year.innerText = year;
    var nextYear = 0,
        prevYear = 0;


    function month_change_button_click(p = 0){
        if(p == 1 && nm == 0){
            currYear(1);
        }
        if(p == -1 && pm == 11){
            currYear(-1);
        }
        currMonth(p);
    }
    
    function year_change_button_click(p = 0){
        currYear(p);
        currMonth(0);
    }

    function currYear(p = 0) {
        year += p;
        calendar_year.innerText = year;
    }

    function correction(m = 0) {
        if (m < 0) {
            m = 11;
        } else if (m > 11) {
            m = 0;
        }
        return m;
    }

    function currMonth(p = 0) {
        // debugger;
        calendar_cols.forEach((el, key) => {
            el.innerText = "";
        })

        pm = correction(pm + p);
        cm = correction(cm + p);
        nm = correction(nm + p);

        // console.log(`pm: ${pm}, cm: ${cm}, nm: ${nm}, year: ${year}, cy: ${cy}`)
        current.innerHTML = months[cm];

        // CurrentMonth = correction(CurrentMonth);
        // console.log(pm, cm, nm, CurrentMonth);
        var month = cal.monthDays(year, cm);
        // console.log(month)


        // disable booked date
        fetch(`include/get_booked_dates.php?month=${cm+1}&year=${year}`)
        .then(res => res.json())
        .then(res => {
            let booked_date_list = res.map(obj => parseInt(obj.wedding_date.split('-')[2]));
            booked_date_list.sort((a,b) => a - b);
            console.log(booked_date_list);

            let k = 0;
            let i = 0;

            while(i < calendar_cols.length){
                calendar_cols[i].classList.remove('cal-date-booked');
                i++;
            }

            i = 0;

            while(k < booked_date_list.length && i < calendar_cols.length){
                if(calendar_cols[i].innerText == booked_date_list[k]){
                    calendar_cols[i].classList.add('cal-date-booked');
                    k++;
                    console.log("found")
                }
                console.log(i);
                i++;
            }
        });

        //updating date in the calendar_cols
        for(let count = 0; count<(month.length*7); count++){
            let i = parseInt((count) / 7);
            let j = count % 7;

            if(month[i][j] != 0){
                calendar_cols[count].innerText = month[i][j];
            }
            else {
                calendar_cols[count].innerText = "";
            }
        }
        
        // Hiding last .cal-row if not used 
        if(month.length < 6){
            document.querySelector('.cal-row:last-child').style.display = "none";
        }
        else {
            document.querySelector('.cal-row:last-child').style.display = "flex";
        }

    }

    currMonth(0);

    
    </script>
</body>

</html>