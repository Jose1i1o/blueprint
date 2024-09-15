`#html` `#css` `#js` `#php` `#basics` `#master-in-software-engineering`

# PHP MVC Basic Patterns<!-- omit in toc -->

> This is a pill created to learn how the architecture of MVC pattern works as a part of the Master in Software Development by Assembler School of Software Engineering.

### Main objetives: 🤯

- Understand what it is an architecture pattern, what it is used for, and what advantages it can bring to the project
- Learn to implement the MVC pattern
- Learn more about the use of this pattern for future implementations in
  popular Working Frameworks
  
### Briefing at project delivery 😱

- This project is completed using mysqli.
- Both the initialize.php and the query_functions.php file are my controllers.
- The config files are the database.php and the db_credentials.php.
- The models are the functions.php and validations_functions files. 
- This are not contained within their respective folders since there is too much dependency that I couldn´t handle with my current know-how.
- Inserting scripts, special characters or html through the url is controlled. 
- The database is called and then disconnected once it is resolved. This is done at private/footer level where everytime the footer displays it stops the   execution.
- A different user than root is created to handle the database.
- Routing done at initialize.php
- Validations are done through the validation_functions.php 

## Index <!-- omit in toc -->

- [Starting 🚀](#starting-)
- [Theory 📚](#theory-)
  - [Requirements📋](#requirements)
  - [Main page](#main-page)
  - [Employees dashboard page](#employees-dashboard-page)
    - [Employee details page](#employee-details-page)
  - [Departments dashboard Page](#departments-dashboard-page)
    - [Department details page](#department-details-page)
- [Project structure 📁](#project-structure-)
- [Tools and tecnologies used 🛠️](#tools-and-tecnologies-used-️)
- [Project requirements 📏](#project-requirements-)
- [Resources](#resources)

## Starting 🚀

_In order to view the application running on a browser, you should follow this steps:_

1. Download a copy of this repo or fork it.
2. Open a local server environment such as MAMP or XAMPP.
3. In order to use the database, you should _source_ the _employees.sql_ database.
4. On config/db.php you should set your user's credentials you've stablished on your local server.
5. If you want to use the ones already set on this file, you must create the user on your local server with these credentials:
   1. _User_ -> webuser
   2. _Password_ -> password

## Theory 📚

1.  **What is an architecture pattern?**
    It is a general, reusable solution to a commonly occurring problem in software architecture within a given context. The architectural patterns address various issues in software engineering, such as computer hardware performance limitations, high availability and minimization of a business risk.

2.  **What is the MVC pattern?**
    MVC is a software architectural pattern for implementing user interfaces on computers. It divides a given application into three interconnected parts, the Model, View and Controller (MVC).

- Model: the classes and methods that interact with the database.
- View: it has to display the data to the client, so its understandable and easy to read.
- Controller: it is the intermediary beetwen the view and the model, which manages the user interactions with the view, requests the data to the model and returns this data to the view.

4.  **Draw a scheme where you understand that the MVC pattern is clearly**
    ![enter image description here](https://www.freecodecamp.org/news/content/images/2021/04/MVC3.png)
5.  **Explain in which cases you would use this pattern**
    It can be useful in many cases, specially when we have in mind the scalability of a project.
6.  **Describe step by step what happens in this pattern from when you create a Request until a Response is returned (you can give more than one example if you consider it necessary)**
    First, the client sends a request to the controller, interacting with the view. Then, the controller requests the data to the model, which returns that data. The data is sent to the view by the controller that finally renders what's the user has asked for.
7.  **What advantages do you think this pattern has to use?**
    The main advantage of architecture is reusability, security and increasing the performance of application.

### Requirements📋

To run this project you need yo have a local server environment installed in your computer. Such as MAMP or XAMPP. View more info on [MAMP's website](https://www.mamp.info/en/).

### Main page

Here we can choose which controller to use: Employees or Departments.

### Employees dashboard page

Here we can see all the employees of the database, with their main information. We can also view more details of the employee by clicking on the blue button or delete an employee by clicking on the red one.

#### Employee details page

Here you can see **all** the details of the selected employee.

### Departments dashboard Page

Here you can see a list of all the company's departments.

#### Department details page

By clicking on the blue button you can view a form to edit the department's info.

## Project structure 📁

```
assets/
config/
controllers/
models/
resources/
views/
```

## Tools and tecnologies used 🛠️

- PHP
- HTML
- Bootstrap
- MySQL

## Project requirements 📏

- All code included comments need to be write in English
- Use a code style like camelCase
- HTML never use inline styles
- It is recommended to divide the tasks into several subtasks so that you can associate each particular step of the construction with a specific commit
- You should try as much as possible that the commits and planned tasks are the same
- You must create a correctly documented README.md file in the root directory of the project (see guidelines in Resources)

## Resources

- [What can PHP do?](https://www.php.net/manual/es/intro-whatcando.php)

- [MAMP](https://www.mamp.info/en/)

- [How to install XAMPP on Windows](https://www.youtube.com/watch?v=h6DEDm7C37A)

- [What is a web server?](https://www.youtube.com/watch?v=Yt1nesKi5Ec)

- [Web server basics](https://www.youtube.com/watch?v=3VqfpVKvlxQ)
