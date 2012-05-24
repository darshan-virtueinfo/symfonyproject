<?php

/**
 * Reports form base class.
 *
 * @method Reports getObject() Returns the current form's model object
 *
 * @package    ProjectManagment
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReportsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'project_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectDetail'), 'add_empty' => true)),
      'task_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'add_empty' => true)),
      'start_time' => new sfWidgetFormTime(),
      'end_time'   => new sfWidgetFormTime(),
      'task_hour'  => new sfWidgetFormInputText(),
      'detail'     => new sfWidgetFormTextarea(),
      'date_at'    => new sfWidgetFormDate(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'project_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectDetail'), 'required' => false)),
      'task_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'required' => false)),
      'start_time' => new sfValidatorTime(array('required' => false)),
      'end_time'   => new sfValidatorTime(array('required' => false)),
      'task_hour'  => new sfValidatorNumber(array('required' => false)),
      'detail'     => new sfValidatorString(array('required' => false)),
      'date_at'    => new sfValidatorDate(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reports[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reports';
  }

}
