<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />
    <title>Book With Us</title>

    
</head>

<body class="body">
    
    <div class="container"> 
        <?php include("include/header.php"); ?>

        <section class="venues">
            <div class="info">
                <h3>pick a date</h3>
                <div class="title-dash"  style="width:10rem;"></div>

                <div class="booking">
                    <div class="calendar">  

                        <div class="date">
                            
                            <div class="month">
                        
                                <div class="previous"> <button class="button" onclick="currMonth(-1)"></button></div>
                                <div class="current" style="box-shadow: var(--box-shadow-ultra);transform: translateY(-.5rem);"> <button class="button" onload="currMonth(0)"></button></div>
                                <div class="next"> <button class="button" onclick="currMonth(1)"></button></div>
        
                            </div>
                            
                            <div class="year">
                                    <span class="prev-year" onclick="currYear(-1)">
                                        <i class="fa-solid fa-circle-chevron-left" style="font-size:2rem;"></i>
                                    </span>
                                    <p></p>
                                    <span class="next-year" onclick="currYear(1)">
                                        <i class="fa-solid fa-circle-chevron-right" style="font-size:2rem;"></i>
                                    </span>
                                
                                </div>
                        </div>
                        
                        
                        
                        <div class="cal-row">
                            <div class="cal-week">S</div>
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
                <!--   <div class="cal-row">
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                            <div class="cal-col"></div>
                        </div> -->
                    </div>

                    <div class="booking-form">
                        <form action="" method="POST">
                            <h2>details</h2>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-person"> </i>
                                </span>
                                <input type="text" name="g-name" id="g-name" required/>
                                <label>Groom's Name</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-person-dress"> </i>
                                </span>
                                <input type="text" name="b-name" id="b-name" required />
                                <label>Bride's Name</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-user"> </i>
                                </span>
                                <input type="text" name="g-p-name" id="g-p-name" required/>
                                <label>Groom's Parent</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-user"> </i>
                                </span>
                                <input type="text" name="b-p-name" id="b-p-name" required>
                                <label>Bride's Parent</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-phone"> </i>
                                </span>
                                <input type="text" name="contact" required>
                                <label>Contact</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-envelope"> </i>
                                </span>
                                <input type="text" name="email" required>
                                <label>Email</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fas fa-calendar"> </i>
                                </span>
                                <input type="date" name="date" required>
                                <label>Date of Wedding</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <i class="fa-solid fa-location-dot fa-beat"></i>
                                </span>
                                <input type="text" name="venue" required>
                                <label>Venue Selected</label>
                            </div>

                            <button type="submit">Book Now</button>

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
        // var Calendar = require("./js/calendar.js");
        // import Calendar from "./js/calendar.js";
 
        var calendar_div = document.querySelector(".calendar");
        var calendar_cols = document.querySelectorAll(".cal-col");
        var calendar_year = document.querySelector(".calendar .date .year p");
        var current = document.querySelector(".current .button");
        var previous = document.querySelector(".previous .button");
        var next = document.querySelector(".next .button");


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

        function currYear(p=0){
            if((cy+p-year > 2) ){
                
            }else{
                cy += p;
                calendar_year.innerText = cy;
            }
        }
        // currYear();

        function correction(m=0){
            if(m<0){
                m=11;
            }
            else if(m>11){
                m=0;
            }
            return m;
        }
        function currMonth(p=0){
            pm = correction(pm + p );
            cm = correction(cm + p );
            nm = correction(nm + p );

            previous.innerHTML = months[pm];
            current.innerHTML = months[cm];
            next.innerHTML = months[nm];
            
            // CurrentMonth = correction(CurrentMonth);
            console.log(pm, cm, nm, CurrentMonth);
            var month = cal.monthDays(year, cm);
            calendar_cols.forEach((el, key) => {
        
                let i = parseInt((key)/7);
                let j = key%7;
                console.log(i,j,key);
                if(month[i][j] != 0){
                    el.innerText = month[i][j];
                }
                else{
                    el.innerText = "";
                }
            });
        }
        
        currMonth(0);
        console.log(months[CurrentMonth-1] + "hello")


    </script>


    <style>
        .button{
            /* background-image: linear-gradient(to bottom right, var(--brownish), var(--red)); */
            background-color: rgb(104, 19, 4);
            color:var(--white);
            width:8rem;
            text-align: center;
            transition:.2s linear;
            padding:1rem 1rem;
        }
        .button:hover{
            /* background-color: var(--blue); */
            background-color: var(--pure-black);
            color:var(white);
        }

        .venues .info .booking{
            display:flex;
            justify-content: space-around;
        }

        .venues .info .calendar {
            background-image: linear-gradient(to bottom right, var(--red), var(--brownish));
            backdrop-filter: blur(1rem);
            box-shadow: var(--box-shadow-ultra);
            display: inline-block;
            border-radius: 1rem;
            max-height:50.3rem;
            margin-top: 6rem;
            /* margin-left: -70rem; */
            padding:1rem;
        }

        .venues .info .calendar .date{
            display:flex;

        }

        .venues .info .calendar .month{
            
            margin:0 4rem 0 2rem;
            display:flex;
            justify-content: space-around;
            gap:1rem;
            /* align-items: center; */
            margin-bottom: 1rem;
            
        }

        .venues .info .calendar .cal-row {
            display: flex;
            flex-direction: row;
        }
        .venues .info .calendar .cal-row .cal-week {
            padding:0.5rem;
            margin:.5rem;
            background-color: var(--pure-black);
            color:var(--white);
            font-weight: 800;
            border-radius:1rem;
            width:5rem;
            height:5rem;
            text-align: center;
            
            font-size:2.5rem;
        }

        .venues .info .calendar .cal-row .cal-col{
            padding: 1rem;
            margin: .5rem;
            /* background-color: rgb(59, 59, 59); */
            background-color: var(--transparent-white);
            background-color: blur(1rem);
            color: var(--pure-black);
            font-weight: 800;
            border-radius: 1rem;
            font-size: 2rem;
            width: 5rem;
            height:5rem;
            text-align: center;
            transition:.3s linear;
        }
        .venues .info .calendar .cal-row .cal-col:hover{
            background-color: var(--blue);
            color:var(--pure-black)
        }

        .calendar .year {
            background-color: rgb(104, 19, 4);
            display:flex;
            width:8rem;
            height:5rem;
            border:var(--border);
            border-radius: .5rem;
            justify-content: center;
            align-items: center;
            margin: 1rem 0 0 1rem;
            transition: .2s linear;
        }

        .calendar .year:hover{
            background-color: var(--pure-black);
        }

        .calendar .year span {
            color:var(--white);
            font-size: 4rem;
            margin-bottom: 1rem;
            cursor:pointer;
        }
        .calendar .year p{
            color:var(--white);
            font-size:1.8rem;
            padding:0 1rem;
            font-weight: 500;
            user-select: none;
            margin-top: 1.8rem;
        }

        .booking .booking-form{
            display:block;
            margin-right: 10rem;
        }

        .booking .booking-form h2{
            margin-top: 5rem;
            font-size: 3.2rem;
            color: var(--red);
            text-transform: uppercase;
            font-weight: 900;
            text-align: center;
        }
        .booking .booking-form .input-box{
            position: relative;
            width: 35rem;
            margin: 30px 0;
            border-bottom: 2px solid var(--white);
        }

        .input-box label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1.7rem;
            color: var(--pure-black);
            font-weight: 300;
            transition:.2s linear;
        }
        .input-box input:focus~label,
        .input-box input:valid~label{
            top:-5px;
        }

        .input-box input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1.5rem;
            font-weight: 900;
            color:var(--pure-black);
            padding: 0 35px 0 5px;
        }

        .input-box input:focus{
            outline:none;
            box-shadow: 0 .2rem 0 0 var(--red);
            border-color:var(--red);
        }

        .input-box input:focus + label
        , .input-box input:not(:placeholder-shown) + label
        {
            font-weight: 600;
            color: initial;
        }

        .input-box .icon{
            position: absolute;
            right:8px;
            color:var(--red);
            font-size: 3rem;
            line-height: 57px;
        }

        button{
            width: 80%;
            height: 4.2rem;
            /* background: rgb(249, 16, 144); */
            background: var(--red);
            border: none;
            outline: none;
            border-radius: 10rem;
            cursor: pointer;
            font-size: 2rem;
            color: var(--pure-black);
            font-weight: 900;
        }

    </style>
</body>
</html>