<html>
    <head>
        <title>Thank You</title>
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

            p {
                font-size: 1.25rem;
                max-width: 500px;
                text-align: center;
                font-weight: bold;
                background-color: #74c69d;
                border-radius: 5px;
                color: #fff;
                padding: 0.5rem 1.5rem;
            }

            ul {
                font-size: 1.25rem;
                margin-top: 1.5rem;
                padding: 1.5rem;
                text-align: left;
                align-items: center;
                border: 1px solid #ccc;
                border-radius: 5px;
                max-width: 400px;
                width: 100%;
            }

            li {
                margin-bottom: 0.5rem;
                list-style: none;
                font-size: 1rem;
            }
            label {
                display: block;
                font-size: 1.1rem;
                font-weight: bold;
                margin: 1rem 0 0.5rem;
            }
        </style>
    </head>
    <body>
        <h1>Thanks for contacting us!</h1>
        <p>We have received your message.</p>
        <ul>
            <li>
                <label>Name :</label>
                {{ $data['name'] }}
            </li>
            <li>
                <label>Eamil :</label>
                {{ $data['email'] }}
            </li>
            <li>
                <label>Message :</label>
                {{ $data['message'] }}
            </li>
        </ul>
        <script>
            console.log(@json($data));
        </script>
    </body>
</html>
