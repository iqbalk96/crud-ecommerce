<html lang="en">
<?php $this->load->view('partials/TheHead.php'); ?>

<body>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="col-6">
        <div class="m-5">
          <img src="data:image/png;base64,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" alt="Terralogic" class="w-100">
        </div>
        <?php if ($this->session->flashdata('message')) { ?>
          <div class="alert alert-danger fade show mb-3" role="alert">
            <small class="text-muted"><?php echo $this->session->flashdata('message'); ?></small>
          </div>
        <?php } ?>
        <div class="card">
          <div class="card-body">

            <form name="form-login" action="<?php echo base_url('auth/doLogin') ?>" method="POST">
              <div class="form-group">
                <label class="form-label" for="inputUsername">Username</label>
                <input required type="text" name="username" class="form-control" id="inputUsername" placeholder="Insert Username...">
              </div>
              <div class="form-group mt-3">
                <label class="form-label" for="inputPassword">Password</label>
                <input required type="password" name="password" class="form-control" id="inputPassword" placeholder="Insert Password...">
              </div>
              <div class="mt-3">
                <button type="button" id="btn-loading" class="d-none btn btn-block btn-primary btn-lg font-weight-semibold auth-form-btn">
                  <div class="spinner-border text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </button>
                <button id="btn-submit" onclick="submitClick()" type="submit" class="btn btn-block btn-primary btn-lg font-weight-semibold auth-form-btn">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function submitClick() {
      if (document.forms['form-login'].username.value === "") {
        return false;
      } else if (document.forms['form-login'].password.value === "") {
        return false;
      } else {
        $("#btn-loading").removeClass("d-none");
        $("#btn-submit").addClass("d-none");
      }
    }
  </script>
</body>

</html>