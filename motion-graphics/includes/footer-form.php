<div role="form">
    <form method="POST" action="webpages/bottomFormController.php"  enctype="multipart/form-data">

        
        <div class="app-input-group">
            <span><input type="text" name="username" value="" size="40" class="input" required /></span>
            <label>Name</label>
        </div>
        <div class="app-input-group">
            <span><input type="text" name="useremail" value="" size="40" class="input" required /></span>
            <label>Email</label>
        </div>
        <div class="app-input-group">
            <span><input type="text" name="userphone" value="" size="40" class="input" required /></span>
            <label>Phone</label>
        </div>
        <div class="app-input-group">
            <span>
            <textarea name="userdetail" cols="40" rows="1" class="textarea autoheight" required ></textarea>
            </span>
            <label>Project details</label>
        </div>
   
        <div class="send-wrap">
            <div class="attach">
                <span class="attach-desc">Attach file</span><br />
                <span class="wpcf7-form-control-wrap file-625"><input type="file" name="wordfile" size="40" class="wpcf7-form-control wpcf7-file input file" accept=".jpg,.jpeg,.png,.pdf" aria-invalid="false" /></span></p>
                </div>
                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit submit" /></p>
                 <script type="text/javascript">
                document.getElementById('blocation').value = window.location.href;
              </script>
              <input type="hidden" name="hiddencapcha" value="">
              <input type="hidden" id="blocation" name="blocationURL" value="" />
            </div>
            </form>
        </div>