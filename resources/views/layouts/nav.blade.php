<ul class="sidebar-menu">
  <li class="header">Menus</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="{{ currentUriEquals('url/create') ? 'active' : ''}}">
    <a href="{{ URL::to('/url/create') }}"><i class="fa fa-edit"></i> <span>Short URL</span></a>
  </li>

  <li class="{{ currentUriEquals('url') ? 'active' : ''}}">
    <a href="{{ URL::to('/url') }}"><i class="fa fa-bars"></i> <span>Your URLs</span></a>
  </li>
  
  {{-- <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#">Link in level 2</a></li>
      <li><a href="#">Link in level 2</a></li>
    </ul>
  </li> --}}

</ul>