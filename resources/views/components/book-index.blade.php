<div class="book-list">
    <h2>Book List</h2>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} by {{ $book->author }}</li>
        @endforeach
    </ul>
</div>
