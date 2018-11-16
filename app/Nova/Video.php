<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Inspheric\Fields\Url;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Video extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Video';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static function indexQuery(NovaRequest $request, $query)
    {
        if($request->user()->hasRole('super_administrator')){
            return $query;
        } else {
            return $query->where('type', 'Instructional');
        }
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->hideFromIndex(),
            Text::make('Title')->sortable(),
            Url::make('Url')
                ->rules('url')
                ->clickableOnIndex()
                ->clickable(),
            Select::make('Type')->options([
                'Instructional' => 'Instructional',
                'Web' => 'Web',
            ]),
            // File::make('File')->store(new StoreForms),
            // Text::make('File Name')->exceptOnForms(),

            // Text::make('File Size')
            //     ->exceptOnForms()
            //     ->displayUsing(function ($value) {
            //         return number_format($value / 1024, 2).'kb';
            //     }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            (new Filters\VideoType)->canSee(function ($request) {
                return $request->user()->hasRole('super_administrator');
            }),
        ];
    }

    /**
     * Get the lenses available for the resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [
            new Lenses\InstructionalVideos,
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
