<x-app-layout>
    <div class="note-container">
        <div class="new-note-btn">
            <a class="" href="{{ route('note.create') }}">
                New Note
            </a>
        </div>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a class="note-edit-button" href="{{ route('note.show', $note) }}">View</a>
                        <a class="note-edit-button" href="{{ route('note.edit', $note) }}">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
