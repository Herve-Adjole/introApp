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
    <h2>Contenu de la Page 2</h2>
    <H1>Im the second page</H1>
    
    <p>
        Laravel is a powerful PHP framework designed for building modern web applications.
        It provides a clean and elegant syntax while offering robust features for web development.
    </p>

    <h3>Key Features of Laravel:</h3>
    <ul>
        <li>Expressive and Elegant Syntax</li>
        <li>Blade Templating Engine</li>
       
    </ul>


    <p>
        Whether you're a beginner or an experienced developer, Laravel makes web development enjoyable and efficient.
        Explore the documentation, create amazing projects, and enjoy coding with Laravel!
    </p>

@endsection
