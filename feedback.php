<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Gender = $_POST['Gender'];
$Contact_No = $_POST['Contact_No'];
$Email = $_POST['Email'];
$Fvisit = $_POST['Fvisit'];
$Satisfaction = $_POST['Satisfaction'];
$Feedback = $_POST['Feedback'];

$conn =mysqli_connect('locakhost', 'root@localhost', 'Rockit@22', 'datavisualier');
$query="INSERT INTO feedback VALUES('$Fname', '$Lname', '$Gender, '$Contact_No', '$Email', '$Fvisit', '$Satisfaction', '$Feedback')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "Thanks For Your Feedback";
}
else{
    echo "Your Feedbck Couldn't Be Saved";
}
?>