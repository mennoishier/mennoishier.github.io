<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactpagina</title>
    <link rel="stylesheet" href="Styles.css">
</head>

<body>
    <header>
        <br>
        <img src="MW PNG(transparent) file.png" alt="MW Logo" width="100" height="100">
        <h1>MW</h1>
        <a href="/">Homepage</a> - <a href="overmij.html">Over Mij</a> - <a href="ervaring.html">Ervaring</a> - <a href="contact.php">Contactpagina</a>
        <hr>
    </header>

    <main> 

    <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>

</div>
    <h2>Contactpagina</h2>
    <p>Klik op de link hieronder om een e-mail te sturen.</p>
    <a href="mailto:mennoworp@hotmail.com">E-mail sturen</a><br>


    </main> 

    <footer><hr>
        <p>Bedankt voor het bezoeken van mijn website!</p>
        <a href="/">Homepage</a> - <a href="overmij.html">Over Mij</a> - <a href="ervaring.html">Ervaring</a> - <a href="contact.php">Contactpagina</a><hr>
            </footer>
        </body>
        </html>