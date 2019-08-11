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
        var title_page = "Creating basic API with Django"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                <li onclick='gotosection("heading_1")'>Requirements</li><li onclick='gotosection("heading_2")'>Project Setup</li><li onclick='gotosection("heading_3")'>Creating an application</li><li onclick='gotosection("heading_4")'>How Django api works</li><li onclick='gotosection("heading_5")'>Creating a Model</li><li onclick='gotosection("heading_6")'>Create View</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>Creating Api Using Django</h1>
<p></p>
<h2 id='heading_1'>Requirements</h2>
<p>1. Django</p>
<p></p>
<p>To install above dependencies:</p>
<div class='code'><pre id='copy-code-1565507731-87'>
sudo pip install django
</pre></div>
<p></p>
<h2 id='heading_2'>Project Setup</h2>
<p>Go ahead and create a django project. Use below command to start a new project.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
django-admin startproject sample_project
</pre></div>
<p></p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>django-admin</th>
		<th class='active-table-tr'>Main django command</th>
	</tr>
	<tr>
		<td>startproject</td>
		<td>Django command argument for starting a new project</td>
	</tr>
	<tr>
		<td>sample_project</td>
		<td>Name of project</td>
	</tr>
</table></div>
<p></p>
<p>** The above command will create a folder sample_project, This is our django project.</p>
<p>Open project with pycharm, The directory structure should now look like this.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
sample_project/
   manage.py
   sample_project/
       __init__.py
       settings.py
       urls.py
       wsgi.py
</pre></div>
<p></p>
<p></p>
<p>About the files</p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>File</th>
		<th class='active-table-tr'>About</th>
	</tr>
	<tr>
		<td>manage.py</td>
		<td>It does the same thing as django-admin but also sets the DJANGO_SETTINGS_MODULE environment variable so that it points to your project's settings.py file.</td>
	</tr>
	<tr>
		<td>settings.py</td>
		<td>Stores all settings related to project.</td>
	</tr>
	<tr>
		<td>urls</td>
		<td>All Urls and endpoints for this project will be declared here</td>
	</tr>
	<tr>
		<td>wsgi.py</td>
		<td>Settings to run project on UWSGI, Will learn about this later.</td>
	</tr>
	<tr>
		<td>__init__.py</td>
		<td>Constructure for python project</td>
	</tr>
</table></div>
<p></p>
<h2 id='heading_3'>Creating an application</h2>
<p>Go ahead and create a django application, Django application is the basic application which will serve all our api's. In a single Django project we can have multiple application based on usage.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
django-admin startapp sample_app
</pre></div>
<p></p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>Command</th>
		<th class='active-table-tr'>About</th>
	</tr>
	<tr>
		<td>startproject</td>
		<td>Django command argument for starting a new project</td>
	</tr>
	<tr>
		<td>sample_app</td>
		<td>Name of application</td>
	</tr>
</table></div>
<p></p>
<p>** The above command will create a folder sample_project, This is our django project.</p>
<p>Open project with pycharm, The directory structure should now look like this.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
sample_project/
   Manage.py
   sample_app
      migrations
      __init__.py
      admin.py
      apps.py
      models.py
      tests.py
      views.py
   sample_project/
       __init__.py
       settings.py
       urls.py
       wsgi.py
</pre></div>
<p></p>
<p></p>
<div class='tb_content'><table class='table table-bordered'>
	<tr>
		<th class='active-table-tr'>File</th>
		<th class='active-table-tr'>About</th>
	</tr>
	<tr>
		<td>migrations.py</td>
		<td>This file basically stores all the migrations related to DB.</td>
	</tr>
	<tr>
		<td>admin.py</td>
		<td>To manage user authentication, We will create our own..</td>
	</tr>
	<tr>
		<td>app.py</td>
		<td>App configuration is stores here</td>
	</tr>
	<tr>
		<td>test.py</td>
		<td>Sample file for unit testing</td>
	</tr>
	<tr>
		<td>models.py</td>
		<td>Db models.</td>
	</tr>
	<tr>
		<td>views.py</td>
		<td>All views will be created here.</td>
	</tr>
</table></div>
<p></p>
<h2 id='heading_4'>How Django api works</h2>
<p></p>
<p>API work on MVC structure.</p>
<a href='https' target='_blank'>read about MVC</a><p>In API</p>
<p>* Model act as table, Each model class will represent a table with its properties.</p>
<p>* View : view will be act as endpoint that will interact with user and responding json.</p>
<p>* Controller : A python class that works in between view and model, View never interact with model instead it will call a library class and will interact with out model through same library class.</p>
<p></p>
<p>For our basic api we will not be using controllers.</p>
<p></p>
<h2 id='heading_5'>Creating a Model</h2>
<p>Open models.py, we would be writing our model class inside models.py:</p>
<p>Lets write a sample model.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.db import models

class SampleTable(models.Model):
   id      = models.AutoField(primary_key=True)
   name    = models.CharField(max_length=50, default="N/A")
   age     = models.IntegerField(default=18)
   gender  = models.CharField(max_length=6, default="Common")

   def save(self, *args, **kwargs):
       return super(SampleTable, self).save(*args, **kwargs)

   def __unicode__(self):
       return str(self.id)

   class Meta:
       db_table = 'sample_table_1'
       app_label = 'sample_app'
