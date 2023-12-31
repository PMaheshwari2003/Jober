<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha384-GLhlTQ8iKu1iFY+oHAWkMP8vH6uMAeAdg6d/iX+YUb0xAwsjM2p/2Sz"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="home.css" />
    <style>
      .dropdown-menu a {
        transition: background-color 0.3s ease !important;
      }
      .dropdown-menu a:hover {
        background-color: #17bcd4; 
        color: black !important;
      }
      .nav-item a {
        transition: color 0.3s ease;
        font-weight: 500;
      }
      .nav-item a:hover {
        color: #17bcd4;
      }
    </style>
  </head>

  <body>
    <!-- Mini Bootstrap Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark d-flex justify-content-around"
      style="height: 30px; background-color: #282A2C"
    >
      <a
        class="navbar-brand align-self-center p-0 m-3"
        href="#"
        style="font-size: 16px"
        ><i
          class="fa-solid fa-phone"
          style="margin-right: 5px; color: #17bcd4"
        ></i
        >Tel No. (+91) 9413905870</a
      >
      <div id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link p-0"
              href="#"
              style="font-size: 16px; color: white"
              ><i class="fa-solid fa-lock" style="margin-right: 5px"></i
              >Login</a
            >
          </li>
        </ul>
      </div>
    </nav>


    <!-- Bootstrap Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light"
      style="height: 70px"
    >
      <div class="container-fluid d-flex justify-content-around">
        <a class="navbar-brand" href="#">
          <img
            src="../Assets/Logo/jober.com.png"
            alt=""
            class="d-inline-block align-text-top"
            style="height: 60px; width: 140px"
          />
        </a>
        <div class="" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item m-3">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item dropdown m-3">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="jobSearchDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                JOB SEARCH
              </a>
              <div class="dropdown-menu" aria-labelledby="jobSearchDropdown">
                <a class="dropdown-item" href="#">JOB BY COMPANY</a>
                <a class="dropdown-item" href="#">JOB BY FUNCTION</a>
                <a class="dropdown-item" href="#">JOB BY TITLE</a>
              </div>
            </li>
            <li class="nav-item dropdown m-3">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="popularJobsDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                POPULAR JOBS
              </a>
              <div class="dropdown-menu" aria-labelledby="popularJobsDropdown">
                <a class="dropdown-item" href="#">TECHNOLOGY JOBS</a>
                <a class="dropdown-item" href="#">IT JOBS</a>
                <a class="dropdown-item" href="#">MANAGERIAL JOBS</a>
              </div>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="#">COMPANY</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bootstrap JavaScript (optional) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>