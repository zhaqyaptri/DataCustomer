<?php
    if (isset($_POST['submit'])) {
        $Username = $_POST['user'];
        $Password = $_POST['pass'];

        $sql = "SELECT * FROM tbl_login where Username = '$Username' and Password ='$Password'";  
        $result = mysqli_query($koneksi, $sql);  
        $count = mysqli_num_rows($result);  
        print $sql;
        
        if($count > 0){  
            $sesi = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $sesi['Username'];
            header("Location: ?menu=home");
        } 
        else{  
            echo  '<script>
                        window.location.href = "?menu=home";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }
}
?>

<div id="form">
     <h1>Login form</h1>
     <form name="form" action="" method="POST">
       <label>Username: </label>
       <input type="text" id="user" name="user"></br> </br>
       <label>Password : </label>
       <input type="Password" id="pass" name="pass"></br> </br>
       <button id="btn" type="submit" name="submit">Login</button>
     </form>
    </div>
    <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }

            }
</script>