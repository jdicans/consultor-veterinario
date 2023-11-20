<?php

namespace App\Filament\Widgets;

use App\Models\Mascot;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class MascotWidgets extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'mascot';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Mascot';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $mascots = Mascot::all();
        $categories = ['Gato', 'Perro', 'Conejo', 'Otro'];
        $data = [0, 0, 0, 0];
    
        foreach ($mascots as $mascot) {
            switch ($mascot->tapy_animal) {
                case 'gato':
                    $data[0]++;
                    break;
                case 'perro':
                    $data[1]++;
                    break;
                case 'conejo':
                    $data[2]++;
                    break;
                default:
                    $data[3]++;
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
                    'name' => 'Cantidad de Animales',
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
            'colors' => ['#037171'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 3,
                    'horizontal' => true,
                ],
            ],
        ];
    }
}
