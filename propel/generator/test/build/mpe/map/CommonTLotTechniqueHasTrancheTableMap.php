<?php



/**
 * This class defines the structure of the 't_lot_technique_has_tranche' table.
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
class CommonTLotTechniqueHasTrancheTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTLotTechniqueHasTrancheTableMap';

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
        $this->setName('t_lot_technique_has_tranche');
        $this->setPhpName('CommonTLotTechniqueHasTranche');
        $this->setClassname('CommonTLotTechniqueHasTranche');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('id_lot_technique', 'IdLotTechnique', 'INTEGER' , 't_lot_technique', 'id_lot_technique', true, null, null);
        $this->addForeignPrimaryKey('id_tranche', 'IdTranche', 'INTEGER' , 't_tranche', 'id_tranche', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTLotTechnique', 'CommonTLotTechnique', RelationMap::MANY_TO_ONE, array('id_lot_technique' => 'id_lot_technique', ), null, null);
        $this->addRelation('CommonTTranche', 'CommonTTranche', RelationMap::MANY_TO_ONE, array('id_tranche' => 'id_tranche', ), null, null);
    } // buildRelations()

} // CommonTLotTechniqueHasTrancheTableMap
