<?php
 include('db.php');

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vn = htmlspecialchars($_POST['vn']);
    $iouv = htmlspecialchars($_POST['iouv']);
    $cwsm = htmlspecialchars($_POST['cwsm']);
    $hcwc = htmlspecialchars($_POST['hcwc']);
    $pdyu = htmlspecialchars($_POST['pdyu']);
    $hlhybrn = htmlspecialchars($_POST['hlhybrn']);
    $ohmc = htmlspecialchars($_POST['ohmc']);
    $dyapt = htmlspecialchars($_POST['dyapt']);
    $tsaa = htmlspecialchars($_POST['tsaa']);
    $yhms = htmlspecialchars($_POST['yhms']);
    $hdyo = htmlspecialchars($_POST['hdyo']);
    $hdykm = htmlspecialchars($_POST['hdykm']);
    $dyyys = htmlspecialchars($_POST['dyyys']);
    $ayake = htmlspecialchars($_POST['ayake']);
    $dyrdton = htmlspecialchars($_POST['dyrdton']);
    $dyeic = htmlspecialchars($_POST['dyeic']);
    $yrii = htmlspecialchars($_POST['yrii']);
    $dyrti = htmlspecialchars($_POST['dyrti']);
    $dyea = htmlspecialchars($_POST['dyea']);
    $wciyle = htmlspecialchars($_POST['wciyle']);
    $dyhaww = htmlspecialchars($_POST['dyhaww']);
    $cyetri = htmlspecialchars($_POST['cyetri']);
    $hmc = htmlspecialchars($_POST['hmc']);

    // You can add more fields here

    // Prepare and bind
   // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO venomValidatorForm (vn, iouv, cwsm, hcwc, pdyu, hlhybrn, ohmc, dyapt, tsaa, yhms, hdyo, hdykm, dyyys, ayake, dyrdton, dyeic, yrii, dyrti, dyea, wciyle, dyhaww, cyetri, hmc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssssssssss", $vn, $iouv, $cwsm, $hcwc, $pdyu, $hlhybrn, $ohmc, $dyapt, $tsaa, $yhms, $hdyo, $hdykm, $dyyys, $ayake, $dyrdton, $dyeic, $yrii, $dyrti, $dyea, $wciyle, $dyhaww, $cyetri, $hmc);

    // Execute SQL
    $stmt->execute();
    header("Location: ../success.html");

    $stmt->close();
}

$conn->close();


?>