<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Account Management</span>&nbsp; &nbsp;<span class="label label-important"> 4 </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newAccount"><i class="icon-file-alt"></i><span class="hidden-tablet"> New Account</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Account</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Deposite</span></a></li>
                                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Statement</span></a></li>
							</ul>	
                            
                            
                            

<!-- New Account -->
<div class = "modal fade" id = "newAccount" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Add New Account Holder
            </h4>
         </div>
         
         <div class = "modal-body">
            <form class = "form-inline" role = "form" name="account_form" method="post" action="submit_account.php">
   
   <div class = "form-group">
      <label class = "sr-only" for = "name"></label>
      <input type = "hidden" name="id" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Name</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Father's Name</label>
      <input type = "text" name="fathersname" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mother's Name</label>
      <input type = "text" name="mothersname" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Birth Date</label>
      <input type = "text" name="birthdate" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Gender</label>
      <input type = "text" name="gender" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mobile No</label>
      <input type = "text" name="mobile" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">E-mail</label>
      <input type = "text" name="email" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">NID Number</label>
      <input type = "text" name="nid" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account Type</label>
      <input type = "text" name="accountType" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Primary Deposit</label>
      <input type = "text" name="primaryDeposite" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Address</label>
      <input type = "text" name="address" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Brunch</label>
      <input type = "text" name="brunch" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Verifier</label>
      <input type = "text" name="verifier" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Nominee</label>
      <input type = "text" name="nominee" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "inputfile">File input</label>
      <input type = "file" name="photo" id = "inputfile">
   </div>
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="" value="Submit">
   </div>
   
</form>
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->

<script>
   $(function () { $('#newAccount').modal({
      keyboard: true
   })});
</script>