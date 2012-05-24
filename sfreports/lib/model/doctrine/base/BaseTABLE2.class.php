<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TABLE2', 'doctrine');

/**
 * BaseTABLE2
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $provider
 * @property string $provider_country
 * @property string $sku
 * @property string $developer
 * @property string $title
 * @property decimal $version
 * @property integer $product_type_identifier
 * @property integer $units
 * @property integer $developer_proceeds
 * @property string $begin_date
 * @property string $end_date
 * @property string $customer_currency
 * @property string $country_code
 * @property string $currency_of_proceeds
 * @property integer $apple_identifier
 * @property integer $customer_price
 * @property string $promo_code
 * @property string $parent_identifier
 * @property string $subscription
 * @property string $period
 * 
 * @method integer getId()                      Returns the current record's "id" value
 * @method string  getProvider()                Returns the current record's "provider" value
 * @method string  getProviderCountry()         Returns the current record's "provider_country" value
 * @method string  getSku()                     Returns the current record's "sku" value
 * @method string  getDeveloper()               Returns the current record's "developer" value
 * @method string  getTitle()                   Returns the current record's "title" value
 * @method decimal getVersion()                 Returns the current record's "version" value
 * @method integer getProductTypeIdentifier()   Returns the current record's "product_type_identifier" value
 * @method integer getUnits()                   Returns the current record's "units" value
 * @method integer getDeveloperProceeds()       Returns the current record's "developer_proceeds" value
 * @method string  getBeginDate()               Returns the current record's "begin_date" value
 * @method string  getEndDate()                 Returns the current record's "end_date" value
 * @method string  getCustomerCurrency()        Returns the current record's "customer_currency" value
 * @method string  getCountryCode()             Returns the current record's "country_code" value
 * @method string  getCurrencyOfProceeds()      Returns the current record's "currency_of_proceeds" value
 * @method integer getAppleIdentifier()         Returns the current record's "apple_identifier" value
 * @method integer getCustomerPrice()           Returns the current record's "customer_price" value
 * @method string  getPromoCode()               Returns the current record's "promo_code" value
 * @method string  getParentIdentifier()        Returns the current record's "parent_identifier" value
 * @method string  getSubscription()            Returns the current record's "subscription" value
 * @method string  getPeriod()                  Returns the current record's "period" value
 * @method TABLE2  setId()                      Sets the current record's "id" value
 * @method TABLE2  setProvider()                Sets the current record's "provider" value
 * @method TABLE2  setProviderCountry()         Sets the current record's "provider_country" value
 * @method TABLE2  setSku()                     Sets the current record's "sku" value
 * @method TABLE2  setDeveloper()               Sets the current record's "developer" value
 * @method TABLE2  setTitle()                   Sets the current record's "title" value
 * @method TABLE2  setVersion()                 Sets the current record's "version" value
 * @method TABLE2  setProductTypeIdentifier()   Sets the current record's "product_type_identifier" value
 * @method TABLE2  setUnits()                   Sets the current record's "units" value
 * @method TABLE2  setDeveloperProceeds()       Sets the current record's "developer_proceeds" value
 * @method TABLE2  setBeginDate()               Sets the current record's "begin_date" value
 * @method TABLE2  setEndDate()                 Sets the current record's "end_date" value
 * @method TABLE2  setCustomerCurrency()        Sets the current record's "customer_currency" value
 * @method TABLE2  setCountryCode()             Sets the current record's "country_code" value
 * @method TABLE2  setCurrencyOfProceeds()      Sets the current record's "currency_of_proceeds" value
 * @method TABLE2  setAppleIdentifier()         Sets the current record's "apple_identifier" value
 * @method TABLE2  setCustomerPrice()           Sets the current record's "customer_price" value
 * @method TABLE2  setPromoCode()               Sets the current record's "promo_code" value
 * @method TABLE2  setParentIdentifier()        Sets the current record's "parent_identifier" value
 * @method TABLE2  setSubscription()            Sets the current record's "subscription" value
 * @method TABLE2  setPeriod()                  Sets the current record's "period" value
 * 
 * @package    ProjectManagment
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTABLE2 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TABLE_2');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('provider', 'string', 5, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('provider_country', 'string', 2, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2,
             ));
        $this->hasColumn('sku', 'string', 4, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('developer', 'string', 9, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 9,
             ));
        $this->hasColumn('title', 'string', 9, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 9,
             ));
        $this->hasColumn('version', 'decimal', 2, array(
             'type' => 'decimal',
             'notnull' => false,
             'length' => 2,
             'scale' => '1',
             ));
        $this->hasColumn('product_type_identifier', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('units', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('developer_proceeds', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('begin_date', 'string', 10, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 10,
             ));
        $this->hasColumn('end_date', 'string', 10, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 10,
             ));
        $this->hasColumn('customer_currency', 'string', 3, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 3,
             ));
        $this->hasColumn('country_code', 'string', 2, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2,
             ));
        $this->hasColumn('currency_of_proceeds', 'string', 3, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 3,
             ));
        $this->hasColumn('apple_identifier', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('customer_price', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('promo_code', 'string', 1, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1,
             ));
        $this->hasColumn('parent_identifier', 'string', 1, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1,
             ));
        $this->hasColumn('subscription', 'string', 1, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1,
             ));
        $this->hasColumn('period', 'string', 1, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}