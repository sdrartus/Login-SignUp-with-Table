<?php
$title = "Registration Module"
?>

<html>

<head>
    <title>
        Registration Module
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</head>

<style>
#intro {
    background-color: #84fab0;
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

    height: 100vh;
}


.gradient-custom-3 {
    /* fallback for old browsers */
    background: #84fab0;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}

.gradient-custom-4 {
    /* fallback for old browsers */
    background: #84fab0;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>

<body>
    <div id="intro" class="bg-image shadow-2-strong">
        <section class="vh-100 bg-image"
            style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container d-flex align-items-center justify-content-center text-center h-90 text-white">
                    <div class="container w-50 m-5 p-5   bg-dark bg-opacity-25 rounded-3">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="signup.php">
                                <button type="submit" name="signup"
                                    class="btn me-md-2 btn-success btn-block btn-lg gradient-custom-4 text-body">
                                    Sign Up
                                </button></a>

                            <button type="submit" name="login"
                                class="btn me-md-2 btn-success btn-block btn-lg gradient-custom-4 text-body" disabled
                                data-bs-toggle="button" autocomplete="off">
                                Login
                            </button>
                        </div>
                        <br><br>
                        <h1><b>Welcome Back!</b></h1>
                        <br><br>
                        <form class="row g-3 " action="main.php">
                            <div class="col-12">

                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    require>
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="submit">
                                    LOG IN
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
</body>



</html>