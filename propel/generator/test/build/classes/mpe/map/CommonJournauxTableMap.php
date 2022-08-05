<?php



/**
 * This class defines the structure of the 'Journaux' table.
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
class CommonJournauxTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonJournauxTableMap';

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
        $this->setName('Journaux');
        $this->setPhpName('CommonJournaux');
        $this->setClassname('CommonJournaux');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_JOURNAL', 'IdJournal', 'INTEGER', true, 20, null);
        $this->addPrimaryKey('ORGANISME', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('ID_CENTRALE', 'IdCentrale', 'INTEGER', true, 20, 0);
        $this->addColumn('NOM_JOURNAL', 'NomJournal', 'VARCHAR', false, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonJournauxTableMap
