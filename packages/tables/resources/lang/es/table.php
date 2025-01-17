<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Buscar',
            'placeholder' => 'Buscar',
        ],

    ],

    'pagination' => [

        'label' => 'Navegación de paginación',

        'overview' => 'Mostrando :first a :last de :total resultados',

        'fields' => [

            'records_per_page' => [
                'label' => 'por página',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Ir a la página :page',
            ],

            'next' => [
                'label' => 'Siguiente',
            ],

            'previous' => [
                'label' => 'Anterior',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filtro',
        ],

        'open_actions' => [
            'label' => 'Abrir acciones',
        ],

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => '¿Estás seguro de que quieres hacer esto?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Cancelar',
                ],

                'confirm' => [
                    'label' => 'Confirmar',
                ],

                'submit' => [
                    'label' => 'Enviar',
                ],

            ],

        ],

        'buttons' => [

            'select_all' => [
                'label' => 'Seleccione los :count registros',
            ],

        ],

    ],

    'empty' => [
        'heading' => 'No se encontraron registros',
    ],

];
