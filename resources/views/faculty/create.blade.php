<div>
    <form action="POST" action="{{ route('faculty.store')}}">
        @csrf
        <input type="text" name="faculty_name">Faculty name
        <button type="submit">Submit</button>
    </form>
</div>