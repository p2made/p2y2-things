<?php
/**
 * FullCalendarWidget.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\widgets;

/**
 *
 * Bring's \yii2fullcalendar\yii2fullcalendar
 * into the \p2made namespace
 *
 */

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
 * events of p2made\models\FullCalendarEvent
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
    * @var array options the HTML attributes (name-value pairs) for the field container tag.
    * The values will be HTML-encoded using [[Html::encode()]].
    * If a value is null, the corresponding attribute will not be rendered.
    */

    /**
     * @var bool $theme default is true and will render the jui theme for the calendar
     */

    /**
     * @var array clientOptions the HTML attributes for the widget container tag.
     */

    /**
    * Holds an array of Event Objects
    * @var array events of yii2fullcalendar\models\Event
    * @todo add the event class and write docs
    **/

    /**
     * Define the look n feel for the calendar header, known placeholders are left, center, right
     * @var array header format
     */

    /**
     * Will hold an url to json formatted events!
     * @var url to json service
     */

    /**
     * wheather the events will be "sticky" on pagination or not. Uncomment if you are loading events
	 * separately from the initial options.
     * @var boolean
     */
    //public $stickyEvents = true;

    /**
     * tell the calendar, if you like to render google calendar events within the view
     * @var boolean
     */

    /**
     * the text that will be displayed on changing the pages
     * @var string
     */

    /**
     * internal marker for the name of the plugin
     * @var string
     */

    /**
     * The javascript function to us as en eventRender callback
     * @var string the javascript code that implements the eventRender function
     */

    /**
     * The javascript function to us as en eventAfterRender callback
     * @var string the javascript code that implements the eventAfterRender function
     */

    /**
     * The javascript function to us as en eventAfterAllRender callback
     * @var string the javascript code that implements the eventAfterAllRender function
     */

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */

    /**
    * Registers the FullCalendar javascript assets and builds the requiered js  for the widget and the related events
    */

    /**
     * @return array the options for the text field
     */

}
