<?php

/**
 * TABLE2 form base class.
 *
 * @method TABLE2 getObject() Returns the current form's model object
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTABLE2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'provider'                => new sfWidgetFormInputText(),
      'provider_country'        => new sfWidgetFormInputText(),
      'sku'                     => new sfWidgetFormInputText(),
      'developer'               => new sfWidgetFormInputText(),
      'title'                   => new sfWidgetFormInputText(),
      'version'                 => new sfWidgetFormInputText(),
      'product_type_identifier' => new sfWidgetFormInputText(),
      'units'                   => new sfWidgetFormInputText(),
      'developer_proceeds'      => new sfWidgetFormInputText(),
      'begin_date'              => new sfWidgetFormInputText(),
      'end_date'                => new sfWidgetFormInputText(),
      'customer_currency'       => new sfWidgetFormInputText(),
      'country_code'            => new sfWidgetFormInputText(),
      'currency_of_proceeds'    => new sfWidgetFormInputText(),
      'apple_identifier'        => new sfWidgetFormInputText(),
      'customer_price'          => new sfWidgetFormInputText(),
      'promo_code'              => new sfWidgetFormInputText(),
      'parent_identifier'       => new sfWidgetFormInputText(),
      'subscription'            => new sfWidgetFormInputText(),
      'period'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'provider'                => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'provider_country'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'sku'                     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'developer'               => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      'title'                   => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      'version'                 => new sfValidatorNumber(array('required' => false)),
      'product_type_identifier' => new sfValidatorInteger(array('required' => false)),
      'units'                   => new sfValidatorInteger(array('required' => false)),
      'developer_proceeds'      => new sfValidatorInteger(array('required' => false)),
      'begin_date'              => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'end_date'                => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'customer_currency'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'country_code'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'currency_of_proceeds'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'apple_identifier'        => new sfValidatorInteger(array('required' => false)),
      'customer_price'          => new sfValidatorInteger(array('required' => false)),
      'promo_code'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'parent_identifier'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'subscription'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'period'                  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('table2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TABLE2';
  }

}
