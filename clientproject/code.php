<?php
session_start();

include("connect/conn/database.php");

function flash(string $type, string $text): void
{
    $_SESSION['flash'] = [
        'type' => $type,
        'text' => $text
    ];
}
function redirect_index(): void
{
    header("Location: index.php");
    exit;
}
function redirect_login(): void
{
    header("Location: login.php");
    exit;
}
function redirect_home(): void
{
    header("Location: home.php");
    exit;
}
$action = $_POST['action'] ?? '';

if($action === ''){
    flash('err', 'No action provided.');
    redirect_index();
}
//REGISTER

if($action === 'register'){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = trim($_POST['username']?? '');
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
     $password = ($_POST['password'] ?? '');

    
    if(empty($username) ||empty($password)){
        flash('err' , 'Registration failed: username and password are required');
        redirect_index();
        exit(); 
    }
    elseif(strlen($username) < 3){
        flash('err' , 'Registration failed: username must be atleast 3 characters');
        redirect_index();
        exit();
    }   
    elseif(strlen($password) < 6){
        flash('err' , 'Registration failed: password must be atleast 6 characters');
        redirect_index();
        exit();
    } 

        $hash=password_hash($password, PASSWORD_DEFAULT);
    

        $stmt = $conn->prepare("INSERT INTO accinfo (username, pass) VALUES (?, ?)");
    if(!$stmt){
        flash('err' , 'Registration failed: database error');
        redirect_index();
        exit();

    }

    $stmt->bind_param("ss", $username, $hash);

    if($stmt->execute()) {
        flash('ok', 'Registration Successful! You can now log in');
    }else {
        flash('ok', 'Registration Failed! username may already exist');
    }
  
     $stmt->close();
    redirect_home();
    exit();
    



?>
<?php
}

?>

