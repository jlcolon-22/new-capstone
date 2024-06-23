<div x-data="{aside: true}">
    <div class="flex">
        @include('components.layouts.admin.aside')
        <main class="w-full max-h-[100svh] px-4 md:px-10 pb-10">
            {{-- top nav --}}
            <div class="flex justify-between items-center py-4">
                <button x-on:click="aside = !aside">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>

                <div class="avatar">
                    <div class="w-14 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>

            {{-- main content --}}
            <section class="max-h-[84svh] overflow-y-auto scrollContent">
                {{-- cards --}}
                <div class="mt-8">
                    @livewire(\App\Livewire\AdminWidget::class)
                </div>

                <div class="mt-10">
                    {{ $this->table }}
                </div>
            </section>
        </main>
    </div>
</div>
