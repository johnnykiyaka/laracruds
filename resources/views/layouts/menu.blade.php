<li class="{{ Request::is('doctors*') ? 'active' : '' }}">
    <a href="{{ route('doctors.index') }}"><i class="fa fa-edit"></i><span>Doctors</span></a>
</li>

<li class="{{ Request::is('members*') ? 'active' : '' }}">
    <a href="{{ route('members.index') }}"><i class="fa fa-tachometer"></i><span>Members</span></a>
</li>


<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
