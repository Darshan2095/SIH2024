<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Staff Management - MedLab Hospital</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <ul class="nav navbar justify-content-end">
        <span class="title">
            <h1>CareCoders</h1>
        </span>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adminloginform.php">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#departments">Departments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="docdas.php">Doctors</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="plogin.php">Sign In</a>
                <a class="dropdown-item" href="signup.php">Sign Up</a>

            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="aj dropdown-item" href="staff.php">Staff</a>
                <a class="aj dropdown-item" href="docdas.php">doctor</a>
                <a class="aj dropdown-item" href="inventory.php">Pharmacy</a>
                <a class="aj dropdown-item" href="medicinemanage.php">Medicine</a>

            </div>
        </li>

    </ul>


    <main>




        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="queue.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="queue.jpg" class="d-block w-100" alt="...">
                </div><div class="carousel-item active">
                    <img src="queue.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- booking -->

        <div class="bookbtns">
            <div class="booking text-center" style="padding: 2%;">
                <a href="wardselect.php"> <button id="book">Bed Availability</button></a>
            </div>

            <div class="booking text-center" style="padding: 2%;">
                <a href="appointment.php"> <button id="book">Book Apointment</button></a>
            </div>
        </div>


        <div class="advantages text-center">
            <span class="text-center">
                <h1>Advantages</h1>
            </span>
            <div class="ad">
                <div class="left">
                    <img class="imagefit" src="slides1.jpg" alt="">
                </div>
                <div class="right">
                    <h3> Streamlined Operations</h3>
                    Our Hospital Management System simplifies hospital operations by centralizing patient admissions,
                    bed management, and inventory control. This integration reduces administrative burdens and allows
                    hospital staff to focus more on patient care.
                    Enhanced Patient Experience

                </div>
            </div>
            <div class="ad">
                <div class="left">
                    <img class="imagefit" src="slides2.jpg" alt="">
                </div>
                <div class="right">
                    With features like online appointment scheduling and real-time bed availability, patients can easily
                    access hospital services without long wait times. This improves overall patient satisfaction and
                    ensures a more efficient healthcare experience.
                    Data-Driven Insights

                </div>
            </div>
            <div class="ad">
                <div class="left">
                    <img class="imagefit" src="slides3.jpg" alt="">
                </div>
                <div class="right">
                    Hospilite provides comprehensive reporting and analytics tools to help hospitals make informed
                    decisions. By analyzing patient data, bed usage, and inventory levels, hospitals can optimize their
                    resources and enhance service delivery.
                </div>
            </div>
        </div>
        <div class="space"></div>

        <!-- departments -->
        <div class="ext" id="departments">

            <section class="services-section">
                <div class="service-card">
                    <div class="service-content">
                        <h3>Bed Availability</h3>
                        <p>Check for Available Beds in particular section</p>
                        <a href="bedbook.php"><button class="service-button">Check Now</button></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-content">
                        <h3>inventory and Medicine</h3>
                        <p>Show status of Medicine and Consumable</p>
                        <a href="inventory.php"></a><button class="service-button">Check Status</button></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-content">
                        <h3>Staff Section</h3>
                        <p>Registration and Detials about staff</p>
                        <a href="staff.php"><button class="service-button">Click Here</button></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-content">
                        <h3>Book Health Packages</h3>

                        <ul>
                            <li>Relevant lab tests & imaging/radiology scans</li>
                            <li>Expert doctor consultations</li>
                            <li>AI-powered predictive health risk scores</li>
                            <li>Guided path to wellness</li>
                        </ul>
                        <a href="appointment.php"><button class="service-button">Book Now</button></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-content">
                        <h3>Book An Appointment</h3>
                        <p>Schedule your Appointment with our Doctors</p>
                        <a href="appointment.php"><button class="service-button">Proceed to Book Appointment</button></a>
                    </div>
                </div>



                <div class="service-card">
                    <div class="service-content">
                        <h3>COVID-19 Information</h3>
                        <p>Everything You Need To Know About COVID-19: Symptoms, Diagnosis, Treatment & Vaccination
                            Centers</p>
                        <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1"><button
                                class="service-button">Learn More</button></a>
                    </div>
                </div>
            </section>
        </div>

        <div class="space"></div>
        <!-- //doctors  -->





    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p>Email: <a href="mailto:info@hospital.com">carecodes@hospital.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
            </div>

            <div class="footer-section info">
                <h4>More Information</h4>
                <p>Address: 123 Hospital Street, Chandkheda,Ahemdabad,India</p>
                <p><a href="/about-us">About Us</a></p>
                <p><a href="/privacy-policy">Privacy Policy</a></p>
            </div>

            <div class="footer-section social">
                <h4>Follow Us</h4>
                <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Hospital Name. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>