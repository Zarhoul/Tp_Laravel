<html>
    <head>
        <title>Contact</title>
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
                font-size: 2.5rem;
                font-weight: bold;
                margin: 50px 0 20px;
                text-align: center;
            }
            form {
                max-width: 600px;
                padding: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 100%;
            }
            label {
                display: block;
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
            textarea {
                resize: vertical;
                min-height: 100px;
            }
            button[type="submit"] {
                background-color: #2d88ff;
                color: white;
                padding: 0.5rem 1rem;
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
    </body>
</html>
