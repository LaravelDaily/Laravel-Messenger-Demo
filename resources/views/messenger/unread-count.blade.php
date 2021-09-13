<?php $count = Auth::user()->newThreadsCount(); ?>

@if ($count > 0)
    <span class="ml-1">({{ $count }})</span>
@endif
