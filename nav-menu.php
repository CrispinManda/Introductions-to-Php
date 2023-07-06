<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        /* Internal CSS for the navigation menu */
        .nav-menu {
            background-color: red;
            padding: 10px;
        }
        .nav-menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .nav-menu li {
            margin: 0 10px;
        }
        .nav-menu li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .nav-menu li a:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <nav class="nav-menu ">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</body>
</html>
