<?php 

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result=true;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidUid($username){
    $result=true;
    if ( !preg_match("/^[a-zA-Z0-9]*$/", $username )){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result=true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat){
    $result=true;
    if ( $pwd !== $pwdRepeat ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username,$email){
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../SignIn.php?error=stmtfailed");
    exit();
   }
   mysqli_stmt_bind_param($stmt, "ss", $username,$email);//ss two strings
   mysqli_stmt_execute($stmt);//excute the statement

   $resultData = mysqli_stmt_get_result($stmt);//grab the data from db
   if ($row = mysqli_fetch_assoc($resultData)/*associated to an array with the columns name*/) {
    //if i get the data from the dataset it returns true
    return $row;//return all the data from db if this user exists
      
   }else{
    $result = false;
    return $result;
   }
   mysqli_stmt_close($stmt);
}
function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd ) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../SignIn.php?error=stmtfailed");
     exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);//security reasons

    mysqli_stmt_bind_param($stmt, "ssss", $name,$email,$username,$hashedPwd);//ss two strings
    mysqli_stmt_execute($stmt);//excute the statement
    mysqli_stmt_close($stmt);
    header("location: ../SignIn.php?error=none");
    exit();
 }
function emptyInputLogin($username,$pwd){
    $result=true;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $pwd){

  $uidExists = uidExists($conn, $username,$username)/*the user can submit either his email or his username*/ ;
  if ($uidExists === false) {
    header("location: ../SignIn.php?error=wronglogin");
    exit();
  }
  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  if ($checkPwd === false) {
    header("location: ../SignIn.php?error=wronglogin");
    exit();
  }else if($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../index.php?error=none");
    exit();

  }
}
?>