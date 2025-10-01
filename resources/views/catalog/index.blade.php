<x-layout>
    <h2>Abundant become simple.</h2>
    
    {{-- @if($greeting == "hello")
     <p> If it can be simple, why not?</p>
    @endif --}}


    <ul>
    @foreach($codes as $code) 
    <li>
        <x-card href="{{ route('codes.show', $code->id)}}" :highlight="$code['name'] == 'Ms. Chelsie Olson PhD'">
            <h3>{{ $code->name }}</h3>
        </x-card>
    </li>
    @endforeach
    </ul>

    {{ $codes->links() }}
</x-layout>

{{-- THIS IS BLADE DIRECTIVES --}}
{{-- <p>{{ $code['name']}}</p>
        <a href="/catalog/{{ $code['id']}}">View full code</a> --}}

{{-- <li> THIS IS WILDCARD ROUTING
            <a href="/catalog/{{$codes[0]["id"]}}">
                {{ $codes[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="/catalog/{{$codes[1]["id"]}}">
                {{ $codes[1]["name"]}}
            </a>
        </li> --}}