<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>Profile Page</h1>
    <p>{{ $LoggedUserInfo->name }}</p>
    <p>{{ $LoggedUserInfo->email }}</p>
    <a href="add">Add</a>
    <a href="result">Result</a>
    <a href="logout">Logout</a>
</body>
</html>