<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-5 pt-5">
                <ul class="list-group mt-5 pt-5">
                    <li class="list-group-item"><a href="/admin/blogs/" class="text-decoration-none">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create" class="text-decoration-none">Create
                            Blog</a></li>

                </ul>
            </div>
            <div class="col-md-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>
