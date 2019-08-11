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
        var title_page = "Django Advance"
    </script>
</head>
<body>
<?php include ('../assets/html/navbar.html') ?>
<div class="row" style="margin: 0">
    <div class="col-md-2">
        <div class="main-sidebar">
            <ul class="sidebar-menu">
                <li onclick='gotosection("heading_1")'>Create Django Project</li><li onclick='gotosection("heading_2")'>Create Application</li><li onclick='gotosection("heading_3")'>Create Models</li><li onclick='gotosection("heading_4")'>Create Custom Response</li><li onclick='gotosection("heading_5")'>Custom Exceptional Handler</li><li onclick='gotosection("heading_6")'>Create User Library</li><li onclick='gotosection("heading_7")'>Create RegisterView</li><li onclick='gotosection("heading_8")'>Create Login View</li><li onclick='gotosection("heading_9")'>Create Custom Authentication</li><li onclick='gotosection("heading_10")'>Create Auth Base API</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="main">
            <h1>Creating Api Using Django (Advance)</h1>
<p></p>
<h2 id='heading_1'>Create Django Project</h2>
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
<h2 id='heading_2'>Create Application</h2>
<p>Now we gonna create a custom application for django. To create an custom application in django we will create a python folder named as src.</p>
<p>As soon as we have created a python package named as src we need to add this python project to our django application.</p>
<p>To do so open sample_project/settings.py and add application</p>
<div class='code'><pre id='copy-code-1565507731-87'>
.
.
INSTALLED_APPS = [
    .
    .
    .
    .
    'src',
]
.
.
</pre></div>
<p></p>
<p>Our custom application will have.</p>
<ul class='list_ul'><li class='list_li'><b>Models</b>: Db Tables for our django application</li><li class='list_li'><b>Libraries</b>: Our controller that will interact with db table and views.</li><li class='list_li'><b>View</b>: View with endpoints.</li></ul>
<p></p>
<h2 id='heading_3'>Create Models</h2>
<p>Models are nothing but database tables.</p>
<p>To create models we need to first create a python package inside src folder. The name for this package will be models</p>
<p>after creating models package our application directory structure would be</p>
<div class='code'><pre id='copy-code-1565507731-87'>
sample_project/
    sample_project/
    __init__.py
    settings.py
    urls.py
    wsgi.py
src/
    models/
        __init__.py
    __init__.py
manage.py
</pre></div>
<p></p>
<p>As our task stated we need to create a user and login flow for the same.</p>
<p>So we will create model users. To create model we will create a users.py inside src/models/</p>
<p>And add below code to our users.py model.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.db import models

class Users(models.Model):
   id      = models.AutoField(primary_key=True)
   name    = models.CharField(max_length=50, default="N/A")
   age     = models.IntegerField(default=18)
   gender  = models.CharField(max_length=6, default="Common")
   password  = models.CharField(max_length=30, default="")
   salt  = models.CharField(max_length=20, default="")

   def save(self, *args, **kwargs):
       return super(Users, self).save(*args, **kwargs)

   def __unicode__(self):
       return str(self.id)

   class Meta:
       db_table = 'users'
       app_label = 'src'
</pre></div>
<p></p>
<p>class Users represents sample_table. The Class is inherited from models.Model class in django. The below codes represent columns of the table. There can be different types of columns in a database.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   id      = models.AutoField(primary_key=True)
   name    = models.CharField(max_length=50, default="N/A")
   email_id    = models.CharField(max_length=50, default="N/A")
   age     = models.IntegerField(default=18)
   gender  = models.CharField(max_length=6, default="Common")
   password  = models.CharField(max_length=30, default="")
   salt  = models.CharField(max_length=20, default="")
</pre></div>
<p>Copy function save in the same format. Just replace Users with your table Class name.</p>
<p>If you want customized saving behavior, you can override this save() method. See Overriding predefined model methods for more details.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   def save(self, *args, **kwargs):
       return super(Users, self).save(*args, **kwargs)
