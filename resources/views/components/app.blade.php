<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">
                <div class="lg:w-40">
                    @include('_sidebar_links')
                </div>

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    {{ $slot ?? '' }}
                </div>

                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include('_friends-list')
                </div>
            </div>
        </main>
    </section>
</x-master>
