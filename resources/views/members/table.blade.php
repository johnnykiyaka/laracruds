<div class="table-responsive">
    <table class="table" id="members-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Type</th>
        <th>Gender</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->password }}</td>
            <td>{{ $member->type }}</td>
            <td>{{ $member->gender }}</td>
                <td>
                    {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('members.show', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('members.edit', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
