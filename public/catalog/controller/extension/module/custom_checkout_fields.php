<?php
class ControllerExtensionModuleCustomCheckoutFields extends Controller {
    public function index() {
        $this->load->language('extension/module/custom_checkout_fields');

        // Дата и время доставки
        $data['delivery_date'] = array(
            'name' => 'delivery_date',
            'label' => $this->language->get('text_delivery_date'),
            'required' => true,
            'placeholder' => 'YYYY-MM-DD'
        );

        $data['delivery_time'] = array(
            'name' => 'delivery_time',
            'label' => $this->language->get('text_delivery_time'),
            'required' => true,
            'options' => array(
                '09:00-12:00' => '09:00-12:00',
                '12:00-15:00' => '12:00-15:00',
                '15:00-18:00' => '15:00-18:00',
                '18:00-21:00' => '18:00-21:00'
            )
        );

        // Чекбокс предварительного созвона
        $data['callback_required'] = array(
            'name' => 'callback_required',
            'label' => $this->language->get('text_callback_required'),
            'checked' => false
        );

        return $this->load->view('extension/module/custom_checkout_fields', $data);
    }
}