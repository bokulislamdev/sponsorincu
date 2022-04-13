<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      {{-- <div>
        <img src="{{asset($websetting->logo)}}" class="logo-icon" alt="logo icon">
      </div> --}}
      <div>
        <h4 class="logo-text">{{$websetting->homepage_title}}</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

      <li>
        <a href="#">
          <div class="parent-icon"><i class="bi bi-house-fill"></i>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>

      <li class="menu-label">Event Menagement</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
          </div>
          <div class="menu-title">Event</div>
        </a>
        <ul>
          <li> <a href=""><i class="bi bi-circle"></i>Event List</a>
          </li>
          <li> <a href="#"><i class="bi bi-circle"></i>Create Event</a>
          </li>
        </ul>
      </li>


    </ul>
    <!--end navigation-->
 </aside>
 <!--end sidebar -->

 <!--Start Back To Top Button-->
 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
 <!--End Back To Top Button-->
