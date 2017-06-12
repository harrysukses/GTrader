<?php

return [
    'indicator' =>  [
        'base' => 'close',
        'fastperiod' => 12,
        'slowperiod' => 26,
        'signalperiod' => 9,
        'fastmatype' => TRADER_MA_TYPE_SMA,
        'slowmatype' => TRADER_MA_TYPE_SMA,
        'signalmatype' => TRADER_MA_TYPE_SMA,
    ],
    'adjustable' => [
        'base' => [
            'name' => 'Base',
            'type' => 'base',
        ],
        'fastperiod' => [
            'name' => 'Fast Period',
            'type' => 'number',
            'min' => 2,
            'step' => 1,
            'max' => 99,
        ],
        'slowperiod' => [
            'name' => 'Slow Period',
            'type' => 'number',
            'min' => 2,
            'step' => 1,
            'max' => 99,
        ],
        'signalperiod' => [
            'name' => 'Signal Period',
            'type' => 'number',
            'min' => 2,
            'step' => 1,
            'max' => 99,
        ],
        'fastmatype' => [
            'name' => 'Fast MA Type',
            'type' => 'select',
        ],
        'slowmatype' => [
            'name' => 'Slow MA Type',
            'type' => 'select',
        ],
        'signalmatype' => [
            'name' => 'Signal MA Type',
            'type' => 'select',
        ],
    ],
    'output' => [
        0 => 'Fast',
        1 => 'Slow',
        2 => 'Signal',
    ],
    'display' => [
        'name' => 'MACD',
        'description' => 'Moving Average Convergence/Divergence',
        'y_axis_pos' => 'right',
        'top_level' => true,
    ],
    'fill_value' => 0,
];
