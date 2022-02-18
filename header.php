<!DOCTYPE html>

<?php require "db.php"; ?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous";
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- FILE I CSS -->
    <link rel="stylesheet" href="style.css">

    <title>M-Company</title>

  </head>
  <!-- NAVBAR -->
  <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
    <a class="navbar-brand" href="home.php"> <img src="photos\logo.png" style=" height: 60px;"></a>
    <a class="navbar-brand" href="home.php" style="margin-left: -30%; color: rgb(24, 113, 230);"> <bold>Company</bold></a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a class="nav-link" href="home.php">𝐇𝐨𝐦𝐞</a></li>
      <li class="nav-item"><a class="nav-link" href="#">𝐀𝐛𝐨𝐮𝐭 𝐮𝐬</a></li>
      <li class="nav-item"><a class="nav-link" href="#">𝐉𝐨𝐛𝐬</a></li>
    
      <li class="nav-item dropdown">
        
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            𝐋𝐨𝐠 𝐢𝐧 
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="log_admin.php">Administrator</a>
            </div>   
      </li> 
  </nav>

<body>