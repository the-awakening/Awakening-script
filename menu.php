    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar- menu_color_1  border-bottom">
        <button class="btn menu_color_button_1 " id="menu-toggle">
          <i class="fas fa-align-justify fa-lg text-white"></i>
        </button>

        <button class="menu_color_button_1 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify fa-lg text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <section class="py-1">
            <div class="col-md-8">
              <div class="col-md-4"> 

               <input class="search_box" type="text" name="">

             </div>
                <div class="col-md-4"></div>
            </div>
        
         </section>

         <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="dropdown order-1">
            <a href="#"  id=" dropdownMenu1" data-toggle="dropdown"   class=" nav-link tab2 ml-auto text-white">
              <i class="far fa-user-circle fa-lg text-white"></i>

              <ul class="bg-login-form dropdown-menu dropdown-menu-right mt-2 px-3 py-4"">

                <form style="position: relative; bottom: 25px; height: 150px; "  >
                  <div >
                    <input name="k_ad" type="text"  placeholder="Kullanıcı Adı" style="position: relative; left: 0px; top: 25px; height: 32px !important;" />
                  </div>
                  <div >
                    <input name="k_sifre" type="password" placeholder="Şifre" style="position: relative; left: 0px; top: 40px;  height: 32px !important;  "/>
                  </div>
                  <div >
                    <input onclick="giris();" style="position: relative; top: 55px;"  type="submit" value="Giriş yap" />

                  </div>

                  <small><a href="#modalunuttum"   class="form-group text-left login_form_text_color"   style="position: relative; top: 65px;">Şifreni mi unuttun ?</a></small>
                  &emsp;  

                  <small><a href="#modalregister"   class="form-group text-right login_form_text_color"   style="position: relative; top: 65px;">Kayıt Ol</a></small>

                </form>

              </ul>
            </li>


          </ul>
        </div>
      </nav>
    </div>
