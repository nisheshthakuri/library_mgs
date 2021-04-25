<html>
<head>
<title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
<body>
        <form><div class="container">
            <h1> Leave your Comment!</h1>
  <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="faculty">Faculty</label>
    <select id="faculty" name="faculty">
      <option value="BCA">BCA</option>
      <option value="BBM">BBM</option>
      <option value="BBS">BBS</option>
      <option value="BSW">BSW</option>
      <option value="BBA">BBA</option>
    </select> <br> <br>
    <label for="subject">Comment</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
    <br>
    <input type="submit" value="Submit">
  </form>
</div>
