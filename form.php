<!DOCTYPE html>
<html>
  <head>
    <title>Lab 6 Q3</title>
  </head>
  <body>
    <form action="readform.php" method="post">
      <hr />
      <label>Name:</label>
      <input type="text" name="nama" /><br />
      <label>Age:</label>
      <input type="value" name="umur" /><br />
      <label>Gender:</label>
      <input type="radio" id="gender1" name="jantina" value="Male" />
      <label for="html">Male</label>
      <input type="radio" id="gender2" name="jantina" value="Female" />
      <label for="css">Female</label><br />
      <input type="checkbox" id="title1" name="pangkat" value="Prof" />
      <label for="vehicle1title"> Prof</label>
      <input type="checkbox" id="title2" name="pangkat" value="Dr" />
      <label for="vehicle2"> Dr</label><br />
    <label for="hobby">Hobby:</label>
        <select id="hobi" name="hobi[]" size="4" multiple>
            <option value="reading">reading</option>
            <option value="swimming">swimming</option>
            <option value="basketball">basketball</option>
            <option value="football">football</option>
        </select><br><br>


     <label>Comments:</label>
      <textarea name="komen"></textarea>

      <input type="submit" value="SUBMIT" />
    </form>
    <hr />
  </body>
</html>
