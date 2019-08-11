<?php

if(!isset($_COOKIE["_token"])) {
    header("location:login.html");
} else {
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Raleway&display=swap" rel="stylesheet">
    <style>
        body  {
            background: #f3f7f7;
            font-family: 'Raleway', sans-serif;
        }

        .main {
            width: 96%!important;
            margin-left: 2%!important;
            padding-top: 40px;
        }
        .code {
            font-family: 'Inconsolata', monospace;
            background: #243B55;
            text-align: right;
            padding-right: 20px;
            padding-top: 10px;
            font-size: 20px;
        }

        .copy_code {
            color: #00B4DB;
            cursor: pointer;
        }
        pre {
            font-size: 16px;
            text-align: left;
            font-family: 'Inconsolata', monospace;
            background: #243B55;
            color: white!important;
            padding: 20px;
        }

        .tb_content {
            background: white;
            padding: 30px 30px 30px 30px;
            box-shadow: 0 6px 16px 0 rgba(0,0,0,.2);
            margin-top: 30px;
            margin-bottom: 30px;
        }

        h1 {
            margin-top: 30px;
            margin-bottom: 30px;
            width:100%;
            text-align:center;
        }
        .table-bordered {
            border: 1px solid black;
        }
        .active-table-tr {
            color: #212529;
            background-color: rgba(0,0,0,.075);
        }

        .image-tutorials {
            width: 80%;
            margin-left:10%;
            margin-top:40px;
            margin-bottom:40px;
        }
        p {
            line-height: 25px;
            font-size: 18px;
        }

        .copy_button {
            font-size: 14px;
            background: none;
            border: none;
            color: cadetblue;
        }
        .main-sidebar {
            position: fixed;
            padding-top: 80px;
            left: 0;
            width: 17%;
            background-color: #1D1C21;
            height: 100vh;

        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
        }
        .sidebar-menu li {
            padding: 10px;
            margin-top: 2px;
            margin-bottom: 2px;
            color: white;
            cursor: pointer;
        }
        .sidebar-menu li:hover {
            background: #DDDDDD;
            color: #243B55;
        }
    </style>
    <script>
        var title_page = "Basic Python Classes Advance"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>Python Classes</h1>
<p></p>

        </div>
    </div>
</div>


<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/js-cookie.js"></script>
<script>
    function CopyToClipboard(containerid) {
        console.log(containerid);
        var range;
        if (document.selection) {
            console.log("Document.Selection");
            range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");

        } else if (window.getSelection) {
            console.log("window.getSelection");
            range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
        }
    }

    $('#user_name').html(Cookies.get("_name"));

    function gotosection(id) {
        $('html,body').animate({
            scrollTop: parseInt(($('#' + id).offset().top - 70))
        });
    }
</script>
</body>
</html>