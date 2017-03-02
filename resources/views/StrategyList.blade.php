@php
@endphp
<div class="container-fluid">
    @foreach ($strategies as $strategy)
        @php
            $id = $strategy->getParam('id');
        @endphp
        <div class="row editable" id="strategy_{{ $id }}">
            <div class="col-sm-10">
                {!! $strategy->listItem() !!}
            </div>
            <div class="col-sm-2">
                <div class="form-group editbuttons">
                    <button onClick="window.GTrader.request('strategy',
                                                            'form',
                                                            'id={{ $id }}')"
                            type="button"
                            class="btn btn-primary btn-sm editbutton trans"
                            title="Edit Strategy">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </button>
                    <button onClick="window.GTrader.request('strategy',
                                                            'delete',
                                                            'id={{ $id }}')"
                            type="button"
                            class="btn btn-primary btn-sm editbutton trans"
                            title="Delete Strategy">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row" id="new_strategy">
        <div class="col-sm-12 editable text-right">
            <label for="new_strategy_class">New strategy:</label>
            <select class="btn-primary btn btn-mini"
                    id="new_strategy_class"
                    title="Select type of strategy">
                @foreach ($available as $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
            </select>

            <button onClick="window.GTrader.request('strategy',
                                                    'new',
                                                    {strategyClass: $('#new_strategy_class').val()})"
                    type="button"
                    class="btn btn-primary btn-sm trans"
                    title="Create new strategy">
                <span class="glyphicon glyphicon-ok"></span> Create
            </button>
        </div>
    </div>

</div>