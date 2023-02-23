@include('common.html-start')

<h4>Register new movie</h4>

@if (is_null($movie->id))
    <form action="{{ route('movies.insert') }}" method="post">
    @else
        <a href="{{ route('movies.detail', 'id=' . $movie->id) }}">Would you like to rate the movie?</a><br><br>
        <form action="{{ route('movies.update', $movie->id) }}" method="post">


            @method('PUT')
@endif


@csrf

Name of Movie: <input type="text" name="name" value="{{ old('name', $movie->name) }}">
Year: <input type="text" name="year" value="{{ old('year', $movie->year) }}">
<button type="submit">Submit</button>

</form>

@if (is_null($movie->id))
@else
    <form action="{{ route('movies.delete', $movie->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endif


@include('common.html-end')
