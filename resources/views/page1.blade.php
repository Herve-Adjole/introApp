@extends('main')

@section('content')
    <style>
        
        body {
            background-color: #12372A;
            color: #ADBC9F;
        }

        h2, h3 {
            color: #436850;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }
    </style>

    <h2>Welcome to the Exciting World of Laravel!</h2>
    <p>
        Laravel is a powerful PHP framework designed for building modern web applications.
        It provides a clean and elegant syntax while offering robust features for web development.
    </p>

    <h3>Key Features of Laravel:</h3>
    <ul>
        <li>Expressive and Elegant Syntax</li>
        <li>Blade Templating Engine</li>
        <li>Eloquent ORM for Database Interaction</li>
        <li>Artisan Command Line Interface</li>
        <li>Middleware for HTTP Requests</li>
        <li>Powerful Routing System</li>
    </ul>


    <p>
        Whether you're a beginner or an experienced developer, Laravel makes web development enjoyable and efficient.
        Explore the documentation, create amazing projects, and enjoy coding with Laravel!
    </p>
@endsection
