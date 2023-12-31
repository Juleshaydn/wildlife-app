<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Database Connection</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('animals.index') }}">Animals</a></li>
            <li><a href="{{ route('info') }}">Info</a></li>
        </ul>
    </nav>

    <?php
        if (DB::connection()->getPdo()) {
            echo "Successfully Connected to DB and DB Name is " . DB::connection()->getDatabaseName();
        }
    ?>
</body>
</html>
