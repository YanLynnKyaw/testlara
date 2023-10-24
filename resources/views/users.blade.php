@foreach ($users as $user)
    <p>{{ $user->name }} - {{ $user->email }}
        <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach