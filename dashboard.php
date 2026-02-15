<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Classroom by Numbers - Dashboard</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .header {
            background: #333;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logout {
            color: white;
            text-decoration: none;
            background: red;
            padding: 8px 12px;
            border-radius: 5px;
        }

        iframe {
            width: 100%;
            height: calc(100% - 60px); /* Adjusted for header */
            border: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Classroom by Numbers - Dashboard</h2>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <iframe src="https://us1.ca.analytics.ibm.com/bi/?perspective=dashboard&amp;pathRef=.my_folders%2FBI%2BPROJECT&amp;closeWindowOnLastView=true&amp;ui_appbar=false&amp;ui_navbar=false&amp;shareMode=embedded&amp;action=view&amp;mode=dashboard&amp;subView=model000001963076d1c1_00000000" width="320" height="200" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
</body>
</html>
