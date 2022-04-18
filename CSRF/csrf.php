<?php
$token  ='';

function csrf_token()
{
   $token = bin2hex( random_bytes(32));
   $_SESSION['token'] = $token;
   return $token;
}

if (isset($_POST['token']) && empty($_POST['token']))

{
  $error .= "<div class='alert alert-danger text-center' role='alert'>CSRF token missing</div>";
}
elseif ($_POST['token'] != $_SESSION['token'])
{
  $error .= "<div class='alert alert-danger text-center' role='alert'>Incorrect csrf token</div>";

}
else
{
    if(isset($_POST['username']) && empty($_POST['username']))
    {
        $error .= "<div class='alert alert-danger text-center' role='alert'>Name is invalid, please try again.</div>";
    }
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST['username']))
        {
        $error  .= "<div class='alert alert-success text-center' role='alert'>Name is valid.</div>";
        }
    }

       if(isset($_POST['password']) && empty($_POST['password']))
       {
           $error .= "<div class='alert alert-danger text-center' role='alert'>Password is invalid, please try again.</div>";
       }
       else
       {
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST['password']))
           {
           $error  .= "<div class='alert alert-success text-center' role='alert'>'Password is valid.</div>";
           }
       }
}
