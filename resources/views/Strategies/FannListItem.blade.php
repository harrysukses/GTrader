@php
    $train = $training_status ? ('paused' === $training_status) ? 'Training Paused' : 'Now Training' : 'Train';
@endphp
<button onClick="window.GTrader.request('strategy', 'train', {id: {{ $strategy->getParam('id') }}})"
        type="button"
        class="btn btn-primary btn-sm trans"
        title="{{ $train }}">
    <span class="glyphicon glyphicon-fire"></span> {{ $train }}
</button>
<strong>{{ $strategy->getParam('name') }}</strong>
<small>inputs: {{ $strategy->getNumInput() }}</samll>
