<x-layout>
    <x-section-heading class="text-center text-4xl">Results</x-section-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach

    </div>
</x-layout>
