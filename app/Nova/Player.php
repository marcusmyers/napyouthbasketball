<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Player extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Player';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'first_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'first_name', 'last_name', 'grade',
    ];

    public function title()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        if($request->user()->hasRole('super_administrator')){
            return $query;
        } else {
            return $query->where('team_id', $request->user()->team->id);
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
            Avatar::make('Avatar'),
            Text::make('First Name'),
            Text::make('Last Name')
                ->sortable(),
            Number::make('Grade')
                ->sortable()
                ->rules('required', 'max:2'),
            Text::make('Height')
                ->onlyOnDetail()
                ->onlyOnForms(),
            Text::make('Weight')
                ->onlyOnDetail()
                ->onlyOnForms(),
            Text::make('Shirt Size')->hideFromIndex(),
            BelongsTo::make('Team')->nullable(),
            new Panel('Family Information', $this->familyInformationFields()),
            Boolean::make('Paid')->onlyOnForms(),
            Boolean::make('Signed Waiver')->onlyOnForms(),
            Boolean::make('Willing To Coach')->onlyOnForms(),
        ];
    }

    protected function familyInformationFields()
    {
        return [
            Place::make('Address')->hideFromIndex(),
            Text::make('Phone'),
            Text::make('Alt Phone')->hideFromIndex(),
            Text::make('Email')
                ->hideFromIndex(),
            Text::make('Parents Names'),
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
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new DownloadExcel,
        ];
    }
}
