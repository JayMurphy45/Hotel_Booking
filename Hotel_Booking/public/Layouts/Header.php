<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link rel="stylesheet" href="css/navbar"/>
  <style>
    nav {
      background-color: black;
      height: 50px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 100%;
    }

    nav ul li a {
      text-decoration: none;
      color: grey;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">News</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">About</a></li>
    </ul>
  </nav>

<?php  require('Footer.php')?>