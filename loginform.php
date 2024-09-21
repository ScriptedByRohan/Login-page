<!DOCTYPE html>
<html>
<head>
    <title>This is a login page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        table {
            background-color: #2f2f2f; /* Charcoal grey */
            color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
        }
        th {
            font-size: 24px;
            padding: 10px;
            background-color: #4f4f4f; /* Darker grey */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        td {
            padding: 10px;
            color: white;
        }
        input[type="text"], input[type="password"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #4f4f4f; /* Darker grey */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #6f6f6f; /* Lighter grey on hover */
        }
    </style>
</head>
<body>
    <center>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <th colspan="2">LOGIN</th>
                </tr>
                <tr>
                    <td><label for="uid">User ID:</label></td>
                    <td><input type="text" id="uid" name="uid"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td><input type="password" id="pass" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
