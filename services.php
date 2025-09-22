<?php
include "navbar.php";
$services = [
    [
        "name" => "Web Development",
        "description" => "Building responsive and scalable websites using modern web technologies."
    ],
    [
        "name" => "Mobile App Development",
        "description" => "Creating Android and iOS applications with intuitive user interfaces."
    ],
    [
        "name" => "UI/UX Design",
        "description" => "Designing user-friendly interfaces and experiences to enhance usability."
    ],
    [
        "name" => "Cloud Solutions",
        "description" => "Deploying and managing secure cloud infrastructure and services."
    ],
    [
        "name" => "E-Commerce Development",
        "description" => "Setting up secure online stores and payment integration."
    ],
    [
        "name" => "IT Consulting",
        "description" => "Providing expert guidance on digital transformation and tech strategies."
    ],
    [
        "name" => "Cybersecurity Services",
        "description" => "Protecting systems and data through audits, monitoring, and threat prevention."
    ]
];

foreach ($services as $service) {
    echo "<h3>" . $service['name'] . "</h3>";
    echo "<p>" . $service['description'] . "</p>";
    echo "<hr>";
}
 include 'footer.php';
?>