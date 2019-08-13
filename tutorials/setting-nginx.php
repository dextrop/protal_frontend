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
        var title_page = "Setting up Nginx, PHP and MYSQL"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                <li onclick='gotosection("heading_1")'>Nginx Installation & Setup</li><li onclick='gotosection("heading_2")'>PHP Installation & Setup</li><li onclick='gotosection("heading_3")'>Mysql Installation & Setup</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>Setting Up Nginx, PHP and MySQL on Ubuntu 16+</h1>
<p></p>
<h2 id='heading_1'>Nginx Installation & Setup</h2>
<p>Nginx is open source software for web serving, reverse proxying, caching, load balancing, media streaming, and more. ... In addition to its HTTP server capabilities, NGINX can also function as a proxy server for email (IMAP, POP3, and SMTP) and a reverse proxy and load balancer for HTTP, TCP, and UDP servers.</p>
<p></p>
<p>Before we start setting up nginx we need to make sure our system package manager is updated.</p>
<p>To update package manager and install nginx use.</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo apt-get update
$:sudo apt-get install nginx -y
$:sudo service nginx start
</pre></div>
<p></p>
<p>apt-get is a package manager, The first command will update the package manager.</p>
<p>Second command will install nginx. While '-y' is a parameter given, When we install any package using apt-get we will be prompted with Weather to install Y/N to skip the prompt we are passing -y.</p>
<p>The third command will start nginx</p>
<p>Nginx is a service to start,stop,restart or view status of service we use</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo service service_name start/stop/restart/status
</pre></div>
<p></p>
<p>Once Nginx has installed successfully and running go on web browser and type localhost</p>
<p>Now you can see default page of nginx.</p>
<p></p>
<img src='../assets/images/setting-up-server/1.png' class='image-tutorials'>
<p></p>
<p>Now we have to create our own nginx configuration.</p>
<p>first we will create folder where all our web server files will be placed. and use pwd command to get path of our folder.</p>
<div class='code'><pre id='copy-code-1565721333-43'>
mkdir localserver
cd localserver
pwd
</pre></div>
<p></p>
<p>Removing old nginx configuration</p>
<p>our nginx is listening on port 80 (HTTP port) by default we will open nginx configration and change this post to something else.</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
sudo vim /etc/nginx/sites-available/default
</pre></div>
<p></p>
<p>we need to open file with sudo else we will not have the permission to change any configuration inside it.</p>
<p>code inside default</p>
<div class='code'><pre id='copy-code-1565721333-43'>
##
.
.
.
server {
        listen 80 default_server;
        listen [::]:80 default_server;

.
.
.
</pre></div>
<p></p>
<p>change 80 to something like 9999 and save the file</p>
<p></p>
<p>Now we gonna create our new configuration</p>
<p>create configuration file</p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo vim /etc/nginx/conf.d/default.conf
</pre></div>
<p></p>
<p>and write below code inside and save it</p>
<div class='code'><pre id='copy-code-1565721333-43'>
server {
    listen 80;
    listen [::]:80;

    server_name my_localhost;

    root /usr/share/nginx/html;
    index index.html;

    location / {
            try_files $uri $uri/ =404;
    }
}
</pre></div>
<p></p>
<p>In the above configuration</p>
<div class='code'><pre id='copy-code-1565721333-43'>
    # we are telling nginx to start listening to server on port 80
    listen 80;
    listen [::]:80;

    # server name
    server_name my_localhost;

    # default location of my server files
    root /path_to_my_custom_folder;

    # default opening page
    # if we type localhost
    # localhost/index will be the first page that willserver
    # if above page is not found localhost/index.html will be the second page that will server.
    index index.html;

    # this is just to tell nginx that if any url is not found redirect to page 404.
    location / {
            try_files $uri $uri/ =404;
    }
</pre></div>
<p></p>
<p>create a index.html file inside and write something on it.</p>
<p>Restart Nginx.</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo service nginx restart
</pre></div>
<p></p>
<p>After nginx is restarted we can see our custom code is show on http://localhost/</p>
<p></p>
<p>** nginx setup is completed.</p>
<p></p>
<h2 id='heading_2'>PHP Installation & Setup</h2>
<p>To install all component of php for nginx use below command</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
sudo apt-get install php-fpm php-mysql -y
</pre></div>
<p></p>
<p>Once done all component required for php is installed. Now we have to configure our localhost to server php files.</p>
<p>open /etc/nginx/conf.d/default.conf and add these line to configure php.</p>
<p></p>
<div class='code'><pre id='copy-code-1565721333-43'>
server {
        listen 80;
        listen [::]:80;
        .
        .
        root /usr/share/nginx/html;
        index index.php index.html;
        .
        .
        .
        .
        # Add this code in end of the configration
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                include fastcgi_params;
                client_max_body_size 100M;
                fastcgi_pass unix:/run/php/php7.2-fpm.sock;
                fastcgi_param SCRIPT_FILENAME /path_to_my_custom_folder/$fastcgi_script_name;
        }
}
</pre></div>
<p></p>
<p>after done create a new index.php file on same location where web server is created.</p>
<p>add below code in index.php</p>
<p></p>
<p>restart nginx and load http://localhost/index.php, We would be able to see php configuration on the screen.</p>
<p></p>
<img src='../assets/images/setting-up-server/2.png' class='image-tutorials'>
<p></p>
<h2 id='heading_3'>Mysql Installation & Setup</h2>
<p>To install mysql</p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo apt-get install mysql-server -y
</pre></div>
<p></p>
<p>This will install nginx for us.</p>
<p>Now we need to configure nginx</p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo mysql_secure_installation

Remove anonymous users? (Press y|Y for Yes, any other key for No) : Y
Success.


Normally, root should only be allowed to connect from
'localhost'. This ensures that someone cannot guess at
the root password from the network.

Disallow root login remotely? (Press y|Y for Yes, any other key for No) : Y
Success.

By default, MySQL comes with a database named 'test' that
anyone can access. This is also intended only for testing,
and should be removed before moving into a production
environment.


Remove test database and access to it? (Press y|Y for Yes, any other key for No) : Y
 - Dropping test database...
Success.

 - Removing privileges on test database...
Success.

Reloading the privilege tables will ensure that all changes
made so far will take effect immediately.

Reload privilege tables now? (Press y|Y for Yes, any other key for No) : Y
Success.

All done!
</pre></div>
<p></p>
<p>Once the configuration is completed, we can check mysql using</p>
<div class='code'><pre id='copy-code-1565721333-43'>
$:sudo mysql -u root -p
</pre></div>
<p></p>
<p>It will ask for password, Once the password is given we can see mysql on our screen.</p>

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