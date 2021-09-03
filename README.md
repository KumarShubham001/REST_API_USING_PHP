# REST_API_USING_PHP
Implementing REST API concept using php!!

REST has become the de facto standard when it comes to exposing data via APIs and building web services. In fact, most web applications these days access and expose data via REST APIs. With the popularity of front-end frameworks that can consume REST APIs effortlessly, it’s always going to be a plus for you if your web application exposes REST APIs.

The above code is a simple implementation of the REST API, which allows you to fetch a list of users from the MySQL database via a REST endpoint.

## Project structure.

* index.php: the entry-point of our application. It will act as a front-controller of our application.
* inc/config.php: holds the configuration information of our application. Mainly, it will hold the database credentials.
* inc/bootstrap.php: used to bootstrap our application by including the necessary files.
* Model/Database.php: the database access layer which will be used to interact with the underlying MySQL database.
* Model/UserModel.php: the User model file which implements the necessary methods to interact with the users table in the MySQL database.
* Controller/Api/BaseController.php: a base controller file which holds common utility methods.
* Controller/Api/UserController.php: the User controller file which holds the necessary application code to entertain REST API calls.

#### Files needed to be modified:
1. Change the database details inside 'inc/config.php'
2. Add requried models inside Model dir as '<model_name>Model.php'
3. Add requried Controller for every Model inside Controller/Api dir as '<Controller_name>Controller.php'
4. Import the Model file in the bootstrap.php as 'require_once PROJECT_ROOT_PATH . "/Model/<Model_name>Model.php";'
5. index.php

#### Make Following changes inside the index.php file:
1. Add the routes in the $allowedBaseRoutes var
2. Add the Controller inside the switch statement

Now you are good to go!!

Use this type syntax for API calls:
http://localhost/index.php/user/list?limit=20

Note: Mentioning 'index.php' in the route is very important unless you are planning to make some changes in index.php to compensate the code flow!!
