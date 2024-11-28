@extends('ui.layouts.commonComponents')

@section('styles')
    <style>
        a{
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
<div class="comp-container accordion" id="accordionComponentList">
    <aside class="vh-100">
        <h4 class="header-content mb-0 p-3">Component List</h4>
        <ul class="component-list">
        <?php
            $componentList = [
                ['name' => 'Tabs', 'route' => 'navs'],
                ['name' => 'Select', 'route' => 'selectInput'],
                ['name' => 'Text', 'route' => 'text'],
                ['name' => 'Text Inputs', 'route' => 'textInput'],
                ['name' => 'Datatable', 'route' => 'datatable'],
                ['name' => 'Radio Select', 'route' => 'radio-select'],
                ['name' => 'Modals', 'route' => 'collapse-modal'],
                ['name' => 'Sidebar', 'route' => 'sidebar-demo'],
                ['name' => 'Checkbox Slider', 'route' => 'checkbox'],
                ['name' => 'Search Bar', 'route' => 'search-bar'],
                ['name' => 'Buttons', 'route' => 'buttons'],
                ['name' => 'Badges', 'route' => 'badges'],
                ['name' => 'Container Cards', 'route' => 'container-cards'],
                ['name' => 'Open Cards', 'route' => 'open-cards'],
                ['name' => 'Color Cards', 'route' => 'color-cards'],
                ['name' => 'Numpad', 'route' => 'numpad'],
            ];
        ?>
            @foreach($componentList as $component)
                <li class="">
                    <a class="p-3 {{ $loop->first ? 'active' : '' }}" href="javascript:" data-bs-toggle="collapse" data-bs-target="#{{ $component['route'] }}" aria-expanded="true" aria-controls="{{ $component['route'] }}-controls">
                        {{ $component['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </aside>
    <main class="p-5 w-100 vh-100">
        <div id="navs" class="collapse show" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.tabs')
        </div>
        <div id="selectInput" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.selectInput-v1')
        </div>
        <div id="text" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.text')
        </div>
        <div id="textInput" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.textInput-v2')
        </div>
        <div id="datatable" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.datatable')
        </div>
        <div id="radio-select" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.radio-select')
        </div>
        <div id="collapse-modal" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.collapse-modal')
        </div>
        <div id="sidebar-demo" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            <a href="{{ route('sidebar-demo') }}" target="_blank">Click here to check the Sidebar Demo</a>
        </div>
        <div id="checkbox" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.checkbox')
        </div>
        <div id="search-bar" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.search-bar')
        </div>
        <div id="buttons" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.buttons')
        </div>
        <div id="badges" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.badges')
        </div>
        <div id="container-cards" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.container-cards')
        </div>
        <div id="open-cards" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.open-cards')
        </div>
        <div id="color-cards" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.color-cards')
        </div>
        <div id="numpad" class="collapse" aria-labelledby="navs-controls" data-bs-parent="#accordionComponentList">
            @include('ui.common-components.numpad')
        </div>
    </main>
</div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('#accordionComponentList  li > a');

            function removeActiveFromAllItems() {
                accordionItems.forEach(item => item.classList.remove('active'));
            }

            accordionItems.forEach(item => {
                const targetId = item.getAttribute('data-bs-target').substring(1);
                const collapseElement = document.getElementById(targetId);

                if(collapseElement){
                    collapseElement.addEventListener('show.bs.collapse', function() {
                        //removeActiveFromAllItems();
                        item.classList.add('active');
                    });

                    collapseElement.addEventListener('hide.bs.collapse', function() {
                        item.classList.remove('active');
                    });
                }
            });
        });
    </script>
@endsection