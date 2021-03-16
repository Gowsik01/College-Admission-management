<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
  
</div>
<form action="contact.php">
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://www.nea.org/sites/default/files/legacy/2020/04/new_teacher.jpeg" alt="Jane" style="width:100%">
      <div class="container" >
        <h2>J Janet</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me .</p>
        <p>Joycollege.com</p>
        <p ><button  href="/contact.php"class="button" >Contact</button></p>
      </div>
    </div>
  </div>
</form>
 <div class="column">
    <div class="card">
      <img src="https://www.edsys.in/wp-content/uploads/quality-of-good-teacher.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Manager</p>
        <p>Some text that decribes me.</p>
        
        <p>Joycollege.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</form>

<form action="contact.php">
  <div class="column">
    <div class="card">
      <img src="https://www.gannett-cdn.com/indepth-static-assets/uploads/master/3449428002/0eacae06-3f09-4c38-a4de-cc75b1f518a7-teacherpay-desktop.jpg?width=1600" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Head of staff</p>
        <p>Some text that describes me.</p>
        <p>JoyCollege.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</form>
</div>

</body>
</html>
