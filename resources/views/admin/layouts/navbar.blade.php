<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
   <!-- begin:: Aside -->
   <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
      <div class="kt-aside__brand-logo">
         <a href="demo1/index.html">
         <img alt="Logo" src="{{ asset('adminPanal/assets/media/logos/logo-light.png') }}" />
         </a>
      </div>
      <div class="kt-aside__brand-tools">
         <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                     <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                     <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                  </g>
               </svg>
            </span>
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                     <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
                     <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                  </g>
               </svg>
            </span>
         </button>
         <!--
            <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
            -->
      </div>
   </div>
   <!-- end:: Aside -->
   <!-- begin:: Aside Menu -->
   <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
      <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
         <ul class="kt-menu__nav ">
            <li class="kt-menu__item" aria-haspopup="true">
               <a href="{{ aurl() }}" class="kt-menu__link kt-menu__item--active">
                  <span class="kt-menu__link-icon">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                  </span>
                  <span class="kt-menu__link-text">{{ trans('admin.dashboard') }}</span>
               </a>
            </li>
            <li class="kt-menu__item" aria-haspopup="true">
               <a href="{{ aurl('settings') }}" class="kt-menu__link kt-menu__item--active">
                  <span class="kt-menu__link-icon">
                        <i class="fa fa-cogs"></i>
                  </span>
                  <span class="kt-menu__link-text">{{ trans('admin.settings') }}</span>
               </a>
            </li>
            {{-- <li class="kt-menu__section ">
               <h4 class="kt-menu__section-text">Components</h4>
               <i class="kt-menu__section-icon flaticon-more-v2"></i>
            </li> --}}
           {{-- Begin Admins --}}
           <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('admin')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                   <span class="kt-menu__link-icon">
                         <i class="nav-icon fa fa-user-secret"></i>
                   </span>
                   <span class="kt-menu__link-text">{{ trans('admin.admin') }}</span>
                   <i class="kt-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="kt-menu__submenu">
                   <span class="kt-menu__arrow"></span>
                   <ul class="kt-menu__subnav">
                      <li class="kt-menu__item {{ active_menu('admin')[1] }}" aria-haspopup="true">
                          <a href="{{ aurl('admin') }}" class="kt-menu__link ">
                             <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                             <span class="kt-menu__link-text">{{ trans('admin.admins') }}</span>
                         </a>
                     </li>
                   </ul>
                </div>
             </li>
           {{-- End Admin --}}

           {{-- Begin Users --}}
           <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('users')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                   <span class="kt-menu__link-icon">
                         <i class="nav-icon fa fa-users"></i>
                   </span>
                   <span class="kt-menu__link-text">{{ trans('admin.users') }}</span>
                   <i class="kt-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="kt-menu__submenu">
                   <span class="kt-menu__arrow"></span>
                   <ul class="kt-menu__subnav">
                      <li class="kt-menu__item {{ active_menu('users')[1] }}" aria-haspopup="true">
                          <a href="{{ aurl('users') }}" class="kt-menu__link ">
                             <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                             <span class="kt-menu__link-text">{{ trans('admin.users') }}</span>
                         </a>
                     </li>
                   </ul>
                </div>
             </li>
           {{-- End Users --}}

           {{-- Begin counteries And Cities & states --}}
           <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('countries')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-users"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.countries') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('countries')[1] }}" aria-haspopup="true">
                      <a href="{{ aurl('countries') }}" class="kt-menu__link ">
                         <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                         <span class="kt-menu__link-text">{{ trans('admin.countries') }}</span>
                     </a>
                  </li>
                  <li class="kt-menu__item {{ active_menu('cities')[1] }}" aria-haspopup="true">
                     <a href="{{ aurl('cities') }}" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                        <span class="kt-menu__link-text">{{ trans('admin.cities') }}</span>
                    </a>
                 </li>
                 <li class="kt-menu__item {{ active_menu('states')[1] }}" aria-haspopup="true">
                        <a href="{{ aurl('states') }}" class="kt-menu__link ">
                           <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                           <span class="kt-menu__link-text">{{ trans('admin.states') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Cities --}}
         {{-- <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('cities')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-users"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.cities') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('cities')[1] }}" aria-haspopup="true">
                      <a href="{{ aurl('cities') }}" class="kt-menu__link ">
                         <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                         <span class="kt-menu__link-text">{{ trans('admin.cities') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li> --}}
            {{-- states --}}
         {{-- <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('states')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-users"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.states') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('states')[1] }}" aria-haspopup="true">
                      <a href="{{ aurl('states') }}" class="kt-menu__link ">
                         <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                         <span class="kt-menu__link-text">{{ trans('admin.states') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li> --}}
       {{-- End counteries And Cities & states--}}

       {{-- Depratment --}}
       <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('departments')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-layer-group"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.departments') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('departments')[1] }}" aria-haspopup="true">
                      <a href="{{ aurl('departments') }}" class="kt-menu__link ">
                         <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                         <span class="kt-menu__link-text">{{ trans('admin.departments') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Depratment --}}

         {{-- Trademarks --}}
       <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('trademarks')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-trademark"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.trademarks') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('trademarks')[1] }}" aria-haspopup="true">
                      <a href="{{ aurl('trademarks') }}" class="kt-menu__link ">
                         <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                         <span class="kt-menu__link-text">{{ trans('admin.trademarks') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Trademarks --}}

         {{-- Manufacturers --}}
         <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('manufacturers')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
               <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <span class="kt-menu__link-icon">
                        <i class="nav-icon fa fa-industry"></i>
                  </span>
                  <span class="kt-menu__link-text">{{ trans('admin.manufacturers') }}</span>
                  <i class="kt-menu__ver-arrow la la-angle-right"></i>
               </a>
               <div class="kt-menu__submenu">
                  <span class="kt-menu__arrow"></span>
                  <ul class="kt-menu__subnav">
                     <li class="kt-menu__item {{ active_menu('manufacturers')[1] }}" aria-haspopup="true">
                        <a href="{{ aurl('manufacturers') }}" class="kt-menu__link ">
                           <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                           <span class="kt-menu__link-text">{{ trans('admin.manufacturers') }}</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
            {{-- Manufacturers --}}

            {{-- Shipping Company --}}
            <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('shipping')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
               <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <span class="kt-menu__link-icon">
                        <i class="nav-icon fa fa-truck"></i>
                  </span>
                  <span class="kt-menu__link-text">{{ trans('admin.shipping') }}</span>
                  <i class="kt-menu__ver-arrow la la-angle-right"></i>
               </a>
               <div class="kt-menu__submenu">
                  <span class="kt-menu__arrow"></span>
                  <ul class="kt-menu__subnav">
                     <li class="kt-menu__item {{ active_menu('shipping')[1] }}" aria-haspopup="true">
                        <a href="{{ aurl('shipping') }}" class="kt-menu__link ">
                           <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                           <span class="kt-menu__link-text">{{ trans('admin.shipping') }}</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
         {{-- Shipping Company --}}

         {{-- Malls --}}
         <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('malls')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-building"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.malls') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('malls')[1] }}" aria-haspopup="true">
                     <a href="{{ aurl('malls') }}" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                        <span class="kt-menu__link-text">{{ trans('admin.malls') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Malls --}}

         {{-- Colors --}}
         <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('colors')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fas fa-palette"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.colors') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('colors')[1] }}" aria-haspopup="true">
                     <a href="{{ aurl('colors') }}" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                        <span class="kt-menu__link-text">{{ trans('admin.colors') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Colors --}}

         {{-- Sizes --}}
            <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('sizes')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
               <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <span class="kt-menu__link-icon">
                        <i class="nav-icon fa fa-window-restore"></i>
                  </span>
                  <span class="kt-menu__link-text">{{ trans('admin.sizes') }}</span>
                  <i class="kt-menu__ver-arrow la la-angle-right"></i>
               </a>
               <div class="kt-menu__submenu">
                  <span class="kt-menu__arrow"></span>
                  <ul class="kt-menu__subnav">
                     <li class="kt-menu__item {{ active_menu('sizes')[1] }}" aria-haspopup="true">
                        <a href="{{ aurl('sizes') }}" class="kt-menu__link ">
                           <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                           <span class="kt-menu__link-text">{{ trans('admin.sizes') }}</span>
                        </a>
                     </li>
                     <li class="kt-menu__item {{ active_menu('weights')[1] }}" aria-haspopup="true">
                        <a href="{{ aurl('weights') }}" class="kt-menu__link ">
                           <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                           <span class="kt-menu__link-text">{{ trans('admin.weights') }}</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
         {{-- Sizes --}}

          {{-- Products --}}
          <li class="kt-menu__item  kt-menu__item--submenu {{ active_menu('products')[0] }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
               <span class="kt-menu__link-icon">
                     <i class="nav-icon fa fa-cubes"></i>
               </span>
               <span class="kt-menu__link-text">{{ trans('admin.products') }}</span>
               <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu">
               <span class="kt-menu__arrow"></span>
               <ul class="kt-menu__subnav">
                  <li class="kt-menu__item {{ active_menu('products')[1] }}" aria-haspopup="true">
                     <a href="{{ aurl('products') }}" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                        <span class="kt-menu__link-text">{{ trans('admin.products') }}</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         {{-- Products --}}
         </ul>
      </div>
   </div>
   <!-- end:: Aside Menu -->
</div>
<!-- end:: Aside -->