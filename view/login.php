<div id="colorlib-main">
    <div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-4 text text-center">
                <div class="desc">


                    <form action="formHandlers/signIn.php" method="POST" class="form-signin">

                        <h1 class="h3 mb-3 font-weight-normal">Admin only</h1>

                        <label for="inputEmail" class="sr-only">login</label>

                        <input type="text" id="inputEmail" class="form-control" placeholder="login" name="login" required autofocus>

                        <label for="inputPassword" class="sr-only">Password</label><br>

                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required><br>

                        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="signin" value="submit">Войти</button>

                    </form>


                </div>
        </div>
    </div>