<!-- View All Patterns in a Pattern Sub-Type -->
<div class="sg-main" role="main">

    <!-- Patterns -->
    <div id="sg-patterns">
        @foreach ($partials as $partial)
            @php
                $partial = (object) $partial;
            @endphp
            @if ($partial->patternSectionSubtype == true)
                <div id="{{ $partial->patternPartial }}" class="sg-pattern-category">
                    <h2 class="sg-pattern-category-title"><a href="../../patterns/{{ $partial->patternLink }}" class="patternLink" data-patternpartial="{{ $partial->patternPartial }}">{{ $partial->patternName }}</a></h2>

                    <div class="sg-pattern-category-body">
                        {{ $partial->patternDesc }}
                    </div><!--end sg-pattern-category-body-->

                </div><!--end sg-pattern-category-->
            @else
                <div id="{{ $partial->patternPartial }}" class="sg-pattern">
                    <div class="sg-pattern-head">
                        <h3 class="sg-pattern-title">
                            <a href="../../patterns/{{ $partial->patternLink }}" class="patternLink" data-patternpartial="{{ $partial->patternPartial }}" title="Link to Pattern">
                                {{ $partial->patternName }}
                                @if ($partial->patternState)
                                    <span class="sg-pattern-state {{ $index }}">{{ $index }}</span>
                                @endif
                            </a>
                        </h3>
                        <div class="sg-pattern-breadcrumb">{{ $partial->patternBreadcrumb }}</div>
                        <a href="#" data-patternpartial="{{ $partial->patternPartial }}" title="View Pattern Info" id="sg-pattern-extra-toggle-{{$partial->patternPartial}}" class="sg-pattern-extra-toggle"><span>&#9660;</span></a>
                    </div>
                    <div class="sg-pattern-extra" id="sg-pattern-extra-{{ $partial->patternPartial }}">

                    </div>
                    <div class="sg-pattern-example">
                        {{ $partial->patternPartialCode }}
                    </div>
                    <script type="text/json" id="sg-pattern-data-{{$partial->patternPartial}}" class="sg-pattern-data">
                        {{ $partial->patternData }}
                    </script>
                </div><!--end .sg-pattern-->
            @endif
        @endforeach
    </div>
</div>
