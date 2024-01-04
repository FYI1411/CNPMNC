<head>
    <!-- Header Start -->
    <?php include 'php/head.php';?>
    <!-- Header end -->
</head>

<body>
    <!-- Nav Start -->
    <?php include 'php/nav.php'; ?>
    <!-- Nav End -->

    <div style="text-align:center;"> 
        <h3>Enter your login credentials</h3> 
        <form action="index.php" method="post"> 
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
                    sign in
                </button> 
            </div>
        </form>
        <a href="signUp.php">Create a new account</a>
    </div>
    <!-- Footer Start -->
    <?php include 'php/footer.php';?>
    <!-- Footer End -->
</body>