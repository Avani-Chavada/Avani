<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/22ad683826.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome -
    <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require '../backend/_nav.php' ?>
    <section id="home">
        <div class="main">
            <img src="image/flower5.jpeg" class="clip-circle" width="100px" height="100px">
           
            <h1 class="heading1" style="color:black; font-size:30px; font-family:sens-serif; font-weight:bold;  padding-top:30px; ">"Every flower is a soul blossoming a nature"</h1>
          
            <p >Flowers are symbolic of beauty, love and tranquillity.<br>
                 They form the soul of a garden and convey the message of nature to man.
				</p>
             
        </div>
    </section>
    <section id="about">
        <h1 class="h1">About Me</h1>
        <hr color="pink">
            <div id="pic">
                <img src="image/img1.jpg" >
                <div id="intro">
                    <h2>"life is flower which the love is honey "</h2>
                    <hr>
                    <p color="balck">The flower is to be sure a major piece of human life. Their excellence, shading and engaging quality permit us to convey our message impeccably to our family and wiped out companions, the message of congrats to a recently advanced companion, compassion to the lamenting gathering and show our emotions to the next individual is. Each gathering or any event is commended with blossoms. 
                    Flowers are one of nature's most essential endowments. Blossoms are magnificent manifestations, lovely and fragrant. We have seen the blossoms and feel cheerful. There are many kinds of blossoms. Few flowers sprout toward the beginning of the day, and a few blossoms sprout at night. 
                    </p>
                    </div>
                </div>
            </div>
    </section>
        
   <section id="gallary">
    <h2 class="heading2"> Photo Gallary</h2>
<hr color="black" >

        <div class="photo">
        <img src="image/bg1.jpeg" >
        <img src="image/flower1.jpg" >
        <img src="image/flower2..jpg" >
        <img src="image/flower3.jpeg" >
        <img src="image/flower4.jpeg" >
        <img src="image/image3.jpeg" >
        <img src="image/img1.jpg" >
        <img src="image/flower.jpg">
        </div>

   </section>
  <!-- contact start -->
    <section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="contact_page.php" method="post">
            <input type="text" placeholder="name" name="name"class="box">
            <input type="email" placeholder="email" name="email" class="box">
            <input type="number" placeholder="number" name="number" class="box">
            <textarea class="box" placeholder="message" name="message"  cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-success" value="submit" >
            <input type="reset" class="btn btn-success" value="reset" >
        </form>

        <div class="image">
            <img src="image/flower2..jpg">
        </div>

    </div>
    
</section>
    Welcome - <?php echo $_SESSION['username']?>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>