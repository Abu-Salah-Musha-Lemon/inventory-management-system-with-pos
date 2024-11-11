<style>
  .sidebar-inner {
    max-height: 600px; /* Set the maximum height for the sidebar */
    overflow-y: auto; /* Add a vertical scrollbar if needed */
}
</style>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="#" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('profile.edit')}}"><i class="md md-face-unlock"></i>  {{ __('Profile') }}</a></li>
                        <!-- <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li> -->
                        <form method="POST" action="{{ route('logout') }}">
                              @csrf
                                <li><a href="route('logout')"
                                        onclick="event.preventDefault();
                                      this.closest('form').submit();"><i class="md md-settings-power"></i>  {{ __('Log Out') }}</a>
                                  </li>
                          </form>
                    </ul>
                </div>
                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{URL::to('dashboards')}}" class="waves-effect"><i class="ion-arrow-graph-up-right"></i><span> Dashboard </span></a>
                </li>
                <li>
                    <a href="{{route('pos')}}" class="waves-effect"><i class="ion-cash"></i><span> POS </span></a>
                </li>


                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-add-shopping-cart"></i> <span> Order </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('pendingOrder')}}">Pending Order</a></li>
                        <li ><a href="{{route('paidOrder')}}">All Order Report</a></li>
                        
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-bar-chart-o"></i> <span> Sales Report </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route('allSalesReport')}}">All Sales Report</a></li>
                        <li ><a href="{{route('todaySalesReport')}}">Today Sales Report</a></li>
                        <li ><a href="{{route('monthlySalesReport')}}">Monthly Sales Report</a></li>
                        <li ><a href="{{route('yearlySalesReport')}}">Yearly Sales Report</a></li>
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="bi bi-people"></i> <span> Employee </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route('employee.add-employee')}}">Add Employee</a></li>
                        <li><a href="{{route('employee.all-employee')}}">All Employee</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="bi bi-people"></i> <span> Customer </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route('customer.add-customer')}}">Add Customer</a></li>
                        <li><a href="{{route('customer.all-customer')}}">All Customer</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-truck"></i> <span> Supplier </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route('supplier.add-supplier')}}">Add Supplier</a></li>
                        <li><a href="{{route('supplier.all-supplier')}}">All Suppliers</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-account-balance-wallet"></i> <span> Salaries </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route('salary.add-advance-salary')}}">Add Advance Salaries</a></li>
                      
                        <li><a href="{{route('salary.all-salary')}}">All  Salaries</a></li>
                    </ul>
                </li>
                
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-folder-open"></i> <span> Categories </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('addCategories')}}">Add Categories</a></li>
                        <li class="active"><a href="{{route('allCategories')}}">All Categories</a></li>
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="bi bi-basket"></i> <span> Product </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('addProduct')}}">Add Product</a></li>
                        <li class="active"><a href="{{route('updateProductQtyView')}}">Add Products Qty</a></li>
                        <li class="active"><a href="{{route('allProduct')}}">All Products</a></li>
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-attach-money"></i> 💸<span> Expense </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('addExpense')}}">Add Expense</a></li>
                        <li ><a href="{{route('todayExpense')}}">Today Expense</a></li>
                        <li ><a href="{{route('monthlyExpense')}}">Monthly Expense</a></li>
                        <li ><a href="{{route('yearlyExpense')}}">Yearly Expense</a></li>
                        <li class="active"><a href="{{route('allExpense')}}">All Expense</a></li>
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-clock-o"></i> <span> Attendance </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('takeAttendance')}}">Take Attendance</a></li>
                        <li ><a href="{{route('allAttendance')}}">All Attendance</a></li>
                        
                      
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="bi bi-gear"></i> <span> Setting </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li ><a href="{{route('settings.index')}}"><i class="bi bi-gear"></i> Setting </a></li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>