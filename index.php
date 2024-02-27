<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/main.min.css">
    <title>PITI Payroll System CDP Bootstrap Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/92cde7fc6f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <!---SIDEBAR STARTS--->

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="fa-solid fa-grip-vertical"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">PITI Payroll System</a>
                </div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Employee Section</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#tools" aria-expanded="false" aria-controls="tools">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Administrator Tools</span>
                    </a>
                    <ul id="tools" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">Schedule Module</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">Payslips</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-table-cells-large"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"> 
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <span>Holidays</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-calendar"></i>
                        <span>Leave Management</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!---SIDEBAR / OFFCANVAS END--->

        <!---MAIN SCREEN STARTS--->

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="" class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control border-0 rounded" placeholder="Search...">
                        <button class="btn btn-primary border-0 rounded 0 " type="button">
                            SEARCH
                        </button>
                    </div>
                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <img src="images/gelo-1x1.jpg" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Profile</span>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Settings</span>
                                </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Members Progress
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            PHP 72,540
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Members Progress
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            PHP 72,540
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Members Progress
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            PHP 72,540
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h3 class="fw-bold fs-4 my-3">
                                Avg. Agent Earnings
                            </h3>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="highlighted">
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>PITI CDP</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="" class="text-body-secondary">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text-body-secondary">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text-body-secondary">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!---MAIN SCREEN END--->
    </div>

    <!--Scripts-->

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>