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
        var title_page = "Git Basic"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                <li onclick='gotosection("heading_1")'>Start With Git</li><li onclick='gotosection("heading_2")'>Git Branch flow</li><li onclick='gotosection("heading_3")'>Simple Use Case</li><li onclick='gotosection("heading_4")'>Git Merge Conflict</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>Git Basic</h1>
<p>Git is a distributed version-control system for tracking changes in source code during software development. It is designed for coordinating work among programmers, but it can be used to track changes in any set of files. Its goals include speed, data integrity, and support for distributed, non-linear workflows</p>
<p></p>
<h2 id='heading_1'>Start With Git</h2>
<p></p>
<p>To initialize git in a folder, go inside folder and type :</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:cd folder_name
$:git init
</pre></div>
<p></p>
<p>As soon as we initialize git in a folder we can see .git folder created inside the directory</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:ls -a
.  .. .git
</pre></div>
<p></p>
<p>This .git folder contains all information related to Git directory, Changes new Files etc.</p>
<p></p>
<p>Now we need to attach this git local repository to github server. Create a github account, login and create new repository.</p>
<p></p>
<img src='../assets/images/git-tutorial/1.png' class='image-tutorials'>
<p></p>
<p>Fill information about new repository, We can select public or private based on our preferences. When done click on create repository.</p>
<p>For now we will not initialize out git repository with Readme.md</p>
<img src='../assets/images/git-tutorial/2.png' class='image-tutorials'>
<p></p>
<p>As soon as repository is created, we can see the url of repository. Copy url written in https://github.com/username/repo.git</p>
<img src='../assets/images/git-tutorial/3.png' class='image-tutorials'>
<p></p>
<p>Now we will add remote address in our local git repository. Replace <link_to_repo> with your repository link copied previously</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git remote add origin <link_to_repo>
</pre></div>
<p></p>
<p>Type git status to see the status of out git repository</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git status

On branch master
nothing to commit, working directory clean
</pre></div>
<p></p>
<p>Now we are going to create a file inside folder and then check git status.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:touch a.txt
$:git status

On branch master
Your branch is up-to-date with 'origin/master'.
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        a.txt

nothing added to commit but untracked files present (use "git add" to track)

</pre></div>
<p></p>
<p>We can see there is an untracked file inside folder.</p>
<p>Now we gonna add this file to git</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git add a.txt
$:git status

On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   a.txt

</pre></div>
<p></p>
<p>we can see the new file is added to git.</p>
<p>Before pushing changes to remote server we will make a commit with message</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git commit -am "Added a.txt file"

[master 9ce3df0] Added a.txt file
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 a.txt

$:git status
On branch master
Your branch is ahead of 'origin/master' by 1 commit.
  (use "git push" to publish your local commits)

