<div class="w-full flex space-x-20 --content">
    <form action="{{route('l_home')}}" method="get" class="w-full flex justify-between">
        <div class="relative border-2 border-gray-100 rounded-lg w-10/12 m-4">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search Laravel Jobs..." />
            <div class="absolute top-2 right-2">
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                    Search
                </button>
            </div>
        </div>
        <div class="border-2 border-gray-100 rounded-lg w-2/12 flex justify-center gap-10 focus:shadow focus:outline-none m-4">
            <select name="sort" class="w-full h-full">
                <option value="date_asc">New</option>
                <option value="date_desc">Old</option>
                <option value="title_asc">Name a-z</option>
                <option value="title_desc">Name z-a</option>
            </select>
        </div>
    </form>
</div>
