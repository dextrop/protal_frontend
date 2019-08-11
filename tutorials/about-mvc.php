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
        var title_page = "MVC Framework"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                <li onclick='gotosection("heading_1")'>Model</li><li onclick='gotosection("heading_2")'>View</li><li onclick='gotosection("heading_3")'>Controller</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>MVC Framework</h1>
<p></p>
<p>The Model-View-Controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application. MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.</p>
<img src='https://3.bp.blogspot.com/-UsQwhhKUlME/Wr8nD7zEnXI/AAAAAAAASLU/zSIRkmmIArQP4xl18anTg6FUP93FK23igCLcBGAs/s1600/Model%2BView%2BController%2B-%2BMVC.png' class='image-tutorials'>
<h2 id='heading_1'>Model</h2>
<p>The Model component corresponds to all the data-related logic that the user works with. This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data. For example, a Customer object will retrieve the customer information from the database, manipulate it and update it data back to the database or use it to render data.</p>
<h2 id='heading_2'>View</h2>
<p>The View component is used for all the UI logic of the application. For example, the Customer view will include all the UI components such as text boxes, dropdowns, etc. that the final user interacts with.</p>
<h2 id='heading_3'>Controller</h2>
<p>Controllers act as an interface between Model and View components to process all the business logic and incoming requests, manipulate data using the Model component and interact with the Views to render the final output. For example, the Customer controller will handle all the interactions and inputs from the Customer View and update the database using the Customer Model. The same controller will be used to view the Customer data.</p>
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