<?PHP
include("include/db_connect.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />
    <title>FAQ's </title>

    <style>
        .questions{
            background-color: var(--transparent-white);
            backdrop-filter: blur(1rem);
            box-shadow: var(--box-shadow);
            border-radius: 1.5rem;
            height:auto;
            margin:1rem;
            display:flex;
            flex-direction:column;
            justify-content:center;
            padding:2.5rem 2rem;
            transition: .2s linear;
            overflow: hidden;
            
        }
        .questions:hover{
            transform: scale(1.01);
        }
        .questions h2{
            color:var(--red);
            font-family: 'Frank Ruhl Libre';
            font-size:2.5rem;
        }
        .questions:hover h2,h4{
            text-shadow: var(--box-shadow);
        }
        .questions h4{
            color:var(--blue);
            font-style: italic;
            font-size: 1.7rem;
            font-weight: 900;
        }
        .question{                               /*  optional  */
            display:flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .question h5{                            /*  optional  */
            font-size:1.5rem;
            color:var(--black);
            font-family: 'Frank Ruhl Libre', 'Poppins', 'sans-serif';
            user-select: none;
        }
    </style>
</head>

<body class="body">

    <div class="container">
        <?php 
            include("include/header.php"); 
            $query = "select * from faq";
            $result = mysqli_query($conn,$query);
        ?>

        <section class="venues" >
            <div class="info">
                <h3>frequently asked questions</h3>
                <div class="title-dash" style="width:28rem;margin-bottom:2rem;"></div>
                <p style="margin-bottom:0;user-select: none;width:60%;">Few FAQ's are listed below which might help you in resolving your queries. If you have any other queries, feel free to contact us during office hours.We will take you up on any and every type of query you have. Best user experience is the ultimate aspect that we strive for.</p>
                <a href="contact.php" class="button" style="margin-bottom:1rem;margin-top: 0rem;">contact us</a>
            </div>
        </section>

        <?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $ques = $row['question'];
                $ans = $row['answer'];
        ?>

        <div class="questions">
            <div class="question">     <!-- optional -->
                <h2><?=$ques?></h2>
                <h5>admin</h5>         <!-- optional -->
            </div>
            <h4><?=$ans?></h4>
        </div>

        <?php
        }
        ?>

        <?php include("include/footer.php"); ?>
    </div>




    <?php  include("include/body_links.php");?>

</body>

</html>