<table>
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Address</th>
    <th>DOB</th>
    <th>IS_Active</th>
    <th>IS_Almuni</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($students as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->mobile}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->blood_group}}</td>
            <td>{{$s->perm_address}}</td>
            <td>{{$s->dob}}</td>
            <td>{{$s->is_active}}</td>
            <td>{{$s->is_almuni}}</td>
            <td>
                <a href="{{ route('student.edit',$s->id) }}" >Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>