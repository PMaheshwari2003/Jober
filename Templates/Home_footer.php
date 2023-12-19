<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>footer_html</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-GLhlTQ8iKu1iFY+oHAWkMP8vH6uMAeAdg6d/iX+YUb0xAwsjM2p/2Sz" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/CSS/footer_html.css">
</head>
<style>
    #social_links > a{
        background-color: #17bcd4;
    }
    #social_links > a:hover{
        background-color: black;
        transition: background-color 0.2s ease-in;
    }
    #social_links > a > i{
        color: black;
        transition: color 0.2s ease-in;
    }
    #social_links > a:hover i{
        color: grey;
        transition: color 0.2s ease-in;
    }

    #footer_content > ul > li > a{
        opacity: 0.6;
        font-size: 1.3em;
    }
    #footer_content > ul > li > a:hover{
        opacity: 1;
    }

</style>
<body>
    <footer class="bg-dark text-white">
        <div class="container-fluid py-5 w-100" style="padding: 70px 30px 20px; background-color: #282A2C;">
            <div class="d-flex justify-content-center align-items-center" id="social_links">
                    <a href="#" class="text-decoration-none rounded-circle" style="width: 3.5em; padding: 10px; margin: 10px; opacity: 0.9;">
                        <i class="fab fa-facebook" style="font-size: 2.3em; border-radius: 50%;"></i>
                    </a>
                    <a href="#" class="text-decoration-none rounded-circle" style=" width: 3.4em; padding: 10px; margin: 10px; border-radius: 50%; opacity: 0.9;">
                        <i class="fab fa-instagram" style="font-size: 2.3em;"></i>
                    </a>
                    <a href="#" class="text-decoration-none rounded-circle" style=" width: 3.5em; padding: 10px; margin: 10px; border-radius: 50%; opacity: 0.9;">
                        <i class="fab fa-twitter" style="font-size: 2.3em;"></i>
                    </a>
                    <a href="#" class="text-decoration-none rounded-circle" style=" width: 3.6em; padding: 10px; margin: 10px; border-radius: 50%; opacity: 0.9;">
                        <i class="fab fa-google-plus" style="font-size: 2.3em;"></i>
                    </a>
                    <a href="#" class="text-decoration-none rounded-circle" style=" width: 3.5em; padding: 10px; margin: 10px; border-radius: 50%; opacity: 0.9;">
                        <i class="fab fa-linkedin" style="font-size: 2.3em;"></i>
                    </a>
            </div>
            <div class="mt-5" id="footer_content">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="#" class="text-white text-decoration-none mx-3" style="transition: 0.5s; ">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none mx-3" style="transition: 0.5s; ">Company</a></li>
                    <li><a href="#" class="text-white text-decoration-none mx-3" style="transition: 0.5s; ">Jobs</a></li>
                    <li><a href="#" class="text-white text-decoration-none mx-3" style="transition: 0.5s; ">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none mx-3" style="transition: 0.5s; ">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="text-white py-4 text-center" style="background-color: #232527;">
            <p class="m-0" style = "color: white;">Copyright &copy;2024; Designed by <span class="designer" style="opacity: 0.7; text-transform: uppercase; letter-spacing: 1px; font-weight: 400; margin: 0px 5px;">Group 7</span></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
