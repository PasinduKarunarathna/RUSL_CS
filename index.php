<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>rusl-ucs</title>
        <link rel="stylesheet" href="./main.css">
        <style>
.form_container{
    width: 290px;
    height: 450px;
    padding: 0 1rem;
    border-radius: 3px;
    border: 1px solid
    rgb(234, 234, 234);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: auto;
    position: relative;
    background: rgb(190, 179, 243);
    overflow: hidden;
    z-index: 1;}

    body{
    background-image: url(./1.jpg);
        background-image: ();
    }

.overlay{
    position: absolute;
    background-color:#ad91cf;
   
    content: '';
    height: 500px;
    width: 500px;
    border-radius: 50%;
    z-index: -1;
    top: -20%;
}
.titleDiv{
        position: relative;
        width: 100px;
        margin: 10px auto 5px;
        transform: translateY(-3rem);
        z-index: 3;

        .title{
            color: black;
            font-weight: 700;
            font-size: 2.5rem;

        }
       
    }

    .rows{
        display: grid;
        position: relative;
        gap: 1rem;
        z-index: 3;
        transform: translateY(-1rem);
        padding-bottom: 1rem;

        lable{}

    }

    input{
        width: 100%;
        background:white;
        border: none;
        outline: none;
        color: black;
        font-weight: 500;
        padding: .5rem;
        border-radius: 3px;

    }

    #submitBtn{
        width: 100%;
        background-color: black;
        color: azure;
        border-radius: 3px;
        cursor: pointer;
        color: white;

        &:hover{
            background-color:rgb(190, 179, 243) ;
            color: black;
        }
    }


    
           


        </style>
    </head>
    <body>
        <div class="form_container">
            <div class="overlay">
                <!--this not have content-->
            </div>

            <div class="titleDiv">
                <h1 class="title">Login</h1>
                <span class="subTitle">Welcome back!</span>
            </div>

            <!--formSection-->
            <form action="" method="">
                    <div class="row grid">

                        <!--username-->
                        <div class="row">
                            <label for="username">User Name</label>
                            <input type="text" id="username" name="username"
                            placeholder="Enter User Name" required>
                        </div>
                        <!--password-->
                        <div class="row">
                            <label for="Password">Password</label>
                            <input type="text" id="Password" name="Password"
                            placeholder="Enter your Password" required>
                        </div>
                        <!--submitButton-->
                        <div class="row">
                            <br>
                            
                            <input type="submit" id="submitBtn" name="Submit"
                            value="Login" required>

                            <span class="registerLink">Dont't have an account<a href="register.php">Register</a></span>
                        </div>


                    </div>

            </form>
        </div>


</body>
</html>