</pre></div>
<p></p>
<p>class SampleTable represents sample_table. The Class is inherited from models.Model class in django. The below codes represent columns of the table. There can be different types of columns in a database.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   id      = models.AutoField(primary_key=True)
   name    = models.CharField(max_length=50, default="N/A")
   age     = models.IntegerField(default=18)
   gender  = models.CharField(max_length=6, default="Common")
</pre></div>
<p>Copy function save in the same format. Just replace SampleTable with your table Class name.</p>
<p>If you want customized saving behavior, you can override this save() method. See Overriding predefined model methods for more details.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   def save(self, *args, **kwargs):
       return super(SampleTable, self).save(*args, **kwargs)
</pre></div>
<p></p>
<p>While the __unicode__ function is used when we want to fetch any row from database. When we fetch a row , the elements inside row is linked with a reference and through the reference we can fetch table row. We are passing id as reference for table</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   def save(self, *args, **kwargs):
       return super(SampleTable, self).save(*args, **kwargs)

   def __unicode__(self):
       return str(self.id)


   class Meta:
       db_table = 'sample_table_1'
       app_label = 'sample_app'

</pre></div>
<p>While class Meta is used to define name of table and app information for the table.</p>
<p>Here are a few types of Field we can use.</p>
<p></p>
<img src='../assets/images/api/1.png' class='image-tutorials'>
<p></p>
<p>To create the database we need to do migrations and then have to apply the migrations.</p>
<p>Open terminal and type following commands</p>
<div class='code'><pre id='copy-code-1565507731-87'>
python manage.py makemigrations sample_app
</pre></div>
<p></p>
<p>The above command create migration. This is done to make sure all migrations before they are applied can be checked, Also it creates a migrations script inside migrations folder, python manage.py is the calling function while makemigrations is subcommand and sample_app is the name of the app for whom we want apply migrations for.</p>
<p>After all migrations has successfully compiled, we will migrate</p>
<div class='code'><pre id='copy-code-1565507731-87'>
python manage.py migrate
</pre></div>
<p></p>
<p>The above command will apply all the migrations made in previous step.</p>
<p></p>
<h2 id='heading_6'>Create View</h2>
<p>We will be creating a view for adding and deleting data from database. We wont be using controllers for now.</p>
<p>Now we are going to create view for our sample db that will help us to add and delete record from the above created SampleTable</p>
<p></p>
<p>Open views.py and write the following code.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
# -*- coding: utf-8 -*-
from __future__ import unicode_literals
import json
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from models import SampleTable

@csrf_exempt
def sample_db_test(requests):
   if (requests.method == "GET"):
       response_obj = SampleTable.objects.all()
       response = {"data": []}
       for element in response_obj:
           response["data"].append(
               {
                    "id":element.id,
                    "name": element.name,
                    "age": element.age,
                    "gender": element.gender
               }
            )
   elif (requests.method == "POST"):
       request_body = json.loads(requests.body)
       SampleTable.objects.create(**request_body)
       response = {"message": "POST Method working successfully"}

   return JsonResponse(response)

</pre></div>
<p>In the following code we are going to call POST request. Post requests are mostly secured by CRF tokens, Right now we will not configure CSRF token instead we will add a property to our view that will bypass this security check  @csrf_exempt</p>
<p>While def sample_db_test(requests): defines the view and accept parameter request which has few properties that we are going to use.</p>
<p></p>
<img src='../assets/images/api/2.png' class='image-tutorials'>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
@csrf_exempt
def sample_db_test(requests):
</pre></div>
<p></p>
<p>As you can see we had made a if else check on request.method to check what type of</p>
<div class='code'><pre id='copy-code-1565507731-87'>
....
....
   if (requests.method == "GET"):
       ....
       ....
   elif (requests.method == "POST"):
       ....
       ....
....
....
</pre></div>
<p></p>
<p>We will write out piece of code for these methods inside the if and else check.</p>
<p></p>
<p></p>
<p>Inside GET check method we are going to write this piece of code. We will write code for getting all objects from database.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
# Grab all data from sample table. The table can be accessed using <TableName>.objects.all()

       response_obj = SampleTable.objects.all()

# Create a response as dict, Response in django should be a json object not a json array.

       response = {"data": []}
# we can access all element from response object by iterating through object.
# Each iteration will be stored in element,
# Through this object we can access columns of table for our process.

       for element in response_obj:
           response["data"].append(
               {
                    "id":element.id,
                    "name": element.name,
                    "age": element.age,
                    "gender": element.gender
               }
            )

</pre></div>
<p>Inside POST check method we will write code to add any piece of data to our database.</p>
<div class='code'><pre id='copy-code-1565507731-87'>

# first we have to get body ( request data ) from our requests object,
# we will further add this data to database,
# To add this data to database we need to change the string body to json,
# We will use json.dumps(string) function to do so.
       request_body = json.loads(requests.body)

# to add object in database we will use <TABLE>.objects.create(**json_data) method. After this we will create a success response for the user.

       SampleTable.objects.create(**request_body)
       response = {"message": "POST Method working successfully"}
</pre></div>
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