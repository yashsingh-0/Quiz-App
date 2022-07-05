<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
	<title>LOGIN</title>
</head>
<body class="bg-gradient-to-r from-green-500 to-blue-500">
	
    <section class="max-w-4xl p-6 mx-auto mt-60 bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">LOGIN</h2> 
        <form action="./includes/login.inc.php" method="POST">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
                    <input id="username" name="user_id"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                    <input id="password" name="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

            <div class="error">
            	<?php
            	if (isset($_GET['error'])) {
            		if ($_GET['error'] == "emptyfields" ) {
            			echo "<label class='text-red-700 dark:text-red-200'>EMPTY FIELDS</label>";
            		}
            		else if ($_GET['error'] == "wrongpassword" ) {
            			echo "<label class='text-red-700 dark:text-red-200'>Incorrect Password</label>";
            		}
            	}


            
            	?>
            </div>

            <div class="flex justify-end mt-6">
                <input type="submit" name="login" class=" px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gradient-to-r from-green-500 to-blue-500 focus:outline-none focus:bg-gray-600"></input>
            </div>
        </form>
    </section>
</body>
</html>