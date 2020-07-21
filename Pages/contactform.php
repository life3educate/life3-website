<?php
    if(isset($_POST['Submit'])) {
        $companyName = $_POST['companyName'];
        $name = $_POST['name'];
        $mailFrom = $_POST['emailAddress'];
        $phoneNumber = $_POST['phoneNumber'];
        $message = $_POST['message'];

        $mailTo = "lfang001@citymail.cuny.edu";
        $headers = "From: life3.io"  . "\r\n" .
        "CC: omar.duran@life3.io";
        $txt = "Compny name: ".$companyName."\nName: ".$name.
        "\nEmail address: ".$mailFrom."\nPhone#: ".$phoneNumber."\nMessage: ".$message;


        mail($mailTo, $companyName, $txt, $headers);
        header("Location: ../index.html?mailsend");
        
    }

?>