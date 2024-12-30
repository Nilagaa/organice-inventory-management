<?php 
ob_start();
session_start();
include('inc/header.php');

$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
    include 'Inventory.php';
    $inventory = new Inventory();
    $login = $inventory->login($_POST['email'], $_POST['pwd']); 
    if (!empty($login)) {
        $_SESSION['userid'] = $login[0]['userid'];
        $_SESSION['name'] = $login[0]['name'];            
        header("Location:index.php");
        exit();
    } else {
        $loginError = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body, h1, h2, h3, h4, p, figure, blockquote, dl, dd {
            margin: 0;
        }

        html:focus-within {
            scroll-behavior: smooth;
        }

        body {
            min-height: 10vh;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
            font-family: 'Proxima Nova';
            background-image: url('assets/images/login.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 200px; 
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90%;
            width: 100%;
        }

        .card {
            width: 100%;
            max-width: 400px;
            border: 1px solid #FDFFE1;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.5);
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            margin-bottom: 15px;
            border-radius: 0;
            border: 2px solid darkcyan;
            padding: 5px; 
            font-size: 15px;
            text-align: center;
			background-color: #FFFFF0;
        }

        .btn-primary {
            background: darkcyan;
            border: none;
            color: #FDFFE1;
            padding: 5px 20px;
            font-size: 18px;
            border-radius: 4px;
            width: 50%;
			margin: 0 auto;
        }

        .alert {
            margin-bottom: 15px;
			margin-top: 10px;
			text-align: center;
        }

		.mb-3 label {
    		color: white; 
		}


    </style>
</head>
<body id="loginBody">
    <img src="assets/images/logo.png" alt="Logo" class="logo">
    <div class="container">
		<h1 class="text-center my-4 py-3 text-light" id="title">Inventory Management System</h1>   
        <div class="col-lg-4 col-md-5 col-sm-10 col-xs-12">
            <div class="card rounded-0 shadow">
                <div class="card-body">
                    <div class="container-fluid">
                        <form method="post" action="">
                            <div class="form-group">
                                <?php if ($loginError) { ?>
                                    <div class="alert alert-danger rounded-0 py-1"><?php echo $loginError; ?></div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="control-label">Email:</label>
                                <input name="email" id="email" type="email" class="form-control rounded-0" placeholder="Email address" autofocus="" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="control-label">Password:</label>
                                <input type="password" class="form-control rounded-0" id="password" name="pwd" placeholder="Password" required>
                            </div>  
                            <div class="d-grid">
                                <button type="submit" name="login" class="btn btn-primary rounded-0">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <?php include('inc/footer.php'); ?>
</body>
</html>
