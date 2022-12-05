<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Música</title>
    <link rel="shortcut icon" href="headphones.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLES -->
    <style>
        :root{
            --principal: #24576B;
        }
        *{
            transition: background-color 300ms ease, color 300ms ease;
        }
        html, body {
            background-color: rgba(247, 248, 249, 1);
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header .logo{
            float: left;
            height: 60px;
            padding: .5rem .9rem;
        }
        header {
            background-color: var(--principal);
            padding: .4rem 0 0;
            margin-bottom: 2rem;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            list-style: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            font-size: 25px;
            border-radius: 5px;
            color: rgba(255, 255, 255, 1);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(247, 248, 249, .2);
            color: rgba(255, 255, 255);
            transition: 0.5s;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(62, 62, 62, 1);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(62, 62, 62, .6);
            color: rgba(255, 255, 255, .8);
        }
        section .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        section .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        section .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header li a {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
    <div class="menu">
        <ul>
        <li class="logo">
                <a href="Home"><img height="60" alt=""></a>
            </li>
        </ul>
    </div>
</header>
    <div class="container">