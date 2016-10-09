<div class="error-page">
    <h2 class="headline text-yellow"> 404</h2>

    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

        <p>
            We could not find the page you were looking for.<br />
            <!-- Click <a href="<?= base_url(); ?>">here</a> to go back to Dashboard. -->
        </p>

        <button type="submit" name="submit" class="btn btn-warning btn-flat" onclick="window.history.go(-1);"><i class="fa fa-reply"></i> &nbsp; Go Back</button>
    </div>
    <!-- /.error-content -->
</div>
<!-- /.error-page -->
