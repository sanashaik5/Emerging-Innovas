<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">

    <title>Admin Panel</title>
  </head>
  <body>
    
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Emerging Innovas</a>
  <a class="nav-link" href="<?= base_url().'admin/register/index' ?>">Register</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url().'admin/login/index' ?>">Login</a>
      
    </li>
  </ul>
</nav>

    </nav>





    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>Articles </h2>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>Title  </th>
              <th>Desc</th>
              <th>Link</th>
              <th>Posted on</th>
              <th> Updated on</th>

             
            </tr>
          </thead>
          <tbody>
            <?php 
            if ($result) {
              $counter=1;
              foreach ($result as $key => $value) {
                echo "<tr>
                    <td>".$counter."</td>
                    <td>".$value['blogtitle']."</td>
                    <td>".$value['blogdesc']."</td>
                 
                    <td>".$value['blog_img']."</td>
                     <td>".$value['created_at']."</td>
                 
                     <td>".$value['updated_at']."</td>
                 
                   </tr>";

                  $counter++;
              }
          
              
            }
            else{
              echo "<tr><td colspan='6'>No Records found</td><tr>";
            }
              

             ?>

            
            
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>
