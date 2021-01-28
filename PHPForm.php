<html>
<head>
<title>Welcome to PHP</title>
<style>
.form{
            border: 2px solid black;
            width: 60%;
            padding: 20px;
            margin-left:250px;
            margin-top:50px;
            border-radius:20px;
        }
        h1{
            text-align:center;
        }
        form{
            font-weight: 600;
        }
        form input{
            border: 1px solid blue;
            padding: 10px;
            border-radius: 7px;
            margin-left: 40px;
        }
        form input:first-child{
            margin-left: 45px;            
        }
        table{
            margin-top:50px;
            margin-left:250px;
            /* display:none; */
        }
        table,th,td{
            border-collapse:collapse;
            border:1px solid black;
            padding:10px;
        }
        th{
            colspan:2;
        }
</style>
</head>
<body>
<div class="form">
    <h1>Application Form</h1>
<form method="GET">
        NAME <input type="text" name="name" placeholder="Enter your Name" required><br><br>
        EMAIL <input type="email" name="mail" placeholder="Enter your Email" required><br><br>
        CONTACT <input type="text" name="contact" placeholder="Enter your Contact" required style="margin-left:15px;"><br><br>
        CITY <input type="text" name="city" placeholder="Enter your City" required style="margin-left:60px;"><br><br>
        COURSE <input type="text" name="course" placeholder="Enter your course" required style="margin-left:28px;"><br><br>
        INTEREST <input type="text" name="interest" placeholder="Enter your Interests" required style="margin-left:10px;"><br><br>
        <input type="submit" value="Submit" name="submit" id="btn" style="margin-left:150px;">
    </form>
</div>     
<?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $contact=$_GET['contact'];
    $city=$_GET['city'];
    $course=$_GET['course'];
    $interest=$_GET['interest'];
    echo "<table><tr><th >Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Interest</th></tr>
    <tr><td>$name</td><td>$email</td><td>$contact</td><td>$city</td><td>$course</td><td>$interest</td></tr></table>";
}
?>
<script>
var btn=document.getElementById('btn');
btn.addEventListener('click',function(){
if(table.style.display==="none"){
    table.style.display="block";
}
})
</script>
</body>
</html>