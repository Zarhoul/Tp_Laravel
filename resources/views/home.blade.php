<html>
    <head>
        <title>My Website</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #e1e5f2;
            }
            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                margin: 50px 0 20px;
                text-align: center;
            }
            h2 {
                font-size: 1.25rem;
                font-weight: bold;
                margin: 30px 0 10px;
                text-align: center;
            }
            p {
                font-size: 1rem;
                margin: 0;
                padding: 0 20px;
                text-align: center;
            }
            a {
                background-color: #2d88ff;
                border: none;
                border-radius: 5px;
                color: #fff;
                display: block;
                font-size: 20px;
                font-weight: bold;
                margin: 40px;
                max-width: 200px;
                padding: 15px;
                text-align: center;
                text-decoration: none;
                transition: all 0.3s ease-in-out;
                width: 100%;
                }
            a:hover {
                background-color: #1f69c6;
                cursor: pointer;
                transition: all 0.3s ease-in-out;
            }
        </style>
    </head>
    <body>
            <h1>Welcome to my website</h1>
            <h2>Introduction</h2>
            <p>Description: This is my first website created using Laravel.</p>
            <a href="{{ url('/contact') }}">Contact</a>
    </body>
</html>
