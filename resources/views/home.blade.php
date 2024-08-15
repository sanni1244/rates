<x-layout>
    <div class="container mx-10">
        <h3>Hello World from mexico</h3>

        <ul>
            @foreach ($jobs as $job)
                <li><a href="/job/{{$job['id']}}">{{$job['Job Title']}} : pays {{$job['Salary']}}</a></li>
            @endforeach
        </ul>

        <x-slot:heading>
            <h2>Home Page</h2>
        </x-slot:heading>
    </div>
</x-layout>