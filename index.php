<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID CARD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="id_card_input_area">
        <h3 class="">Ekhane School Name hobe</h3>
        <h2 class="id_card_heading">ID CARD</h2>

        <form action="final.php" method="POST" enctype="multipart/form-data">
            <lable>Student Photo</lable><br>
            <input class="photoposition" type="file" name="photo"><br>
            <lable>Student Name</lable><br>
            <input  type="text" name="studentname"><br>
            <lable>Student Title</lable><br>
            <input  type="text" name="studenttitle"><br>
            <lable>Student ID NUMBER</lable><br>
            <input  type="text" name="studentidnumber"><br>
            <lable>Student Date Of Birth</lable><br>
            <input  type="date" name="studentdob"><br>  
            <lable>Student BLOOD GROUP</lable>
                <select name="bloodgroup" id="">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>
                <lable>Student Mobile Number</lable><br>
            <input type="number" name="studentmobilenumber"><br> 



            <input class="soratehobe" type="submit" >  

        </form>

        

    </div>

    
    
</body>
</html>