@props(['listing'])


<x-card>
    <div class="flex">
        <img
        class="hidden w-48 mr-6 md:block" 
        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/default.png')}}" 
        alt="logo"
        />
    <div>
    <h3 class="text-2xl">
        <a href="{{route('l_listing', $listing->id)}}">{{$listing->title}}</a>
    </h3>
    <div class="text-xl font-cold">{{$listing->company}}</div>
    <h3 class="mb-4">Posted on: {{substr($listing->date, 0, 10)}}</h3>
    <x-listing_tags :tagsCsv="$listing->tags" />
    <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i>
        {{$listing->location}}
    </div>
</div>
</div>
</x-card>