</pre></div>
<p></p>
<p>While the __unicode__ function is used when we want to fetch any row from database. When we fetch a row , the elements inside row is linked with a reference and through the reference we can fetch table row. We are passing id as reference for table</p>
<div class='code'><pre id='copy-code-1565507731-87'>
   def save(self, *args, **kwargs):
       return super(Users, self).save(*args, **kwargs)

   def __unicode__(self):
       return str(self.id)


   class Meta:
       db_table = 'users'
       app_label = 'src'

</pre></div>
<p>While class Meta is used to define name of table and app information for the table.</p>
<p>Here are a few types of Field we can use.</p>
<p></p>
<img src='../assets/images/api/1.png' class='image-tutorials'>
<p></p>
<p>Now our Users structure is made, Now we need to import this table to our models.</p>
<p>To do so open models/__init__.py and import users.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from src.models.users import Users
</pre></div>
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
<h2 id='heading_4'>Create Custom Response</h2>
<p>The main purpose of creating a custom response are</p>
<ul class='list_ul'><li class='list_li'>Having same structure for response thought the API</li><li class='list_li'>Easy Error Handling</li></ul>
<p></p>
<p>This custom response will help our api, So in that case we gonna create a api_helper python package and create a new file in API helper named as custom_response.py</p>
<p></p>
<p>after creating api_helper and custom_response.py inside api helper our directory structure would be</p>
<div class='code'><pre id='copy-code-1565507731-87'>
api_helper/
    __init__.py
    custom_response.py
sample_project/
    __init__.py
    settings.py
    urls.py
    wsgi.py
src/
    models/
        __init__.py
        users.py
    __init__.py
manage.py
</pre></div>
<p></p>
<p>Open custom_response.py and write the below code inside it</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from rest_framework.response import Response
from rest_framework.status import HTTP_200_OK

class CustomResponse(Response):
    def __init__(self, message="Learner Bee API", payload=None, code=HTTP_200_OK, status=True):
        '''
        :param message: Message that an api will convey, default is "Learner Bee API"
        :param payload: this will consists our main data.
        :param code: This will have status code.
        :param status: True/False, In case of success its always true, In case of error its error its true.
        '''
        data = {
            "status": status,
            "payload": payload,
            "message": message
        }
        super(CustomResponse, self).__init__(data=data, status=code)
</pre></div>
<p></p>
<p>This custom response will always return any response weather be success or failure in a similar manner.</p>
<p>The format for the above custom response is.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
{
    "status": True/False,
    "payload": [All Data what we want to give to user will be shown here, Data can be a string or array or json object based on api need],
    "message": "Will have something related to api"
}
</pre></div>
<p></p>
<p>For now custom response is create, We will use this custom response once our view is created.</p>
<p></p>
<h2 id='heading_5'>Custom Exceptional Handler</h2>
<p>This custom exceptional handler will help our api, So in that case we gonna create a api_helper python package and create a new file in API helper named as custom_exception_handler.py</p>
<p>after creating api_helper and custom_exception_handler.py inside api helper our directory structure would be</p>
<div class='code'><pre id='copy-code-1565507731-87'>
api_helper/
    __init__.py
    custom_response.py
    custom_exception_handler.py
sample_project/
    __init__.py
    settings.py
    urls.py
    wsgi.py
src/
    models/
        __init__.py
        users.py
    __init__.py
manage.py
</pre></div>
<p></p>
<p>Open custom_exception_handler.py and write the below code inside it</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from rest_framework.status import HTTP_400_BAD_REQUEST, HTTP_500_INTERNAL_SERVER_ERROR
from src.api_helper.customresponse import CustomResponse


