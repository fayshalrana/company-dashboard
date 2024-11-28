@extends('ui.layouts.commonComponents')

@section('styles')
<style>
a {
    text-decoration: none;
}
</style>
@endsection

@section('content')
<div class="comp-container accordion" id="accordionComponentList">
    <aside class="">
        <h4 class="header-content mb-0 p-3">Component List</h4>
        <ul class="component-list">
            <?php
    $componentList = [
        ['name' => 'Cards', 'route' => 'cards'],
        ['name' => 'Cards Carousel', 'route' => 'cards-carousel'],
        ['name' => 'Datatable', 'route' => 'datatable'],
        ['name' => 'Buttons', 'route' => 'buttons'],
        ['name' => 'Modals', 'route' => 'modals'],
        ['name' => 'Select Filter', 'route' => 'select-filter'],
        ['name' => 'DateRange', 'route' => 'daterange'],
        ['name' => 'Alert Messages', 'route' => 'alert-messages'],
        ['name' => 'Input Fields', 'route' => 'input-field'],
        ['name' => 'Input Fields', 'route' => 'input-field'],
        ['name' => 'Info Card', 'route' => 'info-cards'],
        ['name' => 'Sidebar', 'route' => 'sidebar'],
    ];
    ?>
            @foreach($componentList as $component)
            <li>
                <a class="p-3 {{ $loop->first ? 'active' : '' }}" href="#{{ $component['route'] }}"
                    data-bs-toggle="collapse" data-bs-target="#{{ $component['route'] }}"
                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="{{ $component['route'] }}">
                    {{ $component['name'] }}
                </a>
            </li>
            @endforeach
        </ul>

    </aside>
    <main class="p-2 p-md-5 w-100 vh-100">
        @foreach($componentList as $component)
        <div id="{{ $component['route'] }}" class="collapse {{ $loop->first ? 'show' : '' }}"
            aria-labelledby="{{ $component['route'] }}-controls" data-bs-parent="#accordionComponentList">
            @if ($component['route'] === 'sidebar')
            <a href="{{url( $component['route'] )}}" target="_blank">Click here to see sidebar</a>
            @else
            @include('ui.common-components.' . $component['route'])
            @endif
        </div>
        @endforeach
    </main>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('#accordionComponentList li > a');

    function removeActiveFromAllItems() {
        accordionItems.forEach(item => item.classList.remove('active'));
    }

    accordionItems.forEach(item => {
        const targetId = item.getAttribute('data-bs-target')?.substring(1); // Check for null value
        const collapseElement = targetId ? document.getElementById(targetId) : null;

        if (collapseElement) {
            collapseElement.addEventListener('show.bs.collapse', function() {
                removeActiveFromAllItems(); // Ensure only one item has 'active'
                item.classList.add('active');
            });
        }
    });
});
</script>
@endsection