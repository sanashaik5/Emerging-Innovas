

<?php $this->load->view("adminpanel/header"); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>Edit Blog</h2>

      
      <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/editblog_post' ?>" method="post">
        
        <select class="custom-select" name="publish_unpublish">
          <option value="1" <?= ( $result[0]['status'] == "1" ? "selected" : "" ); ?>>Publish</option>
          <option value="0" <?= ( $result[0]['status'] == "0" ? "selected" : "" ); ?>>Unpublish</option>
        </select>
        <br>
<div class="form-group">
          <input type="hidden" class="form-control" name="blogid" placeholder="Title" value="<?= $result[0]['blogid'] ?>">
        </div>
      
        <div class="form-group">
          <input type="text" class="form-control" name="blogtitle" placeholder="Title" value="<?= $result[0]['blogtitle'] ?>">
        </div>

        <div class="form-group">
          <textarea class="form-control" name="desc" placeholder="Blog Desc" value="<?= $result[0]['blogdesc']?>"></textarea>
        </div>

        <div class="form-group">
          <input type="url" name="lin" placehloder="link" value="<?= $result[0]['blog_img']?>">
        </div>
        <button type="submit" class="btn btn-primary">Edit Blog</button>


      </form>

    </main>
  </div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>
<script type="text/javascript">
  <?php 
      if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted']=="yes") {
          # code...
          echo "alert('Data Inserted Successfully!');";
        }
        else{
          echo "alert('Not Inserted!');";
        }
      }
   ?>
</script>


