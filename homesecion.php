<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Services</title>
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    padding: 20px;
}

.services-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.service-card {
    background-color: #0077A8;
    color: white;
    border-radius: 10px;
    padding: 20px;
    width: calc(33% - 20px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
}

.service-card:hover {
    transform: translateY(-5px);
}

.service-content h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.service-content p {
    margin-bottom: 15px;
}

.service-content ul {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 15px;
}

.service-button {
    background-color: #fff;
    color: #0077A8;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
    margin-top: auto; /* To push the button to the bottom */
    text-align: center;
}

.service-button:hover {
    background-color: #005f85;
    color: #fff;
}

.icon {
    text-align: right;
}

.icon i {
    font-size: 1.5rem;
}

   </style>
</head>
<body>
    <section class="services-section">
        <div class="service-card">
            <div class="service-content">
                <h3>Book Appointment</h3>
                <p>Book doctor appointment online instantly with top specialists.</p>
                <button class="service-button">Book Now</button>
            </div>
        </div>

        <div class="service-card">
            <div class="service-content">
                <h3>Book Lab Test & Diagnostics</h3>
                <p>Blood Test, Thyroid, Diabetics, MRI, CT scan</p>
                <button class="service-button">Book Now</button>
            </div>
        </div>

        <div class="service-card">
            <div class="service-content">
                <h3>Book Health Packages</h3>
                <p>Apollo ProHealth is your personalized health check program.</p>
                <ul>
                    <li>Relevant lab tests & imaging/radiology scans</li>
                    <li>Expert doctor consultations</li>
                    <li>AI-powered predictive health risk scores</li>
                    <li>Guided path to wellness</li>
                </ul>
                <button class="service-button">Book Now</button>
            </div>
        </div>

        <div class="service-card">
            <div class="service-content">
                <h3>Book An Ayurveda Consultation</h3>
                <p>Root-cause disease reversal & sustained well-being</p>
                <button class="service-button">Book Now</button>
            </div>
        </div>

        <div class="service-card">
            <div class="service-content">
                <h3>Book Homecare Health Services</h3>
                <p>Elderly Care, Physiotherapy, Vaccinations, Nursing</p>
                <button class="service-button">Book Now</button>
            </div>
        </div>

        <div class="service-card">
            <div class="service-content">
                <h3>COVID-19 Information</h3>
                <p>Everything You Need To Know About COVID-19: Symptoms, Diagnosis, Treatment & Vaccination Centers</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>
    </section>
</body>
</html>