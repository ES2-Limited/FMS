<?php 
date_default_timezone_set("Africa/Lagos");

$time = date("Y-m-d h:i");

//********** Add user  */

if(isset($_POST['add_user'])){
    //collecting form inputs using the specified method
    $Fname  = mysqli_real_escape_string($db, trim($_POST['fname']));
    $Sname  = mysqli_real_escape_string($db, trim($_POST['lname']));
    $role = mysqli_real_escape_string($db, trim($_POST['role']));
    $tel = mysqli_real_escape_string($db, trim($_POST['phone']));
    $usern = mysqli_real_escape_string($db, trim($_POST['username']));
    $passw = mysqli_real_escape_string($db, trim($_POST['pwd']));
    $pass= md5($passw);

    //check for empty field
    if(!empty($Fname) && !empty($Sname) && !empty($role) && !empty($usern) && !empty($pass)){

        
        //check for duplicate
        $check= "SELECT COUNT(*) FROM usr WHERE first_name = '".$Fname."' && last_name = '".$Sname."' && user = '".$usern."'";

        $sql = mysqli_query($db,$check);
            
        $row = mysqli_fetch_assoc($sql);  

        if($row['COUNT(*)'] == 0) {

            //insert values 
            $query="INSERT INTO usr (first_name, last_name, role, user, passwd, entry, date_created,tel) VALUES('$Fname', '$Sname', '$role', '$usern', '$pass', '$user', '$time', '$tel')";
            
            $action= mysqli_query($db, $query);

            if($action){
                $error="<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                    DATA IS SUCCESSFULLY SUMBITED <br> 
                    </div> "; 
            }
            else{
                $error="<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                    Error in Data Entry <br>
                    Please Contact The Web Admin
                    </div>";
                }
        }
        else{
            $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                SORRY DUPLICATION IS NOT ALLOWED <br>
                </div>";
        }
    }
    else{
    
        $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            PLEASE KINDLY FILL ALL REQUIRED FIELDS
        </div>";

        }
}
//****** End of Add User  */



//********** Update User  */

    //******* Data Update  */


    $update = $_GET['update'];
     
    $result = "SELECT * FROM usr WHERE usr_id='$update'";
    $query = mysqli_query($db, $result);
    $row = mysqli_fetch_array($query);

    $first_name1 = $row['first_name'];
    $last_name1 = $row['last_name'];
    $role1= $row['role'];
    $phone1= $row['tel'];
    $username1= $row['user'];

   

    //*******End of Data Update  */

if(isset($_POST['update_user'])){

    //collecting form inputs using the specified method
    $Fname  = mysqli_real_escape_string($db, trim($_POST['fname']));
    $Sname  = mysqli_real_escape_string($db, trim($_POST['lname']));
    $role = mysqli_real_escape_string($db, trim($_POST['role']));
    $phone = mysqli_real_escape_string($db, trim($_POST['phone']));
    $usern = mysqli_real_escape_string($db, trim($_POST['username']));
    $passw = mysqli_real_escape_string($db, trim($_POST['pwd']));
    $pass= md5($passw);

    //check for empty field
    if(!empty($Fname) && !empty($Sname) && !empty($role) && !empty($usern) ){

        
        //check for duplicate
        $check= "SELECT COUNT(*) FROM usr WHERE first_name = '".$Fname."' && last_name = '".$Sname."' && user = '".$usern."' && role = '".$role."'";

        $sql = mysqli_query($db,$check);
            
        $row = mysqli_fetch_assoc($sql);  

        if($row['COUNT(*)'] == 0) {

            //insert values 
            $query="UPDATE usr SET first_name ='$Fname' , last_name = '$Sname' , role = '$role', user = '$usern', passwd = '$pass' , entry = '$user' , date_modified = '$time', tel = '$phone' WHERE usr_id = '$id'";
            
            $action= mysqli_query($db, $query);

            if($action){
                $error="<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                    DATA IS SUCCESSFULLY UPDATED <br> 
                    </div> "; 
            }
            else{
                $error="<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                    Error in Data Entry <br>
                    Please Contact The Web Admin
                    </div>";
                }
        }
        else{
            $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                SORRY NO UPDATE  IS FOUND <br>
                </div>";
        }
    }
    else{

        $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            PLEASE KINDLY FILL ALL REQUIRED FIELDS
        </div>";

        }

}
//****** End of Update User  */


//********User Profile */

//******* Data Update  */


$id = $user;

$result = "SELECT * FROM usr WHERE user='$id'";
$query = mysqli_query($db, $result);
$row = mysqli_fetch_array($query);

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$role= $row['role'];
$phone= $row['tel'];
$username= $row['user'];


if(isset($_POST['user_profile'])){
    
    //collecting form inputs using the specified method
    
    $passw = mysqli_real_escape_string($db, trim($_POST['pwd']));
    $pass= md5($passw);
    
    //insert values 
    $query="UPDATE usr SET passwd = '$pass' , entry = '$user' , date_modified = '$time'  WHERE user = '$id'";
    
    $action= mysqli_query($db, $query);
    
    if($action){
        $error="<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
        PASSWORD IS SUCCESSFULLY UPDATED <br> 
        </div> "; 
    }
    else{
        $error="<div class='alert alert-danger alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
        Error in Data Entry <br>
        Please Contact The Web Admin
        </div>";
    }
    
}


//******* Delete User  */

    //  $del = $_GET['delete'];

    // //insert values 
    //     $query="UPDATE usr SET status ='disabled', date_modified = '$time' WHERE usr_id = '$del'";
        
    //     $action= mysqli_query($db, $query);

    //     if($action){
    //         $error="<div class='alert alert-success alert-dismissable'>
    //         <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
    //             USER DELETED  SUCCESSFULLY <br> 
    //             </div> "; 
    //     }
    //     else{
    //         $error="<div class='alert alert-danger alert-dismissable'>
    //         <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
    //             Error in Data Entry <br>
    //             Please Contact The Web Admin
    //             </div>";
    //         }
       
//****** End of Delete User  */

?>