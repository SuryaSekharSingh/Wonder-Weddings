<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,600&display=swap');
    *{
        padding:0;
        margin:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        border:none;
        text-decoration: none;
        outline:none;
    }

    :root{
        --white:#fff;
        --pure-black:#000;
        --black: rgb(80, 79, 80);
        --blue:rgb(0, 87, 183);
        --red:rgb(182, 21, 0);
        --transparent-white:rgba(255,255,255,.3);
        --transparent-black:rgba(0,0,0,.6);
        --border:.1rem solid var(--black);
        --box-shadow: .5rem .5rem .5rem rgba(0,0,0,0.2);
        --brownish:rgb(173, 150, 80);
        --green:rgb(21, 115, 71);
        
    }

    html::-webkit-scrollbar{
        width:.5rem;
    }

    html::-webkit-scrollbar-track{
        background: var(--red);
    }
    html::-webkit-scrollbar-thumb{
        background: wheat;
        border-radius: 3rem;
    }

    .button{
        display: inline-block;
        padding:.5rem 1rem;
        border:var(--border);
        background: var(--transparent-white);
        color:var(--pure-black);
        border-radius: .5rem;
        font-size:1rem;
        user-select: none;
        text-decoration: none;
        text-transform: capitalize;
    }

    .button:hover{
        background: var(--pure-black) !important;
        color: var(--white) !important;
        transition: .2s linear;
    }



    .cont{
        display:flex;
        flex-direction: row;
    }
    .dashboard{
        background:linear-gradient(to bottom right, rgb(24, 38, 8), rgb(32,65,98));
        width:20rem;
        /* height:100vh; */
        min-height: 100vh;

    }

    .profile{
        background-color: rgb(32,65,98);
        padding:1rem;
        display: flex;

    }
    .profile img{
        width:4rem;
        border-radius: 50%;
    }
    .profile p{
        margin-top: 1.1rem;
        padding-left: .9rem;
        font-size: 1.2rem;
        color: whitesmoke;
    }
    .title{
        color:whitesmoke;
        padding: 1rem 0 ;
        font-size: 1.5rem;
        border-bottom: .1rem solid red;
        /* margin-bottom: 1rem; */
    }
    .title p{
        text-transform: capitalize;
        padding-left: 2.5rem;
    }

    .contents{
        color:whitesmoke;
        padding:.8rem 0;
        font-size: 1.2rem;
    }
    .contents:hover a{
        padding-left: .5rem;
    }
    .contents span{
        padding-left: 2.5rem;
        padding-right:.5rem;
    }
    .contents a{
        text-transform: capitalize;
        text-decoration: none;
        color:whitesmoke;
        transition: .2s linear;
    }

    .admin-section{
        width:80%;
        min-height: 100vh;
        /* overflow-y: scroll; */
    }

    .header {
        display:flex;
        justify-content: space-between;
        /* background:linear-gradient(to bottom right, rgb(24, 38, 8), rgb(32,65,98)); */
        background-color: rgb(22, 40, 60);
    }

    .header .logo img{
        width:auto;
        height:6rem;
    }
    .header .admin-title{
        font-size: 2rem;
        text-transform: uppercase;
        /* font-weight: 900; */
        padding-top: 1.5rem;
        color:white;
        user-select: none;
    }
    .header .logout{
        color:white;
        padding-top: 1rem;
    }
    .header .logout a{
        transition: .2s linear;
    }
    .header .logout a:hover{
        color:var(--pure-black) !important;
        font-weight: 900 !important;
        transform: scale(1.1);
    }
    .admin-section .title{
        border-bottom: none;
        background-color: lightyellow;
        height:5rem;
        box-shadow: .2rem .2rem .2rem rgba(0, 0, 0, 0.8);
    }
    .admin-section .title p{
        color:black;
        font-size: 1.8rem;
        user-select: none;
    }



    /* home page css  */
    .dashboard-body{
        padding: 2rem 5rem;
        display:grid;
        grid-template-columns: repeat(auto-fit,minmax(12rem,1fr));
        gap:3rem;
    }
    .dashboard-body .box{
        display:block;
        text-align: center;
        height:12rem;
        border-radius: 1.5rem;
        padding-top: 2rem;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;;
    }
    .dashboard-body .box:hover div{
        transform: scale(1.1);
    }
    .dashboard-body .box div{
        font-size:3rem;
        transition: .2s ease-in-out;
    }
    .dashboard-body .box a{
        color:black;
        text-decoration: none;
        text-transform: capitalize;
        font-size: 1.5rem;
    }





    /* dest page css  */
    .dest-body{
        margin-top: 1rem;
        display:grid;
        gap:1rem;
        grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
    }
    .dest-body .city{
        width:auto;
    }
    .dest-body .city .hall{
        width:auto;
    }

    input{
        height: 2rem;
        background: transparent;
        box-shadow: 0 .1rem 0 0 var(--pure-black);
        /* border-color:var(--red); */
        outline: none;
        font-size: 1rem;
        color:var(--pure-black);
        padding: 0 35px 0 5px;
        margin-bottom: .5rem;
    }

    .dest-body .city .halls table{
        margin:auto;
        margin-top: 1rem;
    }
    .dest-body .city .halls table th{
        text-transform: uppercase;
        padding:.5rem;
        border:.1rem solid black;
        text-align: center;
    }
    .dest-body .city .halls table .venues{
        width:20rem;
    }
    .dest-body .city .halls table td{
        padding:.3rem 1rem;
        border:.1rem solid black;
    }

    .add-venue{
        margin-left: 5rem;
        margin-top: 3rem;
        display: block;
    }
    .add-venue h3{
        font-size: 2rem;
    }
    .add-venue .input-city label{   
        margin-right: 1.4rem;
    }





    /* users page css  */
    .user-body table{
        border:.1rem solid brown;
        margin:auto;
        margin-top: 1rem;
        box-shadow: var(--box-shadow);
    }
    .user-body table th{
        padding:.5rem 2rem;
        border:.1rem solid black;
        text-align: center;
        text-transform: uppercase;
        font-size: 1.3rem;
    }
    .user-body table td{
        text-align: center;
        border:.1rem solid black;
        padding: .2rem .5rem;
    }
    .user-body table td #button{
        text-transform: capitalize;
        color:var(--pure-black);
    }
    .user-body table td #button:hover{
        color:var(--white);
    }





    /* pricing page css  */
    .package-body{
        padding: 2rem 5rem;
        display:grid;
        grid-template-columns: repeat(auto-fit,minmax(20rem,1fr));
        gap:3rem;
    }
    .package-body .box{
        /* background-color: rgb(237, 225, 211); */
        background-color: #eee7dc;
        display:block;
        text-align: center;
        border-radius: 1.5rem;
        padding: 1rem 0;
        box-shadow: var(--box-shadow);
    }
    .package-body .box h3{
        text-transform: uppercase;
        font-size:2rem;
        text-align: center;
    }
    .package-body .box h4 button{
        height:2rem;
        padding-top:.1rem;
        
    }
    .package-body .box table{
        margin:auto;
        margin-top: 1rem;
    }
    .package-body .box table th{
        text-transform: uppercase;
        padding:.5rem;
        border:.1rem solid black;
    }
    .package-body .box table td{
        padding:.3rem 1rem;
        border:.1rem solid black;

    }
    .package-body .box form p{
        font-size: 1.5rem;
        font-weight: 900;
        text-align: center;
        margin: 1rem 0 1rem 1rem;
    }
    .package-body .box form .service-input{
        
        height: 2rem;
        background: transparent;
        box-shadow: 0 .1rem 0 0 var(--pure-black);
        /* border-color:var(--red); */
        outline: none;
        font-size: 1rem;
        color:var(--pure-black);
        padding: 0 35px 0 5px;
    }
    .price-input{
        height: 2rem;
        background: transparent;
        box-shadow: 0 .1rem 0 0 var(--pure-black);
        /* border-color:var(--red); */
        outline: none;
        font-size: 1rem;
        color:var(--pure-black);
        padding: 0 35px 0 5px;
        margin-bottom: .5rem;
    }
    



    

</style>