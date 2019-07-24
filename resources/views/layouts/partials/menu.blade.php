<!-- Sidebar scroll-->
<div class="scroll-sidebar">
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav">
         <ul id="sidebarnav">
             
             @if (Session::get('loginrole')== 'PK')
             <li><a href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
             <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.new_claim')</span></a>
                 <ul aria-expanded="false" class="collapse">
                        <li><a href="/noticetype">@lang('navbar.new_claim')</a></li>
 
                      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.upload_doc')</span></a>
                         <ul aria-expanded="false" class="collapse">
                             <li><a href="/searchdocument">@lang('navbar.ob_profile')</a></li>
                             <li><a href="/searchdocument">@lang('navbar.claim_info')</a></li>
                            
                         </ul>
                     </li>
                 </ul>
             </li>
 
             
             @elseif(Session::get('loginrole') == 'SCO')
             <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
             <li><a href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
             <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.new_claim')</span></a>
                 <ul aria-expanded="false" class="collapse">
                    <li><a href="/noticetype">@lang('navbar.new_claim')</a></li>
         
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.upload_doc')</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <li><a href="/searchdocument">@lang('navbar.ob_profile')</a></li>
                         <li><a href="/searchdocument">@lang('navbar.claim_info')</a></li>
         
                     </ul>
                 </li>
             </ul>
         </li>
         
         
         @elseif(Session::get('loginrole') == 'ADM')
         <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
         <li><a href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
         <li><a href="/homeAdmin"><i class="icon-home"></i>@lang('navbar.Administartive Task')</a></li> --}}
         @endif
         </ul>
         </nav>
         <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
         