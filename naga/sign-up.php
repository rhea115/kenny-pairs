<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="general.css">
    
    <title>Sign Up</title>
</head>
<style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            background-image: url("images/sign-up-bg.jpg");
            background-attachment: fixed;
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }


        .Accessories {
            text-align: center;
            padding: 5px;
            background-color:  #B68D52 ;
            color: black;
        }

        .content {
            padding: 20px;
        }

        .featured-items {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .featured-item {
            text-align: center;
            max-width: 300px;
            margin: 20px;
        }

        .featured-item img {
            max-width: 100%;
            height: auto;
           
        }
        .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
       .dropdown select{
        margin-top: 20px;
        margin-left: 30px;
        background-color: #fff;
        font-size: 15px;
      }
.container{
    height: 600px;
    width: 800px;
    display: flex;
    margin: 100px auto;
    box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.52);
    -webkit-box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.52);
    -moz-box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.52);
     background-color: rgb(245,245,220);
    border-radius:20px;
}



.center-right{
    flex: 1;
    display: flex;
    justify-content: center;
}

.right-col h1
{
    text-align: center;
    font-weight: 300;
    font-size: 28px;
    margin: 10px 0 15px;
}

.right-col form .flex 
{
    display: flex;
    column-gap: 20px;
    margin-bottom: 30px;
}

.right-col
{
    width: 100%;
    padding: 20px 40px;
}

.right-col form .flex .input-con
{
    width: 100%;
}

.right-col form .flex .input-con label, .right-col form .flex .input-con select
{
    font-weight: 300;
    font-size: 14px;
    color: rgb(55, 55, 55);
}

.right-col form .flex .input-con input, .right-col form .flex .input-con select
{
    width: 100%;
    margin-top: 2px;
    border: 1px solid rgb(183, 183, 183);
    padding: 5px 5px;
}

.center-right .right-col form .submit-con
{
    flex: 0;
}

.center-right .right-col form .submit
{
    padding: 12px 50px;
    border-radius: 30px;
    color: white;
    font-weight: 600;
    border: none;
    background: rgb(179, 144, 108);
    cursor: pointer;
    transition: 0.3s ease;
}

.center-right .right-col form .submit:hover
{
    opacity: 0.8;
}
.existing-account {
        margin-top: 15px;
        text-align: center;
    }

    .existing-account a {
        color: black;
        text-decoration: none;
       
    }

    .existing-account a:hover {
        text-decoration: underline;
    }

</style>

     
    <div class="center">
        <div class="container">
            <div class="center-right">
                <div class="right-col">
                    <h1>Sign-up</h1>
                    <form action="config.php" method="post">
                        <div class="flex">
                            <div class="input-con">
                                <div><label for="fname">First name: </label></div>
                                <input type="text" required name="fname" id="fname">
                            </div>
    
                            <div class="input-con">
                                <div><label for="lname">Last name: </label></div>
                                <input type="text" required name="lname" id="lname">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="input-con">
                                <div><label for="mname">Middle name: </label></div>
                                <input type="text" required name="mname" id="mname">
                            </div>
    
                            <div class="input-con">
                                <div><label for="gender">Gender: </label></div>
                                <select name="gender" id="gender">
                                    <option value="">Select</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="input-con">
                                <div><label for="bday">Birthdate: </label></div>
                                <input type="date" required name="bday" id="bday">
                            </div>
    
                            <div class="input-con">
                                <div><label for="email">E-mail Address: </label></div>
                                <input type="email" required name="email" id="email">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="input-con">
                                <div><label for="username">Username: </label></div>
                                <input type="text" required name="username" id="username">
                            </div>
    
                            <div class="input-con">
                                <div><label for="password">Password: </label></div>
                                <input type="password" required name="password" id="password">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="input-con">
                                <div><label for="retypepassword">Retype Password: </label></div>
                                <input type="password" required name="retypepassword" id="retypepassword">
                            </div>
    
                            <div class="input-con">
                                <div><label for="address">Address: </label></div>
                                <input type="text" required name="address" id="address">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="input-con">
                                <div><label for="contactnumber">Contact Number: </label></div>
                                <input type="text" required name="contactnumber" id="contactnumber">
                            </div>
                        </div>

                        <div class="center-right submit-con">
                            <button type="submit" class="submit"><a href="login success.php">Sign Up</button>
                        </div>
                        <div class="existing-account">
                        <p>Already have an account? <a href="sign-in.php">Sign-In</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
