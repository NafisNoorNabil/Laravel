{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('customers') }}"><i class="nav-icon la la-question"></i> Customers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('products') }}"><i class="nav-icon la la-question"></i> Products</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('invoices') }}"><i class="nav-icon la la-question"></i> Invoices</a></li>