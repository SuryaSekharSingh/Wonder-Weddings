<?php
    session_start();
?>
<style>

.main-header {
    border-radius: 1.5rem;
    background-color: var(--transparent-white);
    backdrop-filter: blur(1rem);
    margin:0 1rem;
    position:relative;
    /* margin: 10px; */
    /* position:sticky;
    top: 0px; */
    /* height: 100%; */
    

}

/* .header{ */
    /* display: block; */
/* position: absolute; */
/* top: 10px;    */
/* z-index: 10; */
/* } */

.logo-header {
    display: block;
    text-align: center;

    border-radius: 1rem;
    /* border-bottom:.4rem solid var(--red); */
}

.logo-header h4 {
    color: var(--red);
    margin-left: 2.5rem;
    font-size: 1.3rem;
    margin-top: 0;
    padding-top: 0;
}

.btn:hover {
    color: var(--white) !important;
    background-color: var(--pure-black);
}

.account{
    display:flex;
    margin-left: 5rem;
}

.account p{
    padding-top:1rem;
    font-size: 1.6rem;
    font-weight: 800;
    text-transform: capitalize;
    user-select: none;
    color:var(--pure-black);
}
</style>


<?php
    // if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    //     session_start();
    // }


echo '<div class="main-header">
    
    <div class="logo-header">
        <a href="index.php" class="logo">
            <img src="images/logo/wonder-wedding.png" alt="Wonder Weddings" style="width:20rem;transform:scale(1.2,1.2)"/>
        </a> 
        <h4>-------Wedding Architect & Florist-------</h4>
    </div>
    <div class="header">
        <a href="index.php">
            <img src="images/logo/wonder-wedding.png" alt="Wonder Weddings" style="width:15rem;margin-right:10rem;margin-left:3rem;transform:scale(1.2,1.2)"/>
        </a>
        <a href="index.php">Home</a>
        <a href="venues.php">venues</a>
        <a href="service.php">Services</a>
        <a href="portfolio.php">portfolio</a>
        <a href="packages.php">packages</a>';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
   
    echo '<div class="account">
        <p>Welcome ' . $_SESSION['username'] . '</p>
        <a href="logout.php" class="btn " style="font-size:1.7rem;padding:.5rem;border-radius:.7rem;border:var(--border);margin:.2rem 1.2rem .2rem 1rem;color:var(--pure-black);">Logout</a>
    </div>';
    
}
// <a href="logout.php" style="width:5rem;background-color: var(--red);align-items: center;justify-content: center;"><i class="fa-solid fa-right-from-bracket"></i></a>
//  echo '<select name="profile" id="profile">
//     <option value="Welcome">Welcome Surya</option>
//     <option value="logout">Logout</option>
// </select>';
else{
    echo '<div class="account">
            <a href="login.php" class="btn px-3"
                style="font-size:1.7rem;padding:.5rem;margin-right:0;border-radius:.7rem;border:var(--border);margin-left:5rem;color:var(--pure-black);">Login</a>
            <a href="signup.php" class="btn "
                style="font-size:1.7rem;padding:.5rem;margin-left:.5rem;border-radius:.7rem;border:var(--border);margin-right:1.2rem;color:var(--pure-black);">Join Us</a>
        </div>';
}
    echo '</div>
    </div>';
            // <div id="menu-button" class="fas fa-bars"></div>
?>