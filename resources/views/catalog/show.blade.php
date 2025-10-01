<x-layout>
    <h2>{{ $codes->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p> <strong>Code Type:</strong> {{ $codes->type }} </p>
        <p> <strong>Code descrption</strong></p>
        <p>{{ $codes->description}}</p>
    </div>
</x-layout>