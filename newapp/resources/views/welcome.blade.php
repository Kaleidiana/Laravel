<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style the nav bar */
        nav {
            background-color: gray;  /* Set background to gray */
            padding: 10px;
                     /* Add some padding */
        }

        /* Style the list items inside the nav bar */
        nav li {
            display: inline-block;    /* Make list items inline (horizontal) */
            margin-right: 20px;       /* Add some space between items */
            list-style-type: none;    /* Remove default list bullets */
        }

        /* Style the text within the nav bar */
        nav li a {
            text-decoration: none;    /* Remove underline from links */
            color: white;             /* Set link text color to white */
            font-weight: bold;        /* Make the text bold */
        }

        /* Change link color on hover */
        nav li a:hover {
            color: lightgray;         /* Change text color when hovering */
        }
    </style>
</head>
<body>

<h1>Welcome</h1>

<!-- Navigation bar -->
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
</nav>
<a href="/welcome">
    footer
</a> 

</body>
</html>
