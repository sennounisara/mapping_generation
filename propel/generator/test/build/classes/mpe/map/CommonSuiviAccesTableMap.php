<?php



/**
 * This class defines the structure of the 'SuiviAcces' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonSuiviAccesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSuiviAccesTableMap';

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
        $this->setName('SuiviAcces');
        $this->setPhpName('CommonSuiviAcces');
        $this->setClassname('CommonSuiviAcces');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_auto', 'IdAuto', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, 8, 0);
        $this->addColumn('date_acces', 'DateAcces', 'VARCHAR', true, 20, '');
        $this->addColumn('id_service', 'IdService', 'INTEGER', false, 8, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 100, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 100, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSuiviAccesTableMap
