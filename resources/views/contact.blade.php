<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #e1e5f2;
            }
            h1 {
                font-size: 4rem;
                font-weight: bold;
                margin: 50px 0 20px;
                text-align: center;
            }
            form {
                max-width: 800px;
                max-height: 400px;
                padding: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 100%;
                height: 100%;
            }
            label {
                display: block;
                font-size: 2rem;
                font-weight: bold;
                margin: 1rem 0 0.5rem;
            }
            input[type="text"],
            input[type="email"],
            textarea {
                display: block;
                width: 100%;
                padding: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            input[type="text"],
            input[type="email"],
            textarea:valid {
                border: 1px solid #003049;
                border-radius: 5px;
            }
            textarea {
                resize: vertical;
                min-height: 100px;
            }
            button[type="submit"] {
                background-color: #2d88ff;
                color: white;
                padding: 0.75rem 1.25rem;
                font-size: 1.5rem;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 1rem;
                transition: all 0.3s ease-in-out;
            }
            button[type="submit"]:hover {
                background-color: #1f69c6;
                cursor: pointer;
                transition: all 0.3s ease-in-out;
            }
            a {
                background-color: #ef233c;
                color: white;
                padding: 1rem 1.5rem;
                text-decoration: none;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 1rem;
                transition: all 0.3s ease-in-out;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                gap: 5px;
            }
            a:hover {
                background-color: #d90429;
                cursor: pointer;
                transition: all 0.3s ease-in-out;
                text-decoration: none;
                color: #fff;
            }
            i {
                font-size: 1rem;
                font-weight: bold;
            }
    </style>
        </style>
    </head>
    <body>
    <h1>Contact-Us!</h1>

    <form method="POST" action="/contact">
    @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea  name="message"></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
    <a href="{{ url('/') }}">
        <i class="glyphicon glyphicon-remove"></i>
        Return
    </a>
    </body>
</html>
