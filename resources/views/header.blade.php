<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}

?>

<nav class=" navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <a class="navbar-brand" href="/">Supplycart Task</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/myorders"><span class="glyphicon glyphicon-th-list"></span> Orders</a></li>
        <li><a href="/cartList"><span class="glyphicon glyphicon-shopping-cart"></span> Cart [{{$total}}]</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon">&#xe008;</span> {{Session::get('user')['email']}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout"><span class="glyphicon">&#xe163;</span> Logout</a></li>

          </ul>
        </li>
        
        <li><a href="#"></a></li>

        @else
        <li><a href="/login">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
        <li><a href="/register">Register</a></li>
        @endif
        

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


