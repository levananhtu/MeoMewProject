<!-- Side-Nav-->
<aside class="main-sidebar hidden-print " >
  <section class="sidebar" id="sidebar-scroll">
    <div class="user-panel">
      <div class="f-left image"></div>
    </div>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li class="nav-level"><i class="icon-compass"></i><span>Navigation</span></li>
      <li><a class="waves-effect waves-dark" href="#"><i class="icon-home"></i><span>Trang Chủ</span></a></li>
      <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachTruyen') }}"><i class="icon-paper-plane"></i><span>Danh Sách Truyện</span></a></li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icofont icofont-sun-alt"></i><span>Truyện Mới</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 1 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 2 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 3 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 4 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 5 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachTruyen') }}"><i class="icon-arrow-right"></i><span>More... </span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icon-fire"></i><span>Truyện Nổi Bật</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 1 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 2 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 3 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 4 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('Truyen') }}"><i class="icofont icofont-island-alt"></i><span>Truyện 5 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachTruyen') }}"><i class="icon-arrow-right"></i><span>More... </span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icon-wallet"></i><span>Thể loại</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TheLoai') }}"><i class="icon-tag"></i><span>Thể Loại 1 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TheLoai') }}"><i class="icon-tag"></i><span>Thể Loại 2 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TheLoai') }}"><i class="icon-tag"></i><span>Thể Loại 3 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TheLoai') }}"><i class="icon-tag"></i><span>Thể Loại 4 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TheLoai') }}"><i class="icon-tag"></i><span>Thể Loại 5 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachTheLoai') }}"><i class="icon-arrow-right"></i><span>More... </span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icofont icofont-mustache"></i><span>Tác giả</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TacGia') }}"><i class="icofont icofont-thief-alt"></i><span>Tác Giả 1 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TacGia') }}"><i class="icofont icofont-thief-alt"></i><span>Tác Giả 2 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TacGia') }}"><i class="icofont icofont-thief-alt"></i><span>Tác Giả 3 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TacGia') }}"><i class="icofont icofont-thief-alt"></i><span>Tác Giả 4 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('TacGia') }}"><i class="icofont icofont-thief-alt"></i><span>Tác Giả 5 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachTacGia') }}"><i class="icon-arrow-right"></i><span>More... </span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icon-ghost"></i><span>Dịch giả</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DichGia') }}"><i class="icofont icofont-toy-duck"></i><span>Dịch Giả 1 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DichGia') }}"><i class="icofont icofont-toy-duck"></i><span>Dịch Giả 2 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DichGia') }}"><i class="icofont icofont-toy-duck"></i><span>Dịch Giả 3 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DichGia') }}"><i class="icofont icofont-toy-duck"></i><span>Dịch Giả 4 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DichGia') }}"><i class="icofont icofont-toy-duck"></i><span>Dịch Giả 5 </span></a></li>
          <li><a class="waves-effect waves-dark" href="{{ URL::route('DanhSachDichGia') }}"><i class="icon-arrow-right"></i><span>More... </span></a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
