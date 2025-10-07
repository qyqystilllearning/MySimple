<x-layout>
    <form action="{{ route('codes.store')}}" method="POST">
    @csrf
    
    <h2>Add a New code</h2>

    <!-- code Name -->
    <label for="name">Code Name:</label>
    <input 
        type="text" 
        id="name" 
        name="name" 
        value="{{ old('name') }}" 
        required
    >

    <!-- code type -->
    <label for="type">Code Type:</label>
    <input 
        type="text" 
        id="type" 
        name="type"
        value="{{ old('type') }}" 
        required
    >

        <label for="length">Length of Code's Line:</label>
    <input 
        type="number" 
        id="length" 
        name="length"
        value="{{ old('length') }}" 
        required
    >
    <!-- code desc -->
    <label for="description">Description:</label>
    <textarea
        rows="5"
        id="description" 
        name="description"
        required
    >{{old('description')}}</textarea>

    <!-- organization -->
    <label for="organization_id">Organization:</label>
    <select id="organization_id" name="organization_id" required>
        <option value="" disabled selected>Select a Organization</option>
        @foreach($organizations as $organization)
        <option value="{{ $organization->id }}" {{ $organization->id == old('organization_id') ? 'selected' : ''}}>
            {{ $organization->name }}
        </option>

        @endforeach
    </select>

    <button type="submit" class="btn mt-4">Add New Code</button>

    <!-- validation errors -->
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    </form>
</x-layout>