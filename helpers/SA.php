<?php

namespace branchonline\sweetalert;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;

/**
 * SweetAlert widget renders a message from session flash or custom messages.
 */
class SweetAlert extends Widget {

    /**
     * All the flash messages stored for the session are displayed and removed from the session
     * Default true.
     * @var bool
     */
    public $useSessionFlash = true;

    /**
     * @var bool If set to true, the user can dismiss the modal by clicking outside it.
     */
    public $allowOutsideClick = true;

    /**
     * @var int Auto close timer of the modal. Set in ms (milliseconds). default - 1,5 second
     */
    public $timer = 2500;

    /**
     * Plugin options
     * @var array
     */
    public $options = [];

    /**
     * Initializes the widget
     */
    public function init() {
        parent::init();

        if ($this->useSessionFlash) {
            $session = Yii::$app->getSession();
            $flashes = $session->getAllFlashes();

            foreach ($flashes as $type => $data) {
                if(is_string($data)) {
                    $this->options['type'] = $type;
                    $this->options['text'] = $data;
                } elseif(is_array($data)) {
                    $this->options['type'] = isset($data['type']) ? $data['type'] : '';
                    $this->options['title'] = isset($data['title']) ? $data['title'] : '';
                    $this->options['text'] = isset($data['text']) ? $data['text'] : '';
                }

                $session->removeFlash($type);
            }
        }
    }

    /**
     * Render alert
     * @return string|void
     */
    public function run() {
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets() {
        $view = $this->getView();
        SweetAlertAsset::register($view);
        $js = 'sweetAlert(' . $this->getOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Get plugin options
     * @return string
     */
    public function getOptions() {
        $this->options['allowOutsideClick'] = $this->allowOutsideClick;
        $this->options['timer'] = $this->timer;
        return Json::encode($this->options);
    }

}

