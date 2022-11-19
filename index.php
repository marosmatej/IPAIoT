<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPform</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        main{
            width: min-content;
            min-width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding: 0.1vw 2vw 1vw 2vw;
        }
        form input{
            padding: .5%;
            margin: .4%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.5vw;   
        }
        
    </style>
</head>
<body>
    <main>
        <div class="form_wrap">
            <h2>Login2</h2>
            <?php
                pre_r($_POST);
            ?>
            <form action="" method="POST">
                <div>
                <label for="">Username</label>
                <input type="text" name="username" required>
                </div>
                <div>
                <label for="">First Name</label>
                <input type="text" name="firstname">
                </div>
                <div>
                <label for="">Last Name</label>
                <input type="text" name="lastname">
                </div>
                <div>
                <label for="">Email</label>
                <input type="email" name="email" required>
                </div>
                <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
                </div>
                <div>
                <label for="">Tel. number</label>
                <input type="tel" name="tel">
                </div>

                <input type="submit" value="Save">
            </form>
    
        </div>
    </main>
</body>
</html>
<?php
        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
?>