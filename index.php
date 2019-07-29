<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Inconsolata&display=swap" rel="stylesheet">
    <style>
        body  {
            background: #f3f7f7;
        }
        nav {
            font-family: 'Fira Code', monospace;
        }
        .bg-light {
            background: #141E30;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .navbar-brand {
            color: #eeeeee!important;
            letter-spacing: 1.5px;
        }
        .navbar-light .navbar-nav .nav-link {
            color: white;
            margin-left: 20px;
        }
        .main {
            width: 90%;
            margin: 5%;

        }

        .practice-card
        {
            border-radius: 10px;
            display: inline-grid;
            box-sizing: border-box;
            margin: 20px;
            width: calc((100% - 120px)/2);
            height: 260px;
            box-shadow: 0 6px 16px 0 rgba(0,0,0,.2);
            background: white;
            padding: 30px!important;
        }
        .skill-type {
            color: #738f93;
            text-transform: uppercase;
            line-height: 1.4;
            font-weight: 400;
            font-size: 14px;
        }

        .skill-description {
            color: #738f93;
            line-height: 1.4;
            font-weight: 400;
            font-size: 12px;
            margin-top: 20px;
        }
        .skill-name  {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 30px;
        }
        .progress-bar {
            height: 5px;
            overflow: hidden;
            width: 100%;
        }
        .progress-bar span {
            display: block;
        }

        .progress {
            background: #141E30;
            background: -webkit-linear-gradient(to right, #243B55, #141E30);
            background: linear-gradient(to right, #243B55, #141E30);
            color: #fff;
            padding: 5px;
        }

        .progress-bar {
            max-width: 100%;
            background: rgba(0, 0, 0, 0.075);
        }
        .read-tutorial-link {
            color: #3c97bf;
            font-size: 16px;
        }


        .tutorial-card {
            border-radius: 10px;
            display: inline-grid;
            box-sizing: border-box;
            margin: 10px;
            width: calc((100% - 120px)/3);
            box-shadow: 0 6px 16px 0 rgba(0,0,0,.2);
            background: white;
            padding: 30px!important;
        }

        .tutorial-description {
            color: #738f93;
            line-height: 1.4;
            font-weight: 400;
            font-size: 12px;
        }

        .read-tutorial-link:hover {
            color: #243B55;
            font-size: 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php include ('assets/html/navbar.html') ?>
<div class="main">

    <h4>Skills</h4>
    <div class="practice-card">
        <div class="row">
            <div class="col-md-6">
                <h5 class="skill-type">Specialized Skills</h5>
                <h2 class="skill-name">Python Skill</h2>
            </div>

            <div class="col-md-6" style="text-align: right">
                <img src="https://iblinfotech.com/wp-content/uploads/2018/08/python-ibl-infotech.png" style="width: 30%">
            </div>
        </div>

        <div>
            <div class="progress-bar">
              <span class="bar">
                <span class="progress" style="width: 10%"></span>
              </span>
            </div>
        </div>
        <p class="skill-description">0% Start Practicing Your Python</p>
        <button class="btn btn-outline-success" style="border-radius: 0; margin-left: 70%" disabled>Coming Soon</button>
    </div>
    <div class="practice-card">
        <div class="row">
            <div class="col-md-6">
                <h5 class="skill-type">Specialized Skills</h5>
                <h2 class="skill-name">JSON Skill</h2>
            </div>

            <div class="col-md-6" style="text-align: right">
                <img src="https://png.pngtree.com/svg/20160901/2705035a9d.svg" style="width: 30%">
            </div>
        </div>

        <div>
            <div class="progress-bar">
              <span class="bar">
                <span class="progress" style="width: 3%"></span>
              </span>
            </div>
        </div>
        <p class="skill-description">0% Start Practicing Your JSON</p>
        <button class="btn btn-outline-success" style="border-radius: 0; margin-left: 70%" disabled>Coming Soon</button>
    </div>

    <br><br>
    <h4>Tutorials</h4>
    <div id="tutorials">

<!--        <div class="tutorial-card">-->
<!--            <h2>Git Tutorial</h2>-->
<!--            <h5 class="tutorial-description">-->
<!--                Git is a distributed version-control system for tracking changes in source code during software development.-->
<!--            </h5>-->
<!--            <a href="" class="read-tutorial-link">Read Tutorial</a>-->
<!--        </div>-->
    </div>

</div>

<script>
    var tutorials = [
        {
            "name": "Git",
            "des": "Git is a distributed version-control system for tracking changes in source code during software development.",
            "link": "https://docs.google.com/document/d/11Y9L5xZRqy7asyeWbuoa4jDQqpfGEkLzxj8E0fG_GYk/edit?usp=sharing"
        },
        {
            "name": "Python Basic",
            "des": "Print methods, for loop, Dict array etc. A short python lesson before starting python",
            "link": "https://docs.google.com/document/d/1IGVhHdQ6mXhDFLdP3i3KSvEqPyBxrZHJSSEEAfnS8U8/edit?usp=sharing"
        },

        {
            "name": "Python Basic",
            "des": "Print methods, for loop, Dict array etc. A short python lesson before starting python",
            "link": "https://docs.google.com/document/d/1IGVhHdQ6mXhDFLdP3i3KSvEqPyBxrZHJSSEEAfnS8U8/edit?usp=sharing"
        },

        {
            "name": "Api creation",
            "des": "Go ahead and create a django application, Django application is the basic application which will serve all our api’s.",
            "link": "https://docs.google.com/document/d/1AP1YO-Ax1tkwufPtmen6Zy14NLeERDFyD5WqHhC3uSc/edit?usp=sharing"
        }
    ];
    function populateTutorial(tutorials) {
        var html = "";
        for (var i=0; i<tutorials.length; i++) {
            html += '<div class="tutorial-card">' +
                '            <h2>'+tutorials[i]["name"]+'</h2>' +
                '            <h5 class="tutorial-description">' +
                tutorials[i]["des"] +
                '            </h5>' +
                '            <a href="'+tutorials[i]["link"]+'" class="read-tutorial-link">Read Tutorial</a>' +
                '        </div>'
        }

        document.getElementById("tutorials").innerHTML = html;
    }

    populateTutorial(tutorials);
</script>
</body>
</html>