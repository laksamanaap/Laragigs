@props(['listing'])


<x-card>    
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        /> <!-- 
        =>  jika terdapat gambar logo yang diupload maka yang akan
            ditampilkan adalah file gambar logo yang telah diupload tadi
            kalau tidak ada file yang diupload maka gambar yang ditampilkan
            adalah gambar default.
        -->
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}"><u>{{ $listing->title }}</u></a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            
            <x-listing-tags :tagsCsv="$listing->tags"/> 
            <!-- ":tagsCsv" = component name / layout -->
            <!-- "$listing->tags" = data from database -->

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>