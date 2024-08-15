@props(['active'=> false])

<a class="hover:text-white py-2 border-b-2 border-transparent hover:border-white transition {{$active ? "text-blue-400 ": "text-red-400"}}" aria-current="page" {{$attributes}}>
{{$slot}}
</a>