<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register player</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <style>
        *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background-color: #3ac162;
            font-family: 'Nunito', sans-serif;
            color: #384047;
        }

        form {
            max-width: 300px;
            margin: 10px auto;
            padding: 10px 20px;
            background: #f4f7f8;
            border-radius: 8px;
        }

        h1 {
            margin: 0 0 30px 0;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        input[type="datetime"],
        input[type="email"],
        input[type="number"],
        input[type="search"],
        input[type="tel"],
        input[type="time"],
        input[type="url"],
        textarea,
        select {
            background: rgba(255,255,255,0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 100%;
            background-color: #e8eeef;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
        }

        select {
            padding: 6px;
            height: 32px;
            border-radius: 2px;
        }

        button {
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #4bc970;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #3ac162;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;
        }

        fieldset {
            margin-bottom: 30px;
            border: none;
        }

        legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        label.light {
            font-weight: 300;
            display: inline;
        }

        .number {
            background-color: #5fcf80;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 100%;
        }

        @media screen and (min-width: 480px) {

            form {
                max-width: 480px;
            }

        }
    </style>
</head>
<body>

<form action="register_player" method="post">

    <h1>Register Player</h1>

    <fieldset>
        <label for="name">Name:</label>
        <input type="text"  name="name" required>

        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" required>

        <label for="birthdate">Age:</label>
        <input type="text" name="age" required>

    </fieldset>

    <fieldset>
        <label for="job">Main post:</label>
        <select name="mainpost" required>
            <optgroup label="Goalkeeper">
                <option value="1">GK</option>
            </optgroup>
            <optgroup label="Defender">
                <option value="2">SW</option>
                <option value="3">CB</option>
                <option value="4">RB</option>
                <option value="5">LB</option>
            </optgroup>
            <optgroup label="Midfielder">
                <option value="6">DM</option>
                <option value="7">CM</option>
                <option value="8">RM</option>
                <option value="9">LM</option>
                <option value="10">AM</option>
            </optgroup>
            <optgroup label="Forward">
                <option value="11">RW</option>
                <option value="12">LW</option>
                <option value="13">SS</option>
                <option value="14">CF</option>
            </optgroup>
        </select>

    </fieldset>


    <button type="submit">Register</button>
</form>

</body>
</html>