

<style>
input:focus {
outline: none !important;
box-shadow: 0 0 0 !important;
border: none !important;
border-right: 5px solid rgba(15, 175, 0, 0.541) !important;
border-bottom: 2px solid rgba(15, 175, 0, 0.541) !important;

outline: none;
              }
.myinp01 {
width: 100%;
outline: none;
border: none;
border-bottom: 2px solid rgb(12, 0, 119);
              }
label{
    font-size: 15px !important;
}
.closebt{
background-color: rgba(58, 0, 112, 0.918);
outline: none;
border: none;
}
.closebt:hover{
background-color: rgba(33, 0, 65, 0.918);
outline: none;
border: none;
}
.changepw{
    border: none;
    background:none;
    font-size: 12px;
    color: rgba(0, 153, 255, 0.87);
}  
.changepw:hover{
    color: rgba(0, 0, 255, 0.87);
}
.changepw:focus{
    border: none;
    background:none;
    outline: none; 
}
</style>

    

<button type="button" class="changepw" data-toggle="modal" data-target="#Modal" >Change Password</button>

<div class="modal fade" 
style="background-color: rgba(0, 0, 0, 0.699);"
id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"  style="border-radius: 10px; background-color: rgba(240, 240, 240, 0.986);">
      <div class="modal-header">
        <h5 class="modal-title "  id="ModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin-includes/admin-change-password-inc.php" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Current Password:</label>
            <input type="password" class="form-control myinp01" id="currentPassword" name="currentPassword">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">New Password:</label>
            <input type="password" class="form-control myinp01" id="newPassword" name="newPassword" required minlength="6" maxlength="20" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">Re-Enter New Password:</label>
            <input type="password" class="form-control myinp01" id="reNewPassword" name="reNewPassword" required minlength="6" maxlength="20" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closebt" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
      </div>
    </form>
    </div>
  </div>
</div>


