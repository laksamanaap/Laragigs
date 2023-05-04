<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

{{-- unless artinya tidak sama dengan / "!" --}}

@unless (count($listings) == 0) <!-- $listings : db name -->

@foreach ($listings as $listing)
    <x-listing-card :listing="$listing" /> 
    <!-- :listing = component name
    $listing = data from database -->
@endforeach

@else 
    <p>No listings found</p>
@endunless

</div>
<div class="mt-6 p-4">
    {{ $listings->links()}}
</div>
</x-layout>
