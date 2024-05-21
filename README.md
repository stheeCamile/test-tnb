# Teste 

## Visão Geral

Este projeto é um Sistema de Gerenciamento de Funcionários baseado em PHP desenvolvido utilizando o framework Laravel. Ele permite o gerenciamento de funcionários, departamentos e horários de trabalho.

## Processo para Criar Horários de Trabalho

Para criar horários de trabalho para os funcionários, o seguinte processo é seguido:

1. **Gerar Horário de Trabalho**: Uma função é implementada para gerar horários de trabalho para um período específico, normalmente para os próximos 30 dias. Esta função itera por cada dia e gera as horas de trabalho para cada funcionário, garantindo que apenas as horas de trabalho sejam incluídas.

2. **Salvar Horário de Trabalho**: Os horários de trabalho gerados são então salvos no banco de dados, associando cada horário com o respectivo funcionário.

## Garantindo que Apenas as Horas de Trabalho sejam Incluídas

Para garantir que apenas as horas de trabalho sejam incluídas nos horários de trabalho, os seguintes passos são tomados:

1. **Definir Horário de Trabalho**: As horas de trabalho são definidas, normalmente das 9h às 12h e das 13h às 18h, com uma pausa para o almoço das 12h às 13h.

2. **Gerar Horário de Trabalho**: Ao gerar os horários de trabalho, apenas as horas dentro do horário de trabalho definido são incluídas para cada dia.

## Exemplo de Código PHP

Abaixo está um exemplo de trecho de código PHP para demonstrar como os horários de trabalho podem ser gerados e como verificar se um horário específico está dentro do horário de trabalho:

```php
<?php

use Carbon\Carbon;

function generateWorkSchedule($employeeId)
{
    $workHours = [
        ['start' => 9, 'end' => 12],
        ['start' => 13, 'end' => 18]
    ];

    $schedules = [];
    $startDate = Carbon::now();
    $endDate = Carbon::now()->addDays(30);

    for ($date = $startDate; $date->lessThan($endDate); $date->addDay()) {
        foreach ($workHours as $session) {
            for ($hour = $session['start']; $hour < $session['end']; $hour++) {
                $startTime = $date->copy()->setTime($hour, 0);
                $endTime = $startTime->copy()->addHour();
                $schedules[] = [
                    'employee_id' => $employeeId,
                    'start_time' => $startTime,
                    'end_time' => $endTime
                ];
            }
        }
    }

    return $schedules;
}

function isInWorkingHours($time)
{
    $hour = $time->hour;
    return ($hour >= 9 && $hour < 12) || ($hour >= 13 && $hour < 18);
}

$currentTime = Carbon::now();
if (isInWorkingHours($currentTime)) {
    echo "Current time is within working hours.";
} else {
    echo "Current time is not within working hours.";
}

?>
