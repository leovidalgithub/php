<?php $var = 'Just do it!'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Login</title>
</head>

<body>
    <section>
        <div class="container">
            <h2><?php printf("My %drd message for you : %s", 3, $var); ?></h2>
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6" style="border-right:#666 1px solid;">
                        <h3>Login here</h3>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name" required />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password here" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Register</h3>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name" required />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password here" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>