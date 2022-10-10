<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrations</title>
</head>
<body>
<form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>

        <label for="email">
            Email: <input type="email" name="email">
        </label> <br>

        <label for="date">
            Date of birth: <input type="date" name="date">
        </label> <br>

        <label for="Gender">
            <input type="radio" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="female">
            <label for="css">Female</label>
        </label> <br>

        <label for="Country">
            Country: <input type="text" name="country">
        </label> <br>
       
        <button type="submit">Submit</button>
    </form>
</body>
</html>
