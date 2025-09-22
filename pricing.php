<?php
include "navbar.php";
$pricing = [
    [
        "service" => "Web Development",
        "price" => "$1500",
        "details" => "Custom website (up to 10 pages) with responsive design."
    ],
    [
        "service" => "Mobile App Development",
        "price" => "$2500",
        "details" => "Native Android or iOS app with basic features and design."
    ],
    [
        "service" => "UI/UX Design",
        "price" => "$800",
        "details" => "Complete interface design and user experience planning."
    ],
    [
        "service" => "Cloud Solutions",
        "price" => "$1200",
        "details" => "Cloud setup, deployment, and initial configuration."
    ],
    [
        "service" => "E-Commerce Development",
        "price" => "$2000",
        "details" => "Online store with payment integration and product management."
    ],
    [
        "service" => "IT Consulting",
        "price" => "$500",
        "details" => "Up to 10 hours of expert consultation and strategic planning."
    ],
    [
        "service" => "Cybersecurity Services",
        "price" => "$1000",
        "details" => "Security audit, threat prevention, and data protection setup."
    ]
];
echo "<h2>Our Pricing</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Service</th><th>Price</th><th>Details</th></tr>";

foreach ($pricing as $item) {
    echo "<tr>";
    echo "<td>" . $item['service'] . "</td>";
    echo "<td>" . $item['price'] . "</td>";
    echo "<td>" . $item['details'] . "</td>";
    echo "</tr>";
}

echo "</table>";
 include 'footer.php';

?>