
<?php
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$postcode = $_REQUEST['postcode'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$description = $_REQUEST['description'];

$sql = "INSERT INTO addresses (name, address, city, postcode, email, phone, description) VALUES ('$name', '$address', '$city', '$postcode', '$email', '$phone', '$description')";

$conn = mysqli_connect('localhost', 'karan.chawla', 'UVVV6AKH', 'karanchawla_assignment2');

if (mysqli_connect_errno()) {
    echo "Failed to connect Mysql: " . mysqli_connect_error();
}

if (mysqli_query($conn, $sql)) {
    echo "Record added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="./style-for-checkout.css">
</head>
<body>
    <img class="bg" src="./assignment image.png" alt="veg box">
    <div class="container">
        <h3>Welcome to Isha fresh</h3>
        <p>Enter your details and submit this form to confirm participation for your contribution in the trip</p>
        <p class="submitMsg">Order confirmed, Thank you!!</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name"/>
            <input type="text" name="address" id="address" placeholder="Enter your Address"/>
            <input type="text" name="city" id="city" placeholder="Enter your city"/>
            <input type="text" name="postcode" id="postcode" placeholder="Enter your postcode"/>
            <input type="email" name="email" id="email" placeholder="Enter your email"/>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number"/>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter any description"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Information</title>
    <link rel="stylesheet" href="style-for-checkout.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container_checkout">
        <i class="fa-brands fa-cc-mastercard"></i>
            <form action="process.php" method="POST"> 
                <label for="card-number">Card Number:</label><br>
                <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required><br><br>

                <label for="card-holder">Card Holder:</label><br>
                <input type="text" id="card-holder" name="card-holder" placeholder="Enter card holder\'s name" required><br><br>

                <label for="expiration">Expiration Date:</label><br>
                <input type="text" id="expiration" name="expiration" placeholder="MM/YY" required><br><br>

                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required><br><br>

               
                <button type="submit" class="button">Submit</button>
                </form>
    </div>
</body>
<script>
    function redirectToThankYou() {
        window.location.href = "thankyounote.html";
    }
</script>
</html>