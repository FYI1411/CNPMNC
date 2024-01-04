<head>
    <!-- Header Start -->
    <?php include 'php/head.php';?>
    <!-- Header end -->
</head>

<body>
    <!-- Nav Start -->
    <?php include 'php/nav.php'; ?>
    <!-- Nav End -->
    <?php
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $username = $_POST['user'];
            $password = $_POST['password'];
            $sql = "INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) 
            VALUES (NULL, '$username', '$password'); ";
            $result = $conn->query($sql);
            echo "user created";
        } else {
            echo "error";
        }
    ?>
    <div style="text-align:center;"> 
        <h3>Enter your account credentials</h3> 
        <form action="signUp.php" method="post"> 
            <label for="user"> 
                    Username: 
                </label> 
            <input type="text" 
                    id="user"
                    name="user" 
                    placeholder="Enter your Username" required> 

            <label for="password"> 
                    Password: 
                </label> 
            <input type="password"
                    id="password" 
                    name="password" 
                    placeholder="Enter your Password" required> 

            <div class="wrap">
                <button type="submit"> 
                    sign up
                </button> 
            </div>
        </form>
    </div>
    <!-- Footer Start -->
    <?php include 'php/footer.php';?>
    <!-- Footer End -->
</body>