
      <nav class="navbar navbar-expand-lg navbar- menu_color_1 menu_border_bottom_color  border-bottom">
       <a class="text-white" href="#" >
        logo
      </a>
      <a class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify fa-lg text-white"></i>
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <section class=" ">
          <div class="col-md-8">
            <div class="col-md-4"> 

             <form onsubmit="submitFn(this, event);">
              <div class="search-wrapper">
                <div class="input-holder">
                  <input type="text" class="search-input" placeholder="Video Veya Arkadaş Ara" />
                  <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                </div>       
                <div class="result-container">
                  <!--ne oldugu pek belli degil-->
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-4">

          </div>
        </div>

      </section>



      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <!--Bildirim Kısmı-->
        <li class="dropdown nav-item ">
          <a class="dropdown-toggle text-white bildirim_toggle nav-link md-tooltip md-tooltip--left" data-toggle="dropdown" href="#" data-md-tooltip="Bildirimler">
            <i class="fas fa-bell fa-1x text-white"></i>       
            <span style="position: relative; bottom: 2px;" class="badge bg-red count "></span> 

          </a>
          <div  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 330px !important;" class="dropdown-menu-right dropdown-menu bildirim">
            <div class="modal-header">
             <ul class="list-inline ml-2 ">
              <li class="list-inline-item  ">
                <a href="" class="text-dark" >Arkadaşlar</a>
              </li>
              <li class="list-inline-item px-3 ">
                <a href="" class="text-dark">Videolar</a>
              </li>
              <li class="list-inline-item  ">
                <a href="" class="text-dark">Canlı Yayın</a>
              </li>
            </ul>
          </div>
          <div class="modal-body">
           <!-- /.dropdown-messages -->
         </div>

       </div>
     </li>
     <!--Profil Kısmı-->
     <li class="dropdown order-1">
      <a href="#"  data-toggle="modal" data-target="#basicExampleModal"  class=" nav-link tab2 ml-auto text-white">
        <i class="far fa-user-circle fa-lg text-white"></i>

      </a>
    </li>


  </ul>

</div>
</nav>

 