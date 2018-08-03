<?php
    $conn = mysqli_connect('localhost','root','',"ecommerce");
    if(!$conn){
        echo"
            <script>alert('Cannot connect to database');</script>
        ";
    }
