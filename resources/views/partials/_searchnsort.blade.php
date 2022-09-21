<div class="w-full flex m-4 ml-20 space-x-20">
  <div class="relative border-2 border-gray-100 rounded-lg w-4/6">
    <form action="{{route('l_home')}}" method="get">
      <div class="absolute top-4 left-3">
        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
      </div>
      <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
        placeholder="Search Laravel Jobs..." />
      <div class="absolute top-2 right-2">
        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
          Search
        </button>
      </div>
    </form>
    </div>
    <form action="{{route('l_home')}}" method="GET">
  <div class="border-2 border-gray-100 rounded-lg w-1/6 flex justify-center gap-10 focus:shadow focus:outline-none --content">
      <select name="sort" class="w-full">
        <option value="date_asc" @if ('date_asc' == $sortSelect) selected @endif>New</option>
        <option value="date_desc" @if ('date_desc' == $sortSelect) selected @endif>Old</option>
        <option value="name_asc" @if ('name_asc' == $sortSelect) selected @endif>Name a-z</option>
        <option value="name_desc" @if ('name_desc' == $sortSelect) selected @endif>Name z-a</option>
      </select>
    </div>
  </form>
</div>