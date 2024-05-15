<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
<h2>Habits</h2>

@forelse ($habits as $habit)
  <p>
    Complete: {{ $habit->complete }}<br>
    Year: {{ $habit->name }}<br>
    Runtime: {{ $habit->description }}<br>
  </p>
@empty
    <p>No results</p>
@endforelse

</div>
</div>
</div>


</x-app-layout>