def custom_handler(excpetion_object, context):
    '''
    Custom exception handler accepts two things
    excpetion_object and context
    :param excpetion_object: This will consists information about error
    :param context: Handled by django internally, We wont be using this parameter.
    :return: response
    '''

    # grabbing exception message
    message = excpetion_object.message

    # grabbing exception calls,
    # Based on class we will have error code
    # for our custom expection handler
    if excpetion_object.__class__.__name__ == "ValidationError":
        code = HTTP_400_BAD_REQUEST
    elif excpetion_object.__class__.__name__ == "KeyError":
        code = HTTP_400_BAD_REQUEST
    else:
        code = HTTP_500_INTERNAL_SERVER_ERROR

    # create a response for error,
    # code will be based on exception class name,
    # message will be grabbed from excpetion_object.message
    # payload will be none is in case of error we will return nothing
    response = CustomResponse(
        payload=None, code=code, message=message, status=False
    )
    return response
</pre></div>
<p></p>
<p>Once the exception handler is created, we need to add this to our settings.py</p>
<p>to do so open and edit setting.py and add below piece of code.</p>
<div class='code'><pre id='copy-code-1565507731-87'>

REST_FRAMEWORK = {
    'EXCEPTION_HANDLER': 'src.api_helper.custom_exception_handler.custom_handler'
}
</pre></div>
<p></p>
<p>the above code will configure our handler.</p>
<p></p>
<h2 id='heading_6'>Create User Library</h2>
<p>User library ( or say User Controller ) will perform below functions for us.</p>
<ul class='list_ul'><li class='list_li'><b>Create User</b>: This will help us to create user based on information provided to our controller.</li><li class='list_li'><b>Login</b>: Will be a login process.</li><li class='list_li'><b>Logout</b>: Will delete token for user making his session invalidated.</li><li class='list_li'><b>Get User Information</b>: When a user will pass his token he will be able to validate his session and grab his details.</li></ul>
<p></p>
<h3>Register User</h3>
<p>The create user flow will go on with 3 process.</p>
<ul class='list_ul'><li class='list_li'>validate user details</li><li class='list_li'>check if user not in table.</li><li class='list_li'>if user is found , return error user already exits</li><li class='list_li'>else, create password hash ( we wont be storing password directly, instead we will store password_hash and salt in our user table.</li><li class='list_li'>add user in table and return user created successfully.</li></ul>
<p></p>
<p>Let start, create a python package named as libraries inside src folder. This python package will hold all our controllers logic.</p>
<p>Inside libraries create userlib.py and write below piece of code</p>
<div class='code'><pre id='copy-code-1565507731-87'>
class UserLib():
    def __init__(self):
        print "Initialized User Lib"

    def createUser(self, user_info):
        '''
        this methods created user in database.
        :param user_info: JSON data posted on API
        :return: "User Created"
        '''
        return "User Created"
</pre></div>
<p></p>
<p>As you can see I have created a python class with method as createUser, All our logic for creating a user will be stored in this create user method.</p>
<p>For now this method accept user_info in which user information will be stored in format of json.</p>
<p>The user_info is a dictionary with keys as below</p>
<div class='code'><pre id='copy-code-1565507731-87'>
{
"name": "Saurabh Pandey",
"age": 28,
"gender": "Male",
"email_id": "saurabh@learnerbee.in",
"password": "XXXX"
}
</pre></div>
<p>We will require to add a validation method which will check the user information for missing key, and also check if user is already present in Db.</p>
<p>After validation is done we will hash password and store user in database.</p>
<p>We will not store password directly in string in database as its not a safe and standard method to follow.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.core.exception import ValidationError
from src.models import Users

class UserLib():
    def __init__(self):
        print "Initialized User Lib"

    def validate_signup(self, user_info):
        # validating input, if key is not found raise Validation Error.
        if "name" not in user_info:
            return ValidationError("Missing Key 'name'")

        if "email_id" not in user_info:
            return ValidationError("Missing Key 'email_id'")

        if "password" not in user_info:
            return ValidationError("Missing Key 'password'")

        # validate if user already exits.
        users = Users.objects.filter(email_id=user_info["email_id"])
        if users.count() > 0:
            return False

        return True

    def password_hashing(self, password, salt=None):
        '''
        Password hashing method, Return hash_password and salt
        :param password: password to be hashed,
        :param salt: Default is none, If salt is not passed new salt will be generated
        :return: password_hash, salt
        '''
        if not salt:
            # create salt based on urandom
            salt = binascii.hexlify(os.urandom(SALT_LENGTH / 2)).decode()

        hash_library = hashlib.new(HASH_METHOD)
        salted_client_hash = str(password + salt)
        hash_library.update(salted_client_hash)
        server_hash = hash_library.hexdigest()
        return (server_hash, salt)

    def createUser(self, user_info):
        '''
        this methods created user in database.
        :param user_info: JSON data posted on API
        :return: "User Created"
        '''
        validation = self.validate_signup(user_info)
        # create hash password and salt that has to be stored in DB.
        passowrd_hash, salt = self.password_hashing(password=user_info["password"]

        #replace normal password with hash password and add user to Users Table.
        user_info["password"] = password_hash
        Users.objects.create(**user_info)
        return "User Created"
</pre></div>
<p></p>
<p>the code Users.objects.create(**user_info) create user from a dictionary. The command simply add a new entry in user table, The values of the entry is stored in dict "user_info"</p>
<p></p>
<h3>User Login</h3>
<p>We will be now going with the login process</p>
<ul class='list_ul'><li class='list_li'>Validate user input</li><li class='list_li'>check if email_id is present in database.</li><li class='list_li'>if email_id is not present throw error saying email_id not found</li><li class='list_li'>else check the hash password with the password provided.</li></ul>
<p></p>
<p>to match password we will follow</p>
<ul class='list_ul'><li class='list_li'>get salt from database</li><li class='list_li'>hash provided password with same salt obtained above</li><li class='list_li'>check if provided password == password in database</li><li class='list_li'>create token, activate user session.</li></ul>
<p>For login library we need to have a table Token that will store token related to users.</p>
<p>Create a model tokens.py inside models/ and write below piece of code.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.db import models
from src.models.users import Users
import os, binascii

TOKEN_LENGTH = 40

class TokenManager(models.Manager):
    # A model Manager will be a class that will help our model
    def generate_access_token(self):
        # generate random access_token based on time.
        # The method will always generate unique token for every user
        return binascii.hexlify(os.urandom(TOKEN_LENGTH/2)).decode()

class Token(models.Model):

    access_token = models.CharField(max_length=40, primary_key=True)
    # user will be a foreign key.
    user = models.ForeignKey(Users)
    # declare token manager in our main token file.
    objects = TokenManager()

    def save(self, *args, **kwargs):
        # while creating a row in token model,
        # if access_token is not provided
        # create access_token, attach it with row.

        if not self.access_token:
            self.access_token = Token.objects.generate_access_token()
        return super(Token, self).save(*args, **kwargs)

    def __unicode__(self):
        return self.access_token

    class Meta:
        db_table = 'token'
        app_label = 'src'
</pre></div>
<p></p>
<p>import the above token class in models/__init__.py</p>
<div class='code'><pre id='copy-code-1565507731-87'>
.
.
from src.models.tokens import Token
</pre></div>
<p></p>
<p>To create login we will create a new controller named as loginlib.py inside libraries.</p>
<p>create file loginlib.py and write this piece of code.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from src.models import Users, Token
import binascii, os, hashlib
from django.core.exceptions import ValidationError


SALT_LENGTH = 16
HASH_METHOD = "SHA512"

class LoginLib():
    def __init__(self):

        print "Login lib is working"

    def password_hashing(self, password, salt=None):
        '''
        Password hashing method, Return hash_password and salt
        :param password: password to be hashed,
        :param salt: Default is none, If salt is not passed new salt will be generated
        :return: password_hash, salt
        '''
        if not salt:
            # create salt based on urandom
            salt = binascii.hexlify(os.urandom(SALT_LENGTH / 2)).decode()

        hash_library = hashlib.new(HASH_METHOD)
        salted_client_hash = str(password + salt)
        hash_library.update(salted_client_hash)
        server_hash = hash_library.hexdigest()
        return (server_hash, salt)

    def validateLogin(self, login_detail):
        if "email_id" not in login_detail:
            raise ValidationError("email_id not found")

        if "password" not in login_detail:
            raise ValidationError("password not found")

        # this user object will be an array.
        users = Users.objects.filter(email_id=login_detail["email_id"])
        if (users.count() > 0):
            selected_user = users[0]

            # get password & salt from database
            password_from_db = selected_user.password
            salt_from_db = selected_user.salt

            # hash password from request with salt obtained from database.
            password_hash_req, salt = self.password_hashing(
                password=login_detail["password"], salt=salt_from_db
            )

            # check if password from requests match with password from database.
            if (password_from_db == password_hash_req):
                # if password is match create a global user, user_selected for clas
                # attach this user to our selected user.
                self.user_selected = selected_user
                return True
            else:
                raise ValidationError("Invalid Password")

        raise ValidationError("User Not Found")

    def login(self, login_detail):
        user = self.validateLogin(login_detail)
        validation = self.validateLogin(login_detail)
        if (validation):
            # if validation is completed, create a token for selected user.
            # in success response return Token

            token, created = Token.objects.get_or_create(user=self.user_selected)
            response = {"token": token.access_token }
            return response
        return "Login Successful"
</pre></div>
<p></p>
<p>The above code will complete our login flow.</p>
<p>Further on we now have to create view for our controllers and database tables.</p>
<p></p>
<h2 id='heading_7'>Create RegisterView</h2>
<p>As we have already created user table and user controller, now w just have to create RegisterView, call user controller for user creation and have to attach an endpoint to it.</p>
<p></p>
<p>to create view we will first create views python package inside src and add userview.py in the same.</p>
<p>inside userview.py write this piece of code.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.http import JsonResponse
from rest_framework.views import APIView
from src.libraries.userlib import UserLib
from src.api_helper.customresponse import CustomResponse
from rest_framework.status import HTTP_201_CREATED

class UserView(APIView):

    def post(self, requests):
        user_details = requests.data
        response_text = UserLib().createUser(user_info=user_details)
        return CustomResponse(payload=response_text, code=HTTP_201_CREATED)
</pre></div>
<p></p>
<p>The user view has only one method post, This method will be used for user creation.</p>
<p>inside method we will get our json object from api using request.data</p>
<p>this user detail will be passed to user lib, which will then validate and create user.</p>
<p>In case of error it automatically raises error. Once done, We will return success with our custom response</p>
<p></p>
<p>This then will be added in urls, open urls.py and add this piece of code in it.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
.
.
.
.
from django.conf.urls import url

#import user view
from src.views.userview import UserView

urlpatterns = [
    # add user view to endpoint.
    url(r'^user/', UserView.as_view()),
]
</pre></div>
<p></p>
<p>Then we can run our api using</p>
<div class='code'><pre id='copy-code-1565507731-87'>
python manage.py runserver 0.0.0.0:8081
</pre></div>
<p></p>
<p>Try to call post method on http://localhost:8081/user/, where 8081 is port running, /user/ is endpoint attach to user view</p>
<p>This method will accept data as json.</p>
<p>To Test api, we will write a test file</p>
<div class='code'><pre id='copy-code-1565507731-87'>
import requests

def testUserAPI():
    dummy_json ={
    "name": "Saurabh",
    "age": 21,
    "email": "saurabh@learnerbee.in",
    "password": "XYRSZ"
    }
    url = "http://localhost:8081/user/"
    response = requests.post(url, json=dummy_json)
    print response.json()

testUserAPI()
</pre></div>
<p>This is a test function for testing user api.</p>
<p></p>
<h2 id='heading_8'>Create Login View</h2>
<p>As we have already created user table and token table with login controller, now w just have to create a loginView, call user controller for user creation and have to attach an endpoint to it.</p>
<p></p>
<p>to create loginview.py in the src/views/.</p>
<p>inside loginview.py write this piece of code.</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from django.http import JsonResponse
from rest_framework.views import APIView
from src.libraries.loginlib import LoginLib
from src.api_helper.customresponse import CustomResponse
from rest_framework.status import HTTP_201_CREATED

class LoginView(APIView):

    def post(self, requests):
        user_details = requests.data
        response_text = LoginLib().login(user_info=user_details)
        return CustomResponse(payload=response_text, code=HTTP_201_CREATED)
</pre></div>
<p></p>
<p>The login view has only one method post, This method will be used for logging user to our api.</p>
<p>inside method we will get our json object from api using request.data</p>
<p>this user detail will be passed to login lib, which will then validate and create token for the user.</p>
<p>In case of error it automatically raises error. Once done, We will return success with our custom response including token</p>
<p></p>
<p>This then will be added in urls, open urls.py and add this piece of code in it.</p>
<div class='code'><pre id='copy-code-1565507731-87'>
.
.
.
.
from django.conf.urls import url

#import login view
from src.views.loginview import LoginView

urlpatterns = [
    # add user view to endpoint.
    url(r'^user/', UserView.as_view()),
    url(r'^login/', LoginView.as_view()),
]
</pre></div>
<p></p>
<p>We can run our code and do testing similarly.</p>
<p>Now when we have done logging flow, We need to create permission class and authentication class for our api.</p>
<p></p>
<h2 id='heading_9'>Create Custom Authentication</h2>
<p>Create a custom authntication class</p>
<p>create a file custom_authentication.py inside api_helper and write below code</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from src.models import Users, Token
from rest_framework import authentication, exceptions

class TokenAuthentication(authentication.BaseAuthentication):
    def authenticate(self, request):
        # grab token from api
        _token = request.META.get("HTTP_TOKEN", False)
        if _token:
            # check if user
            try:
                token = Token.objects.filter(access_token=_token)
                # if token is not present in token table raise exception Invalid Access Token
                if(token.count() <= 0):
                    raise exceptions.AuthenticationFailed('Invalid access token')

            except Exception as e:
                raise exceptions.AuthenticationFailed('Invalid access token')
            user_id = token.user
            user = Users.objects.get(user_id=user_id)
            return (user, token)

        else:
            return None
</pre></div>
<p></p>
<p>The above code will check if token is provided or not.</p>
<p>To use it for base authentication inside api we need to configure it inside our django project</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
REST_FRAMEWORK = {
    'EXCEPTION_HANDLER': 'src.api_helper.custom_exception_handler.custom_handler'
    'DEFAULT_AUTHENTICATION_CLASSES': 'src.api_helper.custom_authentication.TokenAuthentication'
}
</pre></div>
<p></p>
<p>create custom permission class inside api_helper.py and add below code in it</p>
<div class='code'><pre id='copy-code-1565507731-87'>
from rest_framework import permissions

class IsAuthenticated(permissions.BasePermission):
    def has_permission(self, request, view):
        return ( request.user and request.user.is_authenticated() )

</pre></div>
<p></p>
<p>This class will help us to add permission to our api.</p>
<p>We can import this class and used it in any api to created authentication base api.</p>
<p></p>
<h2 id='heading_10'>Create Auth Base API</h2>
<p>We will now create a sample api that will return success if right token is passed.</p>
<p>create a file sample_auth_view.py inside views/ and write below code</p>
<p></p>
<div class='code'><pre id='copy-code-1565507731-87'>
from rest_framework.views import APIView
from src.api_helper.customresponse import CustomResponse
from rest_framework.status import HTTP_200_OK
from src.api_helper.permissions import IsAuthenticated

class AuthView(APIView):
    permission_classes = (IsAuthenticated,)
    def get(self, requests):
        print requests.GET
        return CustomResponse(payload="Success", code=HTTP_200_OK)
</pre></div>
<p></p>
<p>As we can see the only extra part in this api is permission_class. This class will make our api as protected api.</p>
<p>While the code for IsAuthenticated is written in permission class.</p>
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