<?php include "link.php"; ?>
<div class="container-fluid">
    <br>
    <br>
       <div class="row" >
                  
            <div class="col-sm-3"></div>
                      <div class="col-sm-6">
                      <div class="model-body"  style="font-size:20px;border:2px solid #0d6efd;background:#f8f9fa;">
                      <h1 style="text-align:center;" class="mt-4">Send Email</h1>
                      <hr>
                      
                      <form action ="savesendmail.jsp" method="post">
                      <div class="row" style="padding:15px;">
                      <div class="col-sm-12 form-group">
                      <lable>Receiver</lable>
                      <input name="receiver"  placeholder="enter receiver email  here...." class="form-control">
                      </div>
                      
                       <div class="col-sm-12 form-group" style=" padding-top:10px">
                      <lable>Subject</lable>
                      <input type="text" name="subject"  placeholder="enter eamil subject here" class="form-control"></input>
                      </div>
                          <div class="col-sm-12 form-group"style=" padding-top:10px">
                      <lable>Mail Text</lable>
                      <textarea rows="5" cols="" name="text"  placeholder="enter notification here" class="form-control"></textarea>
                      </div>
                       <center>
                       <div class="col-sm-12 text-center" style=" padding-top:10px;padding-bottom:10px;">
                     
                      <br><button type="submit" class="form-control btn btn-primary btn-block btn-lg">Send Mail</button>
                   
                      </div>   </center>
                      </div>
                      </form>
            </div>
                      
</div>