
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_developmen</title>

    <link rel="stylesheet" href="../custom.css">
</head>
<body>

    <header>
         <h1>  College of Information and Computing Science</h1> 
         <h3>Bachelor of Science in Information System  </h3>
         <div class="container">
            <a href="../activity.html">HOME</a> |
            <a href="../pages/about.html">ABOUT</a> |
            <a href="../pages/contact.html">CONTACT</a> |
            <a href="../pages/inquiry.html">INQUIRY</a> |
            <a href="../eyy/profile.html">PROFILE</a> |
         </div>
    </header>

    <section>
       <nav class="hello">
        <ul class="navigation">
           <li><a href="../eyy/heading.html">Heading</a></li>
           <li><a href="../eyy/table.html">Tables</a></li>
           <li><a href="../eyy/html_list.html">HTML LIST</a></li>
           <li><a href="forms.html">Forms</a></li>
           <li><a href="form.post.html">Form Post</a></li>
           <li><a href="../images.html">Images</a></li>
      
        </ul>
       </nav>

        <article>
        <h3>FORM POST METHOD</h3>

        <?php
        if($_SERVER["REQUEST_METHOD" == "POST"]){
            $fullname = htmlspecialchars($_POST['name']);
            $yourage = htmlspecialchars($_POST['age']);

            echo"<h2> your name is :". $fullname."</h2>";
            echo"<h2> your age is :". $yourage."</h2>";

        }
        ?>
          
        </article>
    </section>

    <footer>
        <h2>MarSU</h2>
        <div class="menu">
            <a href="../pages/about.html">About</a> |
            <a href="">Policy</a> |
             <a href="">Term of Use</a> |
            <a href="">Privacy</a> |
            <a href="">FAQ</a> |
            <a href="login.html">Login </a> |

        </div>
        <div>
            <p> <b>Copyrigth &copy 2024. </b>MarSu Sta Cruz Campus, BSIS Student</p>
        </div>
    </footer>

    
</body>
</html>