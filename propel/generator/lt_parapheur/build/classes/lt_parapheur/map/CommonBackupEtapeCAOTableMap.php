<?php



/**
 * This class defines the structure of the 'backup_Etape_CAO' table.
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
class CommonBackupEtapeCAOTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBackupEtapeCAOTableMap';

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
        $this->setName('backup_Etape_CAO');
        $this->setPhpName('CommonBackupEtapeCAO');
        $this->setClassname('CommonBackupEtapeCAO');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_etape_cao', 'IdEtapeCao', 'INTEGER', true, null, null);
        $this->addColumn('intitule_etape_cao', 'IntituleEtapeCao', 'VARCHAR', true, 250, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBackupEtapeCAOTableMap
