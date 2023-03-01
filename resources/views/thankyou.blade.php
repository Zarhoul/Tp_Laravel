<html>
    <head>
        <title>Thank You</title>
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

            p {
                font-size: 2rem;
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
                max-width: 500px;
                width: 100%;
            }

            li {
                margin-bottom: 0.5rem;
                list-style: none;
                font-size: 1.75rem;
            }
            label {
                display: block;
                font-size: 2rem;
                font-weight: bold;
                margin: 1rem 0 0.5rem;
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
        <a href="{{ url('/contact') }}">
            <i class="glyphicon glyphicon-remove"></i>
            Return
        </a>
        <script>
            console.log(@json($data));
        </script>
    </body>
</html>
