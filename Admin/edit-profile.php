<?php include 'header.php';?>
<div class="profilePage"></div>
<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">Edit Admin Profile /</span>
              <a href="profile.php">Back to list</a>
            </h1>
        </div>
        <div class="row gutter-xs">
            <div class="col-md-8 card panel-body" style="box-shadow: 0px 0px 14px #999;">
                <div class="col-sm-12 col-md-12">
                    <div class="demo-form-wrapper">
                        <form class="form form-horizontal">
                            <div class="form-group">
                             <div class="col-md-6">
                              <label class=" control-label">Name</label>
                              <input id="" class="form-control" type="text">
                             </div>
                             <div class="col-md-6">
                              <label class=" control-label">Mobile</label>
                              <input id="" class="form-control" type="text">
                             </div>
                            </div>
                            <div class="form-group">
                             <div class="col-md-6 add-pic">
                              <label class=" control-label">Add Images</label>
                              <div class="pic-box">
                                <div class="logoImg">
                                 <img src="img/3002121059.jpg" id="result">
                                 <input id="logo-file" type="file" class="hide">
                                 <label for="logo-file" class="btn btn-large"></label>
                                </div>
                              </div>
                             </div>
                            </div>
                            <div class="form-group">
                             <div class="col-md-6">
                              <label class=" control-label">Email ID</label>
                              <input id="" class="form-control" type="text">
                             </div>
                             <div class="col-md-6">
                              <label class=" control-label">City</label>
                              <input id="" class="form-control" type="text">
                             </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label for="about" class=" control-label">Description</label>
                                <textarea id="" class="form-control" rows="3"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class=" col-sm-8  col-md-8 ">
                                    <button class="btn btn-primary " type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<?php include 'footer.php';?>
<script type="text/javascript">
              $(document).ready(function(){
               $("#logo-file").change(function(e){
                var img = e.target.files[0];
                if(!iEdit.open(img, true, function(res){
                 $("#result").attr("src", res);      
                })){
                  alert("Whoops! That is not an image!");
                }
               });
               $(document).on("click",".add-facility .plus-btn",function() {
                $('.add-facility .facility-box').append('\
                   <div class="col-md-6">\
                    <input id="" class="form-control" type="date">\
                    <span class="del">x</span>\
                   </div>');
                  $(".add-facility .del").on('click',function(){
                    $(this).parent('.col-md-6').remove();
                  });
              });
              });
            </script>