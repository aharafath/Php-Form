<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form In Php</title>
</head>

<body class="flex flex-col justify-center items-center h-[100vh] bg-gray-100">




    <div class="w-[500px] shadow p-10 bg-white rounded">
        <form method="POST" action="sign-up.php" class="flex flex-col">
            <label>
                Name
                <input type="text" placeholder="Type your name" name="name"
                    class="w-full py-2 mt-1 mb-2 px-2 border rounded">
            </label>
            <label>
                Email
                <input type="text" placeholder="Type your email" name="email"
                    class="w-full py-2 mt-1 mb-2 px-2 border rounded">
            </label>
            <label>
                Password
                <input type="password" placeholder="Type your password" name="password"
                    class="w-full py-2 mt-1 mb-2 px-2 border rounded">
            </label>
            <button
                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br  focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-3 text-center mb-2">
                Sign Up
            </button>
        </form>
    </div>
    <br>
    <div class="w-[500px] shadow p-10 bg-white rounded">
        <form method="POST" action="sign-in.php" class="flex flex-col">

            <label>
                Email
                <input type="text" placeholder="Type your email" name="email"
                    class="w-full py-2 mt-1 mb-2 px-2 border rounded">
            </label>
            <label>
                Password
                <input type="password" placeholder="Type your password" name="password"
                    class="w-full py-2 mt-1 mb-2 px-2 border rounded">
            </label>
            <button
                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-3 text-center mb-2">
                Sign In
            </button>
        </form>
    </div>
</body>

</html>