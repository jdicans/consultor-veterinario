<?php

namespace App\Filament\Widgets;

use App\Models\Citation as ModelsCitation;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class Citation extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'citation';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Citation';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    
{
    $citations = ModelsCitation::all();
    $categories = [
        'urgencia', 'medicina-general', 'cirugia', 'control', 'limpieza', 'terapia'
    ];
    $data = [0, 0, 0, 0, 0, 0];

    foreach ($citations as $citation) {
        switch ($citation->query_type) {
            case 'urgencia':
                $data[0]++;
                break;
            case 'medicina-general':
                $data[1]++;
                break;
            case 'cirugia':
                $data[2]++;
                break;
            case 'control':
                $data[3]++;
                break;
            case 'limpieza':
                $data[4]++;
                break;
            case 'terapia':
                $data[5]++;
                break;
        }
    }

    return [
        'chart' => [
            'type' => 'bar',
            'height' => 300,
        ],
        'series' => [
            [
                'name' => 'Cantidad de Consultas',
                'data' => $data,
            ],
        ],
        'xaxis' => [
            'categories' => $categories,
            'labels' => [
                'style' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ],
        'yaxis' => [
            'labels' => [
                'style' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ],
        'colors' => ['#00B9AE'],
        'plotOptions' => [
            'bar' => [
                'borderRadius' => 3,
                'horizontal' => true,
            ],
        ],
    ];
}

}
