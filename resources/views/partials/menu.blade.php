<style>
    #navbar ul {
        margin: 0;
        padding: 5px;
        list-style-type: none;
        text-align: center;
        background-color: whitesmoke;
    }

    #navbar ul li {
        display: inline;
    }

    #navbar ul li a {
        text-decoration: none;
        padding: .2em 1em;
        color: black;
        background-color: whitesmoke;
    }

    #navbar ul li a:hover {
        color: whitesmoke;
        background-color: black;
    }
</style>
<div id="navbar">
    <ul>
        <li><a href="{{ route('home.index') }}">home</a></li>
        <li><a href="{{ route('bug.index') }}" >Bug finder</a></li>
        <li><a href="{{ route('file.avatar.index') }}">Avatar</a></li>
        <li><a href="{{ route('meeting.room.index') }}">Meeting planner</a></li>
        <li><a href="{{ route('employee.index') }}">Employees</a></li>
    </ul>
</div>
