<?php



/**
 * This class defines the structure of the 't_lot_technique' table.
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
class CommonTLotTechniqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTLotTechniqueTableMap';

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
        $this->setName('t_lot_technique');
        $this->setPhpName('CommonTLotTechnique');
        $this->setClassname('CommonTLotTechnique');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_lot_technique', 'IdLotTechnique', 'INTEGER', true, null, null);
        $this->addForeignKey('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', 't_donnee_complementaire', 'id_donnee_complementaire', true, null, null);
        $this->addColumn('numero_lot', 'NumeroLot', 'VARCHAR', false, 3, null);
        $this->addColumn('intitule_lot', 'IntituleLot', 'VARCHAR', false, 1000, null);
        $this->addColumn('principal', 'Principal', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDonneeComplementaire', 'CommonTDonneeComplementaire', RelationMap::MANY_TO_ONE, array('id_donnee_complementaire' => 'id_donnee_complementaire', ), null, null);
        $this->addRelation('CommonTLotTechniqueHasTranche', 'CommonTLotTechniqueHasTranche', RelationMap::ONE_TO_MANY, array('id_lot_technique' => 'id_lot_technique', ), null, null, 'CommonTLotTechniqueHasTranches');
    } // buildRelations()

} // CommonTLotTechniqueTableMap
