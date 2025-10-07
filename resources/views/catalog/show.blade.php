<x-layout>
    <h2>{{ $codes->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p> <strong>Code Type:</strong> {{ $codes->type }} </p>
        <p> <strong>Code descrption</strong></p>
        <p>{{ $codes->description}}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Organization Information</h3>
        <p><strong>Organization name:</strong> {{ $codes->organization->name }}</p>
        <p><strong>Location:</strong> {{ $codes->organization->location }}</p>
        <p><strong>About the Organization:</strong></p>
        <p>{{ $codes->organization->description }}</p>
    </div>

<form action="{{ route('codes.destroy', $codes->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn my-4"> Delete Code</button>
</form>

</x-layout>