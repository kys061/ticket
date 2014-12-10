<div class="modal">
<div class="modal-header">
  <h3>LOGIN</h3>
</div>
<form class="form-horizontal" action="<?=site_url('/auth/authentication?returnURL='.rawurlencode($returnURL)) ?>" method="POST">
<div class="modal-body">
<div class="control-group">
  <label class="control-label" for="inputEmail">Email</label>
  <div class="controls">
    <input type="text" id="email" name="email" placeholder="email" />
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="inputPassword">Password</label>
  <div class="controls">
    <input type="password" id="password" name="password" placeholder="Password" />
  </div>
</div>

  </div>
<div class="modal-footer">
  <input type="submit" class="btn btn-primary" value="LOGIN" />
</div>
</form>
</div>
          
