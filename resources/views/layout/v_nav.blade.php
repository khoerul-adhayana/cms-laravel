

 	<ul class="sidebar-menu" data-widget="tree">
  
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>

        <li class="{{request()->is('/products') ? 'active' : '' }}"><a href="/products"><i class="fa fa-book"></i> <span>Product</span></a></li>
        <li class="{{request()->is('/categories') ? 'active' : '' }}"><a href="/categories"><i class="fa fa-book"></i> <span>Category</span></a></li>
        <li class="{{request()->is('/user') ? 'active' : '' }}"><a href="/user"><i class="fa fa-book"></i><span>User</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      </ul>