<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action="/jobs/create" method="POST">

        <x-forms.input label="Title" name="title" placeholder="CEO" />

        <x-forms.input label="Salary" name="salary" placeholder="$90,000" />

        <x-forms.input label="Location" name="location" placeholder="Lajpat Nagar, New Delhi" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wantted" />

        <x-forms.checkbox label="Featured (Cost Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags(comma separated)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.button class="mt-3">Publish</x-forms.button>
    </x-forms.form>

</x-layout>
