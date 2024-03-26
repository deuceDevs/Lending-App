<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/formStyles.css">
    <title>Lending Form</title>
</head>

<body>
    <form action="functions/formhandler.php" method="POST" id="myForm">
        <div class="title"><h1>Lending Form</h1></div>
        <div class="lenderDetails">
            <div>
                <div class="lenderNameError error"></div>
                <label for="lenderName">Lender Name</label>
                <input type="text" id="lenderName" name="lenderName" autocomplete="off">
            </div>
            <div>
                <div class="addressError error"></div>
                <label for="lenderAddress">Lender Address</label>
                <input type="text" id="lenderAddress" name="lenderAddress" autocomplete="off">
            </div>
        </div>
        <div class="contacts">
            <div>
                <div class="contactError error"></div>
                <label for="lenderContactNo">Contact Number</label>
                <input type="number" id="lenderContactNo" name="lenderContactNo" autocomplete="off">
            </div>

            <div>
                <div class="fbError error"></div>
                <label for="lenderFBAdd">Facebook Address</label>
                <input type="text" id="lenderFBAdd" name="lenderFBAdd" autocomplete="off">
            </div>
        </div>
        <div class="comakerDetails">
            <div>
                <div class="cmError error"></div>
                <label for="comakerName">Comaker Name</label>
                <input type="text" id="comakerName" name="comakerName" autocomplete="off">
            </div>
            <div>
                <div class="cmaError error"></div>
                <label for="comakerAdd">Comaker Address</label>
                <input type="text" id="comakerAdd" name="comakerAdd" autocomplete="off">
            </div>
        </div>
        <div class="buttonContainer">
            <button type="submit" name="submit" class="button">Submit</button>
            <button name="displayData" class="button">Display Data</button>
        </div>
    </form>

    <script src="./functions/error.js"></script>
</body>

</html>