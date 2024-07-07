<?php
include_once("include/connect.php");
include_once("template/links.php");
include_once("template/nav.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Using prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM registration WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $spot_mes_row = $result->fetch_assoc();
    } else {
        echo "Error: Record not found";
    }

    $stmt->close();
} else {
    echo "Error: ID parameter not set";
}

if (isset($_POST["update_message"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $Umessageid = $_POST["id"];

    // Using prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE registration SET fullname = ?, email = ?, phone = ?, address = ? WHERE id = ? LIMIT 1");
    $stmt->bind_param("ssssi", $fullname, $email, $phone, $address, $Umessageid);

    if ($stmt->execute() === TRUE) {
        header("Location: displaydata.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}
?>

<div class="contactForm">
    <h2>Update form</h2>
    <p>Fill out the contact form below or reach out to us via phone or email. We typically respond to inquiries within 24 hours.</p>
</div>

<div class="contactForm">
    <form action="update.php" method="POST" autocomplete="off" class="contact">
        <h2>Send us a message</h2>
        <div class="inputBox">
            <input type="text" name="fullname" id="fullname" required value="<?php echo htmlspecialchars($spot_mes_row['fullname']); ?>">
            <span>Full Name</span>
        </div>
        <div class="inputBox">
            <input type="text" name="email" id="email" required value="<?php echo htmlspecialchars($spot_mes_row["email"]); ?>">
            <span>Email</span>
        </div>
        <div class="inputBox">
            <input type="text" name="phone" id="phone" required value="<?php echo htmlspecialchars($spot_mes_row["phone"]); ?>">
            <span>Phone</span>
        </div>
        <div class="inputBox">
            <input type="text" name="address" id="address" required value="<?php echo htmlspecialchars($spot_mes_row["address"]); ?>">
            <span>Address</span>
        </div>
        <div class="inputBox">
            <button class="btn btn-success" type="submit" name="update_message">Update</button>
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
        </div>
    </form>
</div>
