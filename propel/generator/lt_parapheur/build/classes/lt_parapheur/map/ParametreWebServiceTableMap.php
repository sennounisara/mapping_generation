<?php



/**
 * This class defines the structure of the 'parametre_web_service' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class ParametreWebServiceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ParametreWebServiceTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('parametre_web_service');
        $this->setPhpName('ParametreWebService');
        $this->setClassname('ParametreWebService');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PARAMETRE_WEB_SERVICE', 'IdParametreWebService', 'INTEGER', true, null, null);
        $this->addColumn('ID_TELESERVICE', 'IdTeleservice', 'VARCHAR', true, 255, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', true, null, null);
        $this->addColumn('LOGIN', 'Login', 'VARCHAR', true, 255, null);
        $this->addColumn('PASS', 'Pass', 'VARCHAR', true, 255, null);
        $this->addColumn('URL_WEB_SERVICE', 'UrlWebService', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ParametreWebServiceTableMap
