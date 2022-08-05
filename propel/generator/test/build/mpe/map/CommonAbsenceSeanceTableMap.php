<?php



/**
 * This class defines the structure of the 'absence_seance' table.
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
class CommonAbsenceSeanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAbsenceSeanceTableMap';

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
        $this->setName('absence_seance');
        $this->setPhpName('CommonAbsenceSeance');
        $this->setClassname('CommonAbsenceSeance');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'INTEGER', true, null, null);
        $this->addColumn('id_membre_commission', 'IdMembreCommission', 'INTEGER', true, null, null);
        $this->addColumn('id_membre_remplacant', 'IdMembreRemplacant', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAbsenceSeanceTableMap
