<?php
if (isset($_REQUEST['a'])) {
    if ($_REQUEST['a'] == 1) {
        echo "<script>alert('No rooms');</script>";
    } elseif ($_REQUEST['a'] == 2) {
        echo "<script>alert('Invalid Date');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Diamond</title>
    <style>
        body {
            background-color: #420021;
            margin: 0;
            padding: 0;
            font-family: Calibri, sans-serif;
        }
        .header, .header2, .content, .footer, .footer2 {
            box-sizing: border-box;
        }
        .header {
            height: 120px;
            width: 18%;
            margin-left: 72px;
            float: left;
            background-position: center;
        }
        .header2 {
            background-color: #660033;
            height: 120px;
            width: 70%;
            margin-right: 5%;
            float: right;
        }
        .content {
            background-color: #660033;
            height: 598px;
            width: 90%;
            margin: 0 auto;
        }
        .left {
            background-color: #660033;
            height: 598px;
            width: 68%;
            float: left;
            position: relative;
        }
        .left2 {
            background-color: #000000;
            height: 598px;
            width: 40%;
            float: left;
            opacity: 0.7;
        }
        .right, .right1, .left1, .middle {
            background-color: #FFFF00;
            height: 598px;
        }
        .right {
            width: 32%;
            float: right;
        }
        .right1, .left1 {
            width: 34%;
            float: right;
            background-position: center;
        }
        .middle {
            width: 32%;
            float: left;
            background-color: #D99A26;
        }
        .footer, .footer2 {
            background-color: #660033;
            height: 58px;
        }
        .footer {
            width: 40%;
            margin: 118px auto 0 auto;
        }
        .footer2 {
            width: 58%;
            margin: -57px 71px 0 auto;
            float: right;
        }
        table {
            width: 80%;
            height: 60px;
            margin: 0 auto;
        }
        table th {
            background-color: #660033;
            padding: 10px;
        }
        th:hover {
            background-color: #D99A26;
        }
        th a {
            color: #666666;
            text-decoration: none;
        }
        th a:hover {
            color: #FFFFFF;
        }
        a {
            color: #666666;
            text-decoration: none;
        }
        a:hover {
            color: #FFFFFF;
        }
        #changer {
            display: block;
            width: 100%;
            height: auto;
            margin: 0 auto;
        }
    </style>
</head>
<body onload="changeImage('changer')">
    <script type="text/javascript">
        var images = ["a.jpeg", "b.jpeg", "c.jpeg", "d.jpeg", "e.jpeg", "f.jpeg", "g.jpeg", "h.jpeg", "i.jpeg"];
        function changeImage(dvX) {
            var dvi = document.getElementById(dvX);
            dvi.count = dvi.count || 0;
            dvi.src = images[dvi.count];
            dvi.alt = images[dvi.count];
            dvi.count = (dvi.count + 1) % images.length;
            setTimeout(function() {
                changeImage(dvX);
            }, 3500);
        }
    </script>
    <center>
        <div class="header">
            <a href="bd.php">
                <h1 style="color: #FFFFFF; text-align: left; margin-right: 90px; margin-top: 40px; font-family: 'Monotype Corsiva'; position: relative; margin-left: 50px;">BLACK &diams; DIAMOND</h1>
            </a>
        </div>
        <div class="header2">
            <form action="check.php" method="post">
                <br><br><br>
                <span style="color: #FFFFFF; margin-right: 920px; font-size: 18px;">RESERVATIONS</span><br>
                <select name="h1" tabindex="2" title="Select" style="margin-left: -70px; width: 80px; font-size: 12px;">
                    <option value="s">Select</option>
                    <option value="bangalore">BLACK DIAMOND BANGALORE</option>
                    <option value="chennai">BLACK DIAMOND CHENNAI</option>
                </select>
                <span style="color: #FFFFFF; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;Arrive&nbsp;</span>
                <input type="date" name="t1" style="width: 80px;" />
                <span style="color: #FFFFFF; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;Departure&nbsp;</span>
                <input type="date" name="t2" style="width: 80px;" />
                <span style="color: #FFFFFF; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;No of rooms&nbsp;</span>
                <input type="text" name="t3" style="width: 20px;" />
                <span style="color: #FFFFFF; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;Adult&nbsp;</span>
                <input type="text" name="t4" style="width: 20px;" />
                <span style="color: #FFFFFF; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;Child&nbsp;</span>
                <input type="text" name="t5" style="width: 20px;" />
                <input type="submit" value="Check availability" />
                <a href="https://www.facebook.com/blackdiamond431">
                    <img src="images.jpeg" style="height: 20px; width: 20px; margin-left: 50px;" />
                </a>
                <a href="https://x.com/Kuldeep67548921">
                    <img src="images_2.jpeg" style="height: 20px; width: 20px; margin-left: 20px;" />
                </a>
            </form>
        </div>
        <div class="content">
            <div class="left">
                <img src="t1" id="changer" height="598px" width="100%" />
                <div class="left2">
                    <br>
                    <a href="bd.php" style="font-size: 14px; margin-right: 15px; margin-left: -100px;">PALACES</a>
                    <a href="bd.php" style="font-size: 14px; margin-right: 15px;">HOTELS</a>
                    <a href="bd.php" style="font-size: 14px; margin-right: -100px;">RESORTS</a><br><br><br><br><br>
                    <a href="location.php" style="font-size: 18px; margin-right: 180px;">LOCATIONS</a><br><br>
                    <a href="moffers.php" style="font-size: 18px; margin-right: 210px;">OFFERS</a><br><br>
                    <a href="the royal club.php" style="font-size: 18px; margin-right: 140px;">THE ROYAL CLUB</a><br><br>
                    <a href="spa reservation.php" style="font-size: 18px; margin-right: 170px;">SPA & SALON</a><br><br>
                    <a href="dinning.php" style="font-size: 18px; margin-right: 210px;">DINING</a><br><br>
                    <a href="meeting.php" style="font-size: 18px; margin-right: 190px;">MEETINGS</a><br><br>
                    <a href="weddings.php" style="font-size: 18px; margin-right: 190px;">WEDDINGS</a><br><br>
                </div>
            </div>
            <div class="right">
                <div class="right1" style="background-image:url(j.jpeg);">
                    <a href="the royal club.php" style="font-size: 18px;">ROYAL CLUB</a>
                </div>
                <div class="left1" style="background-image:url(k.jpeg);">
                    <a href="spa & salon.php" style="font-size: 18px;">SPA</a>
                </div>
                <div class="middle">
                    <a href="offers.php" style="font-size: 18px;">OFFERS</a>
                </div>
            </div>
        </div>
        <div class="footer">
            <table border="0">
                <tr>
                    <th><a href="about us.php">ABOUT US</a></th>
                    <th><a href="site map.php">SITE MAP</a></th>
                    <th><a href="vision & mission.php">VISION & MISSION</a></th>
                    <th><a href="feedback.php">FEEDBACK</a></th>
                    <th><a href="awards & certificates.php">AWARDS & CERTIFICATES</a></th>
                    <th><a href="press room.php">PRESS ROOM</a></th>
                </tr>
            </table>
        </div>
        <div class="footer2"></div>
    </center>
</body>
</html>
