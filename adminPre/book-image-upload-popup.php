

  <style>
    .form-div {
      margin-top: 100px;
      border: 1px solid #e0e0e0;
    }

    #profileDisplay {
      display: block;
      height: 250px;
      width: 60%;
      margin: 0px auto;
      border-radius: 25%; }
    

    img:hover {
      display: block;
      cursor: pointer;
      background: black;
      opacity: .5;
    }

    /* styles for popup window */


    .myinp01 {
      width: 100%;
      outline: none;
      border: none;
      border-bottom: 2px solid rgb(12, 0, 119);
    }

    label {
      font-size: 15px !important;
    }

    .closebt {
      background-color: rgba(58, 0, 112, 0.918);
      outline: none;
      border: none;
    }

    .closebt:hover {
      background-color: rgba(33, 0, 65, 0.918);
      outline: none;
      border: none;
    }

    .changepw {
      border: none;
      background: none;
      font-size: 14px;
      color: rgba(0, 23, 39, 0.87);
    }

    .changepw:hover {
      color: rgba(0, 0, 255, 0.87);
    }

    .changepw:focus {
      border: none;
      background: none;
      outline: none;
    }
  </style>

  <script>
    function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }

    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>

</head>

<body>

  <button type="button" class="changepw" data-toggle="modal" data-target="#Modal">Change Profile Picture</button>

  <div class="modal fade" style="background-color: rgba(0, 0, 0, 0.699);" id="Modal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="border-radius: 10px; background-color: rgba(240, 240, 240, 0.986);">
        <div class="modal-header">
          <h5 class="modal-title " id="ModalLabel">Change Book Cover</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form action="imageUp/profile-pic-update-inc.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <div class="container">
                <div class="row">
                  <div class="col-12  ">
                    <div class="form-group text-center">

<!-- because this page is calling in profila page  .. its variables are valid here -->

 <img src="<?php echo $imageURL; ?>" alt="profile-picture" onClick="triggerClick()" id="profileDisplay"/>
                      
                      
                      <input type="file" name="file" onChange="displayImage(this)" id="profileImage"
                        class="form-control" style="display: none;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="save_profile" class="btn btn-primary">Save Image</button>
          </div>
        </form>
      </div>
    </div>
  </div>
