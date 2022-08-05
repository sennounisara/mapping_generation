<?php



/**
 * This class defines the structure of the 'compte_centrale' table.
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
class CommonCompteCentraleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCompteCentraleTableMap';

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
        $this->setName('compte_centrale');
        $this->setPhpName('CommonCompteCentrale');
        $this->setClassname('CommonCompteCentrale');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_COMPTE', 'IdCompte', 'INTEGER', true, 20, null);
        $this->addPrimaryKey('ORGANISME', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('ID_CENTRALE', 'IdCentrale', 'INTEGER', false, 20, null);
        $this->addColumn('MAIL', 'Mail', 'VARCHAR', false, 200, null);
        $this->addColumn('FAX', 'Fax', 'VARCHAR', false, 20, null);
        $this->addColumn('INFO_CIMPLEMENTAIRE', 'InfoCimplementaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_SERVICE', 'IdService', 'INTEGER', false, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCompteCentraleTableMap
