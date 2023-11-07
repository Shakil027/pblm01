<?php
include "dbcont.php";
session_start();

if (isset($_POST['reg'])){
    $user = $_POST['f_user'];
	$name = $_POST['f_name'];
	$phn = $_POST['f_phn'];
	$add = $_POST['f_add'];
	$gen = $_POST['f_gen'];
	$pro = $_POST['f_pro'];
	$bd = $_POST['f_bd'];
	$gml = $_POST['f_gml'];
    $pass = $_POST['f_pass'];
	$sql = "INSERT INTO users (username, full_name, phone, address, gender, profession, birth_date, password,email ) VALUES ('$user', '$name', '$phn', '$add', '$gen', '$pro', '$bd', '$pass', '$gml')";

    $result = $conn->query($sql);

    if ($result) {
		echo "successfully registered....";
        header('Location: index.php');
    } else {
        echo "registration failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E6E0F8;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 90%;
            max-width: 400px;
            border: 1px solid #848484;
            background-color: #848484;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #ECCEF5;
            border: none;
            padding: 10px;
            border-radius: 10px;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #A9E2F3;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <h1>Login</h1>
        <form method="POST" action="insert.php">
            <table>
                 <tr>
                    <th><label for="f_user">username</label></th>
                    <td><input type="text" placeholder="Enter username" name="f_user" required></td>
                </tr>
              
                <tr>
                    <th><label for="f_name">full_name</label></th>
                    <td><input type="text" placeholder="Enter password" name="f_name" required></td>
                </tr>
				<tr>
                    <th><label for="f_phn">phone</label></th>
                    <td><input type="text" placeholder="Enter username" name="f_phn" required></td>
                </tr>
              
                <tr>
                    <th><label for="f_add">address</label></th>
                    <td><input type="text" placeholder="Enter password" name="f_add" required></td>
                </tr>
				<tr>
                    <th><label for="f_gen">gender</label></th>
                    <td><input type="text" placeholder="Enter username" name="f_gen" required></td>
                </tr>
              
                <tr>
                    <th><label for="f_pro">profession</label></th>
                    <td><input type="text" placeholder="Enter password" name="f_pro" required></td>
                </tr>
				<tr>
                    <th><label for="f_bd">birth_dath</label></th>
                    <td><input type="date" placeholder="Enter username" name="f_bd" required></td>
                </tr>ext
              
                <tr>
                    <th><label for="f_gml">gmail</label></th>
                    <td><input type="email" placeholder="Enter password" name="f_gml" required></td>
                </tr>
				
                <tr>
                    <th><label for="f_pass">Password</label></th>
                    <td><input type="password" placeholder="Enter password" name="f_pass" required></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="reg" value="sign up">
                    </th>
                </tr>
            </table>
        </form>
    </center>



</body>
</html>
