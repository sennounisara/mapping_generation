<?php



/**
 * This class defines the structure of the 't_tranche' table.
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
class CommonTTrancheTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTTrancheTableMap';

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
        $this->setName('t_tranche');
        $this->setPhpName('CommonTTranche');
        $this->setClassname('CommonTTranche');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tranche', 'IdTranche', 'INTEGER', true, null, null);
        $this->addForeignKey('id_forme_prix', 'IdFormePrix', 'INTEGER', 't_forme_prix', 'id_forme_prix', false, null, null);
        $this->addForeignKey('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', 't_donnee_complementaire', 'id_donnee_complementaire', false, null, null);
        $this->addColumn('nature_tranche', 'NatureTranche', 'CHAR', false, null, null);
        $this->getColumn('nature_tranche', false)->setValueSet(array (
  0 => 'TF',
  1 => 'TC',
));
        $this->addColumn('code_tranche', 'CodeTranche', 'INTEGER', false, null, null);
        $this->addColumn('intitule_tranche', 'IntituleTranche', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDonneeComplementaire', 'CommonTDonneeComplementaire', RelationMap::MANY_TO_ONE, array('id_donnee_complementaire' => 'id_donnee_complementaire', ), null, null);
        $this->addRelation('CommonTFormePrix', 'CommonTFormePrix', RelationMap::MANY_TO_ONE, array('id_forme_prix' => 'id_forme_prix', ), null, null);
        $this->addRelation('CommonTLotTechniqueHasTranche', 'CommonTLotTechniqueHasTranche', RelationMap::ONE_TO_MANY, array('id_tranche' => 'id_tranche', ), null, null, 'CommonTLotTechniqueHasTranches');
    } // buildRelations()

} // CommonTTrancheTableMap
