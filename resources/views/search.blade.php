<!DOCTYPE html>
<html>
<head>
    <title>User Search</title>
</head>
<body>
    <h2>User Search</h2>

    <form method="GET" action="/search">
        <input type="text" name="q" placeholder="Search name">
        <button type="submit">Search</button>
    </form>

    @if(count($results) > 0)
    <ul>
        @foreach($results as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
    @else
        <p>No results found.</p>
    @endif

</body>
</html>
