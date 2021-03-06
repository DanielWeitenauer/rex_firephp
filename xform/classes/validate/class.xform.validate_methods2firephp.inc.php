<?php
/**
* FirePHP Addon
*
* FirePHP Lib Copyright (c) 2006-2010, Christoph Dorn, http://firephp.org
* FirePHP Lib v 0.3.1 & 0.3.2rc1
*
* @author <a href="http://rexdev.de">rexdev.de</a>
*
* @package redaxo 4.3.x/4.4.x/4.5.x
* @version 1.1.4
*/

class rex_xform_validate_methods2firephp extends rex_xform_validate_abstract
{
  private static $opts = array('Collapsed'=>true,'Color'=>'#B83C31');
  private static $shortname;

  function __construct()
  {
    self::$shortname = str_replace('rex_xform_validate_','',__CLASS__);
  }

  function loadParams(&$params, $elements)
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

  function setObjects(&$Objects)
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

  function enterObject()
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

  function getDescription()
  {
    #FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);FB::groupEnd();
    return '<strong>
              '.self::$shortname.'
            </strong> :
            <em>
              Gibt alle abstract Methoden dieses Klassen-Typs als Group in Firephp aus.
            </em><br />
            <code class="xform-form-code">
              validate|'.self::$shortname.'
            </code>';
  }

  function getLongDescription()
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

  function getDefinitions()
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

  function getElement($i)
  {
    FB::group(__CLASS__.'::'.__FUNCTION__,self::$opts);

    FB::groupEnd();
  }

}
