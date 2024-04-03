<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
   .newtenants {
    width: 400px;
    margin-left: 80px;
    border-collapse: separate; /* Separate borders */
    border-spacing: 0 10px; /* Space between rows */
  }

  .newtenants th {
    margin-top: 20px;
  }

  .newtenants button {
    border: none;
    width: 100px;
    height: 30px;
    background-color: #2f35f3;
    color: #FFFFFF;
    border-radius: 10px;
  }
  </style>
</head>
<?php
include 'db_connection.php';
$conn = openCon();
?>
<body>
  <div class="side-bar">
    <div class="title">
      <h3>Admin</h3>
    </div>
    <div class="menu">
      <div class="icon-sec">
        <i class="fa-solid fa-chart-simple"></i>
      </div>
      <div class="ame-s">
        <p>DashBoard</p>
      </div>
      <div class="option-menu">
        <i class="fa-solid fa-ellipsis-vertical"></i>
      </div>
    </div>
    
    <div class="menu">
      <div class="icon-sec">
        <i class="fa-solid fa-user-group"></i>
      </div>
      <div class="ame-s">
        <p>Tenants</p>
      </div>
      <div class="option-menu">
        <i class="fa-solid fa-ellipsis-vertical"></i>
      </div>
    </div>

    <div class="menu">
      <div class="icon-sec">
        <i class="fa-solid fa-building"></i>
      </div>
      <div class="ame-s">
        <p>Properties</p>
      </div>
      <div class="option-menu">
        <i class="fa-solid fa-ellipsis-vertical"></i>
      </div>
    </div>

    <div class="menu">
      <div class="icon-sec">
        <i class="fa-solid fa-chart-line"></i>
      </div>
      <div class="ame-s">
        <p>Earnings</p>
      </div>
      <div class="option-menu">
        <i class="fa-solid fa-ellipsis-vertical"></i>
      </div>
    </div>
  </div>
  <main>
    <section class="nav-bar">
      <nav>
        <div class="greetings">
          <h4>Hello, Madara</h4>
        </div>
        <div class="profile"></div>
      </nav>
    </section>

    <section class="data">

    <section class="stat">
      <div class="sec">
        <div class="graph">
          10
        </div>
        <div class="infor">
          <div class="info">
            Property
          </div>
        </div>
      </div>

      <div class="sec">
        <div class="graph">
          <?php
          $sql = "SELECT COUNT(name) AS count FROM tenants";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          echo $row['count'];
          ?>
        </div>
        <div class="infor">
          <div class="info">
            Tenants
          </div>
        </div>
      </div>

      <div class="sec">
        <div class="graph-m">
          50K
        </div>
        <div class="infor">
          <div class="info">
            Monthly
          </div>
        </div>
      </div>

      <div class="sec">
        <div class="graph-m">
          600K
        </div>
        <div class="infor">
          <div class="info">
            Yearly
          </div>
        </div>
      </div>
    </section>

    <section class="main-area">


      <div class="tools">
        <div class="dropdown-center">
            <button class="filter" data-bs-toggle="dropdown"> 
              <i class="fa-solid fa-filter"></i>
              Filters 
            </button>
          <ul class="dropdown-menu">
            <?php
            $sql = "SELECT "
            ?>
            <li><a class="dropdown-item" href="#">PAID</a></li>
            <li><a class="dropdown-item" href="#">UNPAID</a></li>
            <li><a class="dropdown-item" href="#">DUE</a></li>
            <li><a class="dropdown-item" href="#">PAY ALERT</a></li>
          </ul>
        </div>
        <div class="adduser-sec">
          <button class="add-user" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>
            Add User
          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">User Request</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table class="newtenants">

                      <?php
                      $sql = "SELECT * FROM newtenants";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                          echo "<tr>";
                          echo "<th>" . $row['name'] . "</th>";
                          echo "<form method=\"post\">";
                          echo "<th><button name=\"add-btn\">ADD</button></th>";
                          echo "</form>";
                          echo "</tr>";
                        }
                      }else{
                        echo "No Request Yet";
                      }
                      if(isset($_POST['add-btn'])){
                        $sql = "INSERT INTO tenants (name, phone, property_no, status) SELECT name, phone_number, property, 'NEW' AS status FROM newtenants";
                        $conn->query($sql);
                        $delSQL = "DELETE FROM newtenants";
                        $conn->query($delSQL);
                        echo "<script>window.location.href = window.location.href</script>";
                      }
                      ?> 
                      
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="searchT">
          <div class="search-group">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search">
          </div>
        </div>    
      </div>

      <div class="status-sec">
        <table>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Property No</th>
            <th>Pay Status</th>
          </tr>
          <?php
          $sql = "SELECT * FROM tenants";
          $result = $conn->query($sql);

          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              echo "<tr>";
              echo "<td><div class=\"table-profile\"></div></td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>";
              echo "<td>" . $row['property_no'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "</tr>";
            }
          }else{
            echo "<tr><td colspan='3'> No Tenants Yet </td></tr>";
          }
          ?>
          <!---- <td><span class="pay-status">PAID</span></td> --->

        </table>
      </div>
    </section>
    </section>
  </main>
  <script src="app.js"></script>
</body>
</html>