<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
   
    <?php
    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $academic_year = $_POST['academic_year'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
    ?>

    <table>
        <tr>
            <th>First Name</th>
            <td><?php echo $first_name; ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo $last_name; ?></td>
        </tr>
        <tr>
            <th>User Name</th>
            <td><?php echo $user_name; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo str_repeat(".", strlen($password) - 4) . substr($password, -4); ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <th>Academic Year</th>
            <td><?php echo $academic_year; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Phone No</th>
            <td><?php echo $phone_no; ?></td>
        </tr>
    </table>

    <?php
    }
    ?>
</body>
</html>
