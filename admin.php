<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



<style>
   table {
          width: 80%;
          margin: 20px auto;
          border-collapse: collapse;
          text-align: center;
          border-radius: 10px;
      }
      th{
        border: 1px solid #dddddd;
          padding: 8px;
        color: white;
      } 
      td {
          border: 1px solid #dddddd;
          padding: 8px;
      }
      th {
          background-color: rgb(51, 8, 68);
      }
      tr:nth-child(even) {
          background-color: #f2f2f2;
      }
      .buy-button {
          background-color: green;
          color: white;
          padding: 8px 16px;
          border-radius: 5px;
          cursor: pointer;
      }
      h1 {
    text-align: center;
    margin-bottom: 40px;
  }
</style>


  </head>

    

  <body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html">Car Broker Insurance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="quote.html" >Get a quote</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="cars.html" role="button" aria-expanded="false" > Car Insurance </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="aboutus.html" >About Us</a>
        </li>
      </ul>
      <a href="logout.php" ><button style="background-color: forestgreen; padding: 5px; color: white; border: none;" type="button">logout from admin</button></a>  
      </form>
    </div>
  </div>
</nav>







<h1>Users</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Email ID</th>
        <th>Purchased Quotes</th>
        <th>Purchased Quotes Price</th>
        <th>Remove</th>
      </tr>
      <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "test");
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        // Retrieve registered users
        $sql = "SELECT name, price, email,covername, id FROM users";
        $result = mysqli_query($conn, $sql);
        // Display the results
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["covername"] . "</td><td>". '£'  . $row["price"] . "</td><td><a href='remove.php?id=" . $row["id"] . "'>X</a></td></tr>";
          }
        }
        
        // // Retrieve registered users
        // $sql = "SELECT name, price, email,covername, id FROM users";
        // // Display the results
        // if (mysqli_num_rows($result) > 0) {
        //   while($row = mysqli_fetch_assoc($result)) {
        //     echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["covername"] . "</td><td>". '£'  . $row["price"] . "</td><td><a href='remove.php?id=" . $row["id"] . "'>X</a></td></tr>";
        //   }
        // } 
        else {
          echo "<tr><td colspan='4'>No registered users found.</td></tr>";
        }
        // Close the connection
        mysqli_close($conn);
      ?>
    </table>
  </body>
</html>





