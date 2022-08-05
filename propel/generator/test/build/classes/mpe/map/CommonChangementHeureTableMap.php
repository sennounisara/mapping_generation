<?php



/**
 * This class defines the structure of the 'changement_heure' table.
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
class CommonChangementHeureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChangementHeureTableMap';

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
        $this->setName('changement_heure');
        $this->setPhpName('CommonChangementHeure');
        $this->setClassname('CommonChangementHeure');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('date_debut_zone', 'DateDebutZone', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addPrimaryKey('date_fin_zone', 'DateFinZone', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('decalage', 'Decalage', 'CHAR', true, 3, '0');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChangementHeureTableMap
