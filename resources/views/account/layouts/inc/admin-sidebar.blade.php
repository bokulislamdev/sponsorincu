<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      {{-- <div>
        <img src="{{asset($websetting->logo)}}" class="logo-icon" alt="logo icon">
      </div> --}}
      <div>
        <h4 class="logo-text">{{$websetting->title}}</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

      <li>
        <a href="{{route('admin.dashboard')}}">
          <div class="parent-icon"><i class="bi bi-house-fill"></i>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>

      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-user"></i>
          </div>
          <div class="menu-title">Users</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.user.index')}}"><i class="bi bi-circle"></i>Admin User</a>
          </li>
          <li> <a href="{{route('admin.vendor.all')}}"><i class="bi bi-circle"></i>Vendors</a>
          </li>
          <li> <a href="{{route('admin.general.user.all')}}"><i class="bi bi-circle"></i>General Users</a>
          </li>


        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-user"></i>
          </div>
          <div class="menu-title">Event</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.event.index')}}"><i class="bi bi-circle"></i>Event List</a>
          </li>
          <li> <a href="{{route('admin.event.create')}}"><i class="bi bi-circle"></i>Create Event</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-user"></i>
          </div>
          <div class="menu-title">Event Type</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.event-type.index')}}"><i class="bi bi-circle"></i>Event Type List</a>
          </li>
          <li> <a href="{{route('admin.event-type.create')}}"><i class="bi bi-circle"></i>Create Event Type</a>
          </li>
        </ul>
      </li>
      {{-- <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-user"></i>
          </div>
          <div class="menu-title">Event Topics</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.event-topic.index')}}"><i class="bi bi-circle"></i>Event Topic List</a>
          </li>
          <li> <a href="{{route('admin.event-topic.create')}}"><i class="bi bi-circle"></i>Create Event Topic</a>
          </li>
        </ul>
      </li> --}}


      {{-- <li class="menu-label">Product Menagement</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="fadeIn animated bx bx-basket"></i>
          </div>
          <div class="menu-title">Products</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.product.index')}}"><i class="bi bi-circle"></i>Product List</a>
          </li>
          <li> <a href="{{route('admin.product.create')}}"><i class="bi bi-circle"></i>Create Product</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="fadeIn animated bx bx-columns"></i>
          </div>
          <div class="menu-title">Products Categories</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.product-category.index')}}"><i class="bi bi-circle"></i>Categories List</a>
          </li>
          <li> <a href="{{route('admin.product-category.create')}}"><i class="bi bi-circle"></i>Create Categorory</a>
          </li>
        </ul>
      </li> --}}
      {{-- <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
          </div>
          <div class="menu-title">Products Color</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.product-color.index')}}"><i class="bi bi-circle"></i>Color List</a>
          </li>
          <li> <a href="{{route('admin.product-color.create')}}"><i class="bi bi-circle"></i>Create Color</a>
          </li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="fadeIn animated bx bx-cart-alt"></i>
          </div>
          <div class="menu-title">Order </div>
        </a>
        <ul>
          <li> <a href="{{route('admin.order.all')}}"><i class="bi bi-circle"></i>All </a>
          </li>
          <li><a href="{{route('admin.order.pending')}}"><i class="bi bi-circle"></i>Pending</a>
          </li>
          <li> <a href="{{route('admin.order.confirmed')}}"><i class="bi bi-circle"></i>Confirmed</a>
          </li>
          <li> <a href="{{route('admin.order.processing')}}"><i class="bi bi-circle"></i>Processing</a>
          </li>
          <li> <a href="{{route('admin.order.outofdelivery')}}"><i class="bi bi-circle"></i>Out of Delivery</a>
          </li>
          <li> <a href="{{route('admin.order.delivered')}}"><i class="bi bi-circle"></i>Delivered</a>
          </li>
          <li><a href="{{route('admin.order.returned')}}"><i class="bi bi-circle"></i>Return</a>
          </li>
          <li> <a href="{{route('admin.order.failed')}}"><i class="bi bi-circle"></i>Failed</a>
          </li>
          <li> <a href="{{route('admin.order.cancel')}}"><i class="bi bi-circle"></i>Cancel</a></li>

        </ul>
      </li> --}}



      {{-- seeting --}}
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-cog"></i>
          </div>
          <div class="menu-title">Web Seetings</div>
        </a>
        <ul>
          <li> <a href="{{route('admin.websetting.index')}}"><i class="bi bi-circle"></i>Seeting</a>
          </li>
          {{-- <li> <a href="{{route('admin.blog.index')}}"><i class="bi bi-circle"></i>Blogs</a> --}}
          {{-- <li> <a href="{{route('admin.blog-category.index')}}"><i class="bi bi-circle"></i>Blogs Category</a> --}}
          </li>
          {{-- <li> <a href="{{route('admin.slider.index')}}"><i class="bi bi-circle"></i>Sliders</a> --}}
          </li>
          <li> <a href="{{route('admin.social-media.index')}}"><i class="bi bi-circle"></i>Social Media</a>
          </li>
          <li> <a href="{{route('admin.contract.index')}}"><i class="bi bi-circle"></i>Contract</a>
          </li>
          <li> <a href="{{route('admin.subscribe.list')}}"><i class="bi bi-circle"></i>Subscribe</a>
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
