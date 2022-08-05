<?php



/**
 * This class defines the structure of the 't_CAO_Seance' table.
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
class CommonTCAOSeanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCAOSeanceTableMap';

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
        $this->setName('t_CAO_Seance');
        $this->setPhpName('CommonTCAOSeance');
        $this->setClassname('CommonTCAOSeance');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance', 'IdSeance', 'BIGINT', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_commission', 'IdCommission', 'BIGINT', true, 11, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, null);
        $this->addColumn('lieu', 'Lieu', 'VARCHAR', true, 200, null);
        $this->addColumn('salle', 'Salle', 'VARCHAR', true, 100, null);
        $this->addColumn('id_ref_val_statut', 'IdRefValStatut', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCAOSeanceTableMap
