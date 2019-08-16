<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Sharing</title>

    <style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

    </style>
  </head>
  <body>

    <section>
      <!--for demo wrap-->
      <h1>My PHP table</h1>
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <th>Code</th>
              <th>Company</th>
              <th>Price</th>
              <th>Change</th>
              <th>Change %</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>

            <!-- Create table-content here -->
            <?php create_table(); ?>

          </tbody>
        </table>
      </div>
    </section>

    <!-- Form to set rows -->
    <section class="form">
      <h2>Create rows</h2>
      <p>Enter a number and press 'submit' to create the entered number of rows.</p>
      <form class="getform" action="" method="get">
        <input type="number" name="createrows">
        <input type="submit" name="submit" value="submit">
      </form>
    </section>

    <?php

    function create_table() {

      $create_rows = $_GET['createrows'];

      for($i = 0; $i <= ($create_rows - 1); $i++) {
        echo "<tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY</td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
              </tr>";
      }
    } // end function
    ?>


    <!-- follow me template -->
    <div class="made-with-love">
      The table layout (html, css,js) was made with
      <i>♥</i> by
      <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
      <p>PHP was written with
      <i>♥</i> by wendy Van Craen</p>
    </div>

    <script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
$('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
  </body>
</html>
