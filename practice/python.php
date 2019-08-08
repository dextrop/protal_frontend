<?php
/**
 * Created by PhpStorm.
 * User: sid
 * Date: 4/8/19
 * Time: 2:43 PM
 */
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <style>
        .section {
            background: white;
            height: calc(100vh - 200px);
            width: 90%;
            margin-left: 5%;

        }

        .padding-5px{
            padding: 5px;
        }
        .section-header {
            width: 100%;
            background: gray;

            padding: 10px;
            color: white;
        }
        .code-editor {
            height: 92%;
            width: 100%;
            background: #243B55;
            padding: 20px;
            color: whitesmoke;
            font-family: 'Source Code Pro', monospace;

        }
        .disable-selection:focus {
            outline: none!important;
        }
        .play_btn {
            font-size: 30px;
            color: greenyellow;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="main">
    <div class="row">
        <div class="col-md-6">
            <div class="section">
                <div class="section-header">
                    Code Editor <i class="fa fa-play pull-right play_btn" aria-hidden="true"></i>
                </div>
                <textarea class="code-editor disable-selection" id="editor" data-gramm_editor="false">

                </textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <span class="nav-link active">Question</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Output</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script>
    const el = document.getElementById("editor");
    el.innerText = "";
    el.focus();
    var previous_indentation = "";

    $("textarea").keydown(function(e) {
        // get caret position/selection
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var $this = $(this);
        var value = $this.val();
        // console.log(e.keyCode);

        if(e.keyCode === 9) { // tab was pressed
            // set textarea value to: text before caret + tab + text after caret
            $this.val($this.val() + "    ");

            // put caret at right position again (add one for the tab)
            this.selectionStart = this.selectionEnd = start + 4;
            previous_indentation = "    ";
            // prevent the focus lose
            e.preventDefault();
        }
    });
</script>
</body>
</html>