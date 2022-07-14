<div>
    <table>
        <thead>
            <th>#</th>
            <th>Faculty Name</th>
        </thead>
        <tbody>
            @foreach($faculties as $faculty)
            <tr>
                <td>
                    {{$faculty->id}}
                </td>
                <td>
                    {{$faculty->faculty_name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>