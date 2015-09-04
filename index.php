<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Create a meeting with Adobe Connect API</title>
  </head>

  <body>
    <form action="submit.php" method="POST">
      <span>Meeting Date</span><br/>
      <input type="date" class="input-date-text" name="input-date-text" placeholder="date" value="2015-09-06"><br/><br/>
      <span>Meeting time</span><br/>
      <input type="time" class="input-time-text" name="input-time-text" placeholder="time" value="03:00"><br/><br/>
      <input type="submit" class="btn create-meeting" name="create-meeting" value="Create Meeting">
    </form>
  </body>

</html>
