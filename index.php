<?php
require 'header.php';
header("Refresh:30");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>


    <meta charset="utf-8">
    <title>Notebook System by Tim Ziegenbalg</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">
            <div class="uk-navbar-center-left">
              <div>
                <button onclick="nbaddwindow()" class="uk-navbar-item uk-button-default uk-text-bold uk-text-large">Add Notebook</button>
                <button onclick="nbdeletewindow()" class="uk-navbar-item uk-button-default uk-text-bold uk-text-large">Delete Notebook</button>
              </div>
            </div>
            <a href="https://timystream.de" class="uk-navbar-item uk-logo"><img class="uk-border-circle" style="width:60px;" src="https://s.gravatar.com/avatar/cfe128a2b747c12a7bc719be85d20a40?s=80"></img></a>
            <div class="uk-navbar-center-right">
              <div>
                <button onclick="nbeditwindow()" class="uk-navbar-item uk-button-default uk-text-bold uk-text-large">Edit Notebooks</button>
              </div>
            </div>
        </div>
    </div>

    <!-- Notebook Table -->
    <div id="notebooktable">
      <table class="uk-table uk-table-striped uk-table-responsive uk-text-center">
        <tr class="uk-text-bold">
          <td>Notebook</td>
          <td>Betriebssystem</td>
          <td>Info</td>
        </tr>
        <?php
        $notebooks_sql = "SELECT * FROM Notebooks";
        $notebooks = mysqli_query($con, $notebooks_sql);
        while ($row = mysqli_fetch_assoc($notebooks)) {
          echo "<tr><td>". $row['Name'] ."</td><td>". $row['Betriebssystem'] ."</td><td>". $row['Info'] ."</td>";
        }
        ?>
      </table>
    </div>
  </body>
  <script>
  function nbaddwindow() {
      nbaddwindow = window.open("addnb.php", "nbaddwindow", "width=630, height=410");
    }
  function nbeditwindow() {
      nbeditwindow = window.open("editnb.php", "nbeditwindow", "width=630, height=410");
    }
  function nbdeletewindow() {
      nbdeletewindow = window.open("deletenb.php", "nbdeletewindow", "width=630, height=410");
    }
  </script>
</html>