</pre></div>
<p></p>
<p>After git status we can see there is one pending commit that needed to be pushed on server.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git push origin [branch_name]
</pre></div>
<h3>Git checkout</h3>
<p>To create a new branch use:</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git checkout -b [branch_name]
</pre></div>
<p></p>
<p>To checkout other branch which is already created:</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git checkout [branch_name]
</pre></div>
<p></p>
<p>To delete all changes from a file:</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git checkout file_name
</pre></div>
<p></p>
<h3>Stashing</h3>
<p>The stash command will stash any changes you have made since your last commit. If you hit git stash when you have changes in the working copy (not in the staging area), git will create a stashed object and pushes onto the stack of stashes (just like you did git checkout -- . but you won't lose changes). Later, you can pop from the top of the stack.</p>
<p>Usecase: When a person is working on a branch, have not committed his changes yet. If he/she has to go to some other branch either he has to commit his changes or he can you git stash to save changes in a local stack.</p>
<p></p>
<p>*We cannot switch branch if we have uncommitted changed in our local repo.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git stash
</pre></div>
<p></p>
<p>To get back our last change from git stash we use</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git stash pop
</pre></div>
<p></p>
<h2 id='heading_2'>Git Branch flow</h2>
<p>A successful branch flow will consists of two main branches with an infinite lifetime.</p>
<p></p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>Branch Name</th>
		<th class='active-table-tr'> Use Case</th>
	</tr>
	<tr>
		<td>master</td>
		<td> We consider master to be the main branch where the source code always reflects a production-ready state.</td>
	</tr>
	<tr>
		<td>develop</td>
		<td> We consider develop to be the main branch where the source  always reflects with the latest delivered development changes for the next release.</td>
	</tr>
</table></div>
<p></p>
<p>We can also have other supporting branches:</p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>Branch Name</th>
		<th class='active-table-tr'> Use Case</th>
	</tr>
	<tr>
		<td>Feature branches</td>
		<td> Consists of features</td>
	</tr>
	<tr>
		<td>Hotfix branches</td>
		<td> Consists of bug fixes</td>
	</tr>
</table></div>
<p></p>
<h2 id='heading_3'>Simple Use Case</h2>
<p>Lets consider a simple use case to see how Git Branch Flow works.</p>
<p></p>
<p>Lets suppose a person has to develop a portal with login and a single page dashboard which shows data from backend.</p>
<p>As soon as the person creates Git Repository, master branch will automatically be created. This master branch will be there in production server.</p>
<p></p>
<p>Then from master branch he creates a branch name develop and start development. First he has to create a login page that comes under feature.</p>
<p>He cuts a branch from develop branch named as feature/login_page.</p>
<p>Code for creating a new branch:</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
git checkout -b feature/login_page
</pre></div>
<p></p>
<p>further on he completes the login page. Then he goes back to develop branch and merge the login_page branch into develop.</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
git checkout develop
git merge feature/login_page
</pre></div>
<p></p>
<p>After testing when login page is working fine on develop branch, He merge the develop branch into master.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
git checkout master
git merge develop
</pre></div>
<p></p>
<p>Similarly he does it for man dashboard page.</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
git checkout develop
git checkout -b feature/dashboard_page

.
.
completes dashboard page, and merge it to develop branch
.
.

git checkout develop
git merge feature/dashboard_page

.
.
Test dashboard page, and merge it to master branch
.
.
git checkout master
git merge develop
</pre></div>
<p></p>
<h2 id='heading_4'>Git Merge Conflict</h2>
<p></p>
<h3>Why Merge Conflict occurs?</h3>
<p></p>
<p>Merge conflict occurs mostly when there is some modification in a specific file and we try to pull/merge code from different branch.</p>
<p></p>
<p>eg:</p>
<p>Lets suppose we have a piece of code in our branch feature/code_1</p>
<div class='code'><pre id='copy-code-1565284867-64'>
def main(val):
    if (val > 30):
        print "Value is too high"
    else:
        print "Value is normal"
</pre></div>
<p></p>
<p>and in branch feature/code_2</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
def main(val):
    if (val > 90):
        print "Value is too high"
    else:
        print "Value is normal"
</pre></div>
<p></p>
<p>When we try to merge feature/code_1 and feature/code_2 conflicts comes</p>
<div class='code'><pre id='copy-code-1565284867-64'>
get checkout feature/code_1
get merge feature/code_2
</pre></div>
<h3>Conflict</h3>
<p>As soon as we merge we can see conflict has occured.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
$:git checkout feature/code_1
$:git merge feature/code_2

Auto-merging main.py
CONFLICT (content): Merge conflict in main.py
Automatic merge failed; fix conflicts and then commit the result.
</pre></div>
<p></p>
<p>If we go and look into the files we can see the file main.py have conflict.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
def main(val):
<<<<<<< HEAD
    if (val > 30):
=======
    if (val > 90):
>>>>>>> feature/branch_2
        print "Value is too high"
    else:
        print "Value is normal"
</pre></div>
<p></p>
<p>The value between</p>
<div class='code'><pre id='copy-code-1565284867-64'>
<<<<<<< HEAD
    if (val > 30):
=======
</pre></div>
<p></p>
<p>indicates modification from current branch while value between</p>
<div class='code'><pre id='copy-code-1565284867-64'>
=======
    if (val > 90):
>>>>>>> feature/branch_2
</pre></div>
<p></p>
<p>indicates modification from branch feature/branch_2.</p>
<p></p>
<p>One way to solve the conflict is to directly remove the code which we dont want. In my case I want value from feature/branch_2</p>
<p>so my final code will be</p>
<div class='code'><pre id='copy-code-1565284867-64'>

def main(val):
    if (val > 90):
        print "Value is too high"
    else:
        print "Value is normal"
</pre></div>
<p>I have deleted below line.</p>
<div class='code'><pre id='copy-code-1565284867-64'>
def main(val):
<<<<<<< HEAD
    if (val > 30):
=======

>>>>>>> feature/branch_2
</pre></div>
<p></p>
<p>After doing so I am going to add this file again, and make a commit and push it to my branch whosoever I want to push.</p>
<p></p>
<div class='code'><pre id='copy-code-1565284867-64'>
git add main.py
git commit -am "Merged with feature/branch_2 and resolved commit"
git push origin <branch_name>
</pre></div>
<p></p>
<p>This will simply solve my merge conflict.</p>
<p></p>
<p>Other method is to use VCS provided by IDE. I am using pycharm</p>
<p>So I will go on VCS -> Git -> resolve conflict</p>
<p></p>
<img src='../assets/images/git-tutorial/4.jpeg' class='image-tutorials'>
<p></p>
<p>Click on merge</p>
<img src='../assets/images/git-tutorial/6.png' class='image-tutorials'>
<p></p>
<p>We can see there are three section</p>
<p></p>
<img src='../assets/images/git-tutorial/5.png' class='image-tutorials'>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>Section</th>
		<th class='active-table-tr'>Info</th>
	</tr>
	<tr>
		<td>Left Section</td>
		<td>code from local branch, Current branch code</td>
	</tr>
	<tr>
		<td>Middle Section</td>
		<td>code that will be final after merging</td>
	</tr>
	<tr>
		<td>Right Section</td>
		<td>code from remote source which we are trying to merge in our current branch</td>
	</tr>
</table></div>
<p>We can see and 'X' and '>>/<<', Cross (X) indicates discard changed from current section and (>>) indicates accepting changes.</p>
<p>We will cross on the changes we dont want in our middle section and remove changes.</p>
<p>We will take changes from current local branch and discard from remote branch.</p>
<p></p>
<p>As soon as merge is completed, click apply make commit and push.</p>
<img src='../assets/images/git-tutorial/7.png' class='image-tutorials'>

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