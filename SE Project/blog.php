<?php
include 'comments.php';
include 'dba.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            background-color: white;
        }

        .comment-box {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            width: 500px;
        }

        .comment-box h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .comment-box input {
            width: 100%;
            height: 50px;
            padding: 0 20px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #86b0b6;
        }

        .comment-box input:focus {
            border: 1px solid #000;
            outline: 0;
        }

        .comment-box textarea {
            width: 100%;
            height: 150px;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #86b0b6;
        }

        .comment-box textarea:focus {
            border: 1px solid #000;
            outline: 0;
        }

        .comment-box button {
            border: 0;
            padding: 10px 30px;
            background: #86b0b6;
            font-size: 18px;
            border-radius: 5px;
            color: #fff;
        }

        .comment-box button:hover {
            background-color: #718a8e;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #333;
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <ul>
            <li style="float: left;"><img src="images/logo trans.jpg" alt="Transgender Logo" width="auto" style="width: 3cm;"></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="index.php"><strong>Home</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="atp.php"><strong>About Transgender People</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="issues.php"><strong>Issues</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="kyr.php"><strong>Know Your Rights</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="login.php"><strong>Blog/Articles</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="aboutus.php"><strong>About Us</strong></a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="comment-box">
        <h2>Comments</h2>
        <?php
        echo "<form method='post' action='" . setComments($conn) . "'>
            <textarea name='content' placeholder='Type your comment here'></textarea>
            <button type='submit' name='commentSubmit'>Submit Comment</button></form>";
        getComments($conn);
        ?>
    </div>

</body>
</html>