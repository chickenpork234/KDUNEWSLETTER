<html>

<head>
<?php include "../Members/detailsfunc.php"; ?>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>

    <div class="header">

        <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
        <h2 id="motto">"HIT THE GROUND RUNNING"</h2> 
        
        <?php
                if(isset($_SESSION['FirstName']))
                {
               echo" <h4 class='welcome'>Welcome, ".$_SESSION['FirstName']." </h4>";
                }else{
                    
                }
        ?>
        
    </div>

</head>

<body>
<?php
                       echo "<button class='tablink' onclick=window.location.href='home.php'>Home</button> 
               <button class='tablink' onclick=window.location.href='event.php'>Event</button>
               <button class='tablink' onclick='myFunction()'>About Us</button>
                       <div id='myDropdown' class='dropdown-content'>
                               <a onclick= window.location.href='campus.php'>Our Campus</a>
                               <a onclick= window.location.href='contactUs.php'>Contact Us</a>
                       </div> 
               <button class='tablink' onclick=window.location.href='../login.php'>Login</button>";
               
       ?>

                <div class="articles">
                    <h1 class="title">Contact Us</h1>

            <div class="row">
                <div class="column-2">
                    <img class="img-map" src="../images/KDU Penang Map.png"/>
                </div>
                <div class="column-3">
                    <p class="details">
                            <b>ADDRESS</b><br>
                            <b>KDU Penang University College</b><br>
                            KDU University College (PG) Sdn Bhd<br>
                            32, Jalan Anson<br> 
                            10400 Penang<br> 
                            MALAYSIA<br>
                    </p>
                    <p class="details">
                            <b>Tel.No: +6 04 238 6368<br></b>
                            <b>Email: best@kdupg.edu.my<br></b>
                            <b>Whatsapp: +6018 916 0368</b> (Local)<br> 
                            <b>Whatsapp: +6018 987 6368</b> (International)<br>
                        </p>
                </div>
            </div><br>
                
            <div class="row">
                <div class="column-2">
                        <img class="img-map" src="../images/Reruitment Centre.png"/>
                </div>
                <div class="column-3">
                        <p class="details">
                            <b>ADDRESS</b><br>
                            <b>KDU University College (PG) Ipoh Recruitment Centre<br></b>
                            1st Floor<br>
                            No. 3, Jalan Dato Tahwil Azar,<br> 
                            30300 Ipoh, Perak.<br>
                        </p>
                        <p class="details">
                                <b>Tel.No: +605 241 4211<br></b>
                                <b>Fax.No: +604 228 0054<br></b>
                            </p>
                        </div>
                    </div>
                </div>
</body>
</html>