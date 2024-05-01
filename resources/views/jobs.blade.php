<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="text-blue-700 hover:underline"><li><strong>{{ $job['title'] }}:</a></strong>
                {{ $job['salary'] }} per year.</li>
        @endforeach
    </ul>

</x-layout>
