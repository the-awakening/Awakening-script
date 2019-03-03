<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

    <div class="modal-header ">


      <div class="bg_modal_head" style="width: 50vh; height: 9vh;   position: relative; top: -25px; left: 30px;">
        <ul id="tab" class="list-inline mt-3" style="margin-left: 4vh;">
          <li class="list-inline-item aktif ">
            <button class="btn text-white bg_modal_button" style="width: 150px;"><i class="fas fa-user mr-1"></i> Giriş Yap</button>
          </li>
          <li class="list-inline-item px-4"> 
           <button class="btn text-white bg_modal_button " style="width: 150px;"> <i class="fas fa-user-plus mr-1"></i> Kayıt Ol</button>
         </li>
       </ul>
     </div>


     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>



  <!--Giriş Kısmı-->
  <div class="modal-body tab_content">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
      </div>
      <input type="mail" class="form-control" placeholder="E-Posta" aria-label="email" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
      </div>
      <input type="password" class="form-control" placeholder="Şifre" aria-label="password" aria-describedby="basic-addon1">
    </div>
  </div>

  <!--Kayıt Ol kısmı-->
  <div class="modal-body tab_content">
   <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
    </div>
    <input type="text" class="form-control" placeholder="Kullanıcı Adı" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
    </div>
    <input type="password" class="form-control" placeholder="Şifre" aria-label="password" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
    </div>
    <input type="password" class="form-control" placeholder="Şifre tekrar" aria-label="password retry" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="mail" class="form-control" placeholder="E-Posta" aria-label="email" aria-describedby="basic-addon1">
  </div>


</div>


<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>