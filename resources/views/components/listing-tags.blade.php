@props(['tagsCsv'])

@php
 // Comma separated
 // Explode digunakan untuk memisahkan string dengan elemen terntentu
 $tags = explode(',', $tagsCsv);

@endphp

<!-- Hanya perulangan layout, data tetap diambil dari database melalui "$listing->tags" -->
<ul class="flex">
@foreach ($tags as $tag)        
<li
    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
    <a href="/?tag={{ $tag }}">{{$tag}}</a> 
    <!-- /?tag = request(['tag']) come from-->
</li>
@endforeach
</ul>