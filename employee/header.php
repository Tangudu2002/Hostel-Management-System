<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" href="../images/logo.png">
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <style media="screen">
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Encode Sans Expanded",sans-serif;
    }


    .Nav{
    background:;
      height: 80px;
    margin-top: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: sticky;
    top: 0;
    z-index:10;

    }

    @media screen and (max-width: 960px) {
      .Nav{
        transition: 0.8s all ease;
      }
    }
    .NavbarContainer{
      display: flex;
    justify-content: space-between;
    height: 80px;
    z-index: 1;
    width: 100%;
    padding: 0 24px;
    max-width: 1100px;

    }
    @media screen and (max-width: 768px){
      .NavbarContainer{
        padding: 0 60px;
      }
    }

    .NavLogo{
      color:red;
    justify-self: flex-start;
    cursor: pointer;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    margin-left: 24px;
    margin-top:5px;
    font-weight: bold;
    text-decoration: none;
    
    border-top-left-radius: 45px;
    border-bottom-left-radius: 45px;
    }

    .MobileIcon{
      display: none;
    }
    @media screen and (max-width: 768px){
      .MobileIcon{
       display: block;
       position: absolute;
       top:0;
       right: 0;
       transform: translate(-100%,60%);
       font-size: 1.8rem;
       cursor: pointer;
       color: #fff;
     }

    }

    .NavMenu{
      display: flex;
    align-items: center;
    list-style:none;
    text-align:center;
    margin-right: -22px;

    }
    @media screen and (max-width: 768px){
      .NavMenu{
        display:none;
      }
    }
    .NavItem{
      height: 80px;
    }

    .NavLinks{
      color: #fff;
    display: flex;
    align-items:center;
    text-decoration: none;
    padding: 0 1rem;
    height: 100%;
    cursor: pointer;
    }
    .NavLinks.active{
        border-bottom: 3px solid #01bf71;

    }
    .NavBtn{
      display: flex;
      align-items: center;

    }

      @media screen and (max-width: 768px){
        .NavBtn{
        display: none;
    }
    }

    .NavBtnLink{
      border-radius: 50px;
      background: #01bf71;
      whitespace: nowrap;
      padding: 10px 22px;
      color: #010606;
      font-size: 16px;
      outline: none;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
      text-decoration: none;

    }

    .NavBtnLink:hover{

        transition: all 0.2s ease-in-out;
        background: #fff;
        color: #010606;

    }
   
    </style>
    <script type="text/javascript">
      function rtohome(){
window.location.href ="employeedashboard.php";

      }
      function logout(){
        window.location.href ="../index.php";

      }
    </script>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
     $regno= $_SESSION['empid'];
     ?>
  </head>
  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="..\images\Nit-logo.png" alt="assam" class="NavLogo" onclick="rtohome()">
        
        

        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
    <ul class="NavMenu ">
      <li style="color:white;padding-top:30px; margin-left:250px;" class="NavItem"><?php echo "Welcome $regno"; ?></li>
    </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="logout()" >Logout</button>
        </div>
      
      </div>
    </div>

  </body>
</html>
