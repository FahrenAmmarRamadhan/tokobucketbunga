<x-layout>
    <!-- Hero Section -->
    <x-hero></x-hero>
    <!-- Hero Section -->

    <hr class="my-20 border-t-4" />

    <!-- About Section -->
    <x-about></x-about>
    <!-- About Section -->

    <hr class="my-20 border-t-4" />

    <!-- Product Section -->
    <x-items :products="$products"></x-items>
    <!-- Product Section -->

    <hr class="my-20 border-t-4" />

    <!-- contact Section -->
    <x-contact></x-contact>
    <!-- contact Section -->
</x-layout>