<?php
/**
 * FullCalendarWidget.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\FullCalendarWidget
 *
 * Bring's \yii2fullcalendar\yii2fullcalendar
 * into the \p2made namespace
 */

namespace p2m\widgets;

/**
 * Inherited properties for FullCalendarWidget.
 *
 * @property array $options
 * the HTML attributes (name-value pairs) for the field container tag.
 * The values will be HTML-encoded using [[Html::encode()]].
 * If a value is null, the corresponding attribute will not be rendered.
 *
 * @property array $clientOptions
 * the HTML attributes for the widget container tag.
 *
 * @property array $events
 * Holds an array of Event Objects
 * events of p2m\models\FullCalendarEvent
 * @todo add the event class and write docs
 *
 * @property array $header
 * Define the look n feel for the calendar header, known placeholders are left, center, right
 * @var array header format
 *
 * @property url $ajaxEvents
 * Will hold an url to json formatted events!
 * @var url to json service
 *
 * @property boolean $stickyEvents
 * wheather the events will be "sticky" on pagination or not
 * @var boolean
 *
 * @property boolean $googleCalendar
 * tell the calendar, if you like to render google calendar events within the view
 * @var boolean
 *
 * @property string $loading
 * the text that will be displayed on changing the pages
 * @var string
 *
 * @property string $_pluginName
 * internal marker for the name of the plugin
 * @var string
 *
 * @property string $eventRender
 * The javascript function to us as en eventRender callback
 * @var string the javascript code that implements the eventRender function
 *
 * @property string $eventAfterRender
 * The javascript function to us as en eventAfterRender callback
 * @var string the javascript code that implements the eventAfterRender function
 *
 * @property string $eventAfterAllRender
 * The javascript function to us as en eventAfterAllRender callback
 * @var string the javascript code that implements the eventAfterAllRender function
 *
 */
class FullCalendarWidget extends \yii2fullcalendar\yii2fullcalendar
{

/**
 *
 * See vendor/philippfrenzel/yii2fullcalendar/yii2fullcalendar.php
 * for implementation details.
 *
 */

    public function init()
    {
        parent::init();
    }

}
