FullCalendarWidget & FullCalendarEvent
======================================

Usage
=====

Quickstart Looks like this:

```php

  $events = array();
  //Testing
  $Event = new \p2made\models\FullCalendarEvent();
  $Event->id = 1;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:m:s\Z');
  $events[] = $Event;

  $Event = new \p2made\models\FullCalendarEvent();
  $Event->id = 2;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:m:s\Z');
  $Event->end = date('Y-m-d\TH:m:s\Z');
  $events[] = $Event;

  $Event = new \p2made\models\FullCalendarEvent();
  $Event->id = 3;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:m:s\Z');
  $Event->end = date('Y-m-d\TH:m:s\Z');
  $events[] = $Event;

  $Event = new \p2made\models\FullCalendarEvent();
  $Event->id = 4;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:m:s\Z');
  $Event->end = date('Y-m-d\TH:m:s\Z');
  $events[] = $Event;

  $Event = new \p2made\models\FullCalendarEvent();
  $Event->id = 5;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\TH:m:s\Z',strtotime('tomorrow 6am'));
  $events[] = $Event;

  ?>

  <?= \p2made\widgets\FullCalendarWidget::widget(array(
      'events' => $events,
  ));
```

Note, that this will only view the events without any detailed view or option to add a new event.. etc.

AJAX Usage
==========
If you wanna use ajax loader, this could look like this:

```php
<?= \p2made\widgets\FullCalendarWidget::widget([
      'options' => [
        'language' => 'de',
        //... more options to be defined here!
      ],
      'ajaxEvents' => Url::to(['/timetrack/default/jsoncalendar'])
    ]);
?>
```

and inside your referenced controller, the action should look like this:

```php
public function actionJsoncalendar($start=NULL,$end=NULL,$_=NULL){

    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $times = \app\modules\timetrack\models\Timetable::find()->where(array('category'=>\app\modules\timetrack\models\Timetable::CAT_TIMETRACK))->all();

    $events = array();

    foreach ($times AS $time){
      //Testing
      $Event = new \p2made\models\FullCalendarEvent();
      $Event->id = $time->id;
      $Event->title = $time->categoryAsString;
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime($time->date_start.' '.$time->time_start));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime($time->date_end.' '.$time->time_end));
      $events[] = $Event;
    }

    return $events;
  }
```
