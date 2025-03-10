<section class="w-full">
    <div class="flex flex-col gap-8 container pb-24 px-4 mx-auto">
        <h2 class="text-center font-bold text-4xl">{{ $heading }}</h2>
        <div class="grid gap-4 grid-cols-2">
            @foreach ($courses as $course)
                <x-course :$course/>
            @endforeach
        </div>
    </div>
</section>