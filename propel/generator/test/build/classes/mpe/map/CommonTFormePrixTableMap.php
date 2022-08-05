<?php



/**
 * This class defines the structure of the 't_forme_prix' table.
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
class CommonTFormePrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTFormePrixTableMap';

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
        $this->setName('t_forme_prix');
        $this->setPhpName('CommonTFormePrix');
        $this->setClassname('CommonTFormePrix');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_forme_prix', 'IdFormePrix', 'INTEGER', true, null, null);
        $this->addColumn('forme_prix', 'FormePrix', 'CHAR', true, null, null);
        $this->getColumn('forme_prix', false)->setValueSet(array (
  0 => 'PU',
  1 => 'PF',
  2 => 'PM',
));
        $this->addColumn('pf_estimation_ht', 'PfEstimationHt', 'DECIMAL', false, 30, null);
        $this->addColumn('pf_estimation_ttc', 'PfEstimationTtc', 'DECIMAL', false, 30, null);
        $this->addColumn('pf_date_valeur', 'PfDateValeur', 'DATE', false, null, null);
        $this->addColumn('id_min_max', 'IdMinMax', 'INTEGER', false, null, null);
        $this->addColumn('modalite', 'Modalite', 'CHAR', false, null, null);
        $this->getColumn('modalite', false)->setValueSet(array (
  0 => 'bon_commande',
  1 => 'quantite_definie',
));
        $this->addColumn('pu_min', 'PuMin', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_max', 'PuMax', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_min_ttc', 'PuMinTtc', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_max_ttc', 'PuMaxTtc', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_estimation_ht', 'PuEstimationHt', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_estimation_ttc', 'PuEstimationTtc', 'DECIMAL', false, 30, null);
        $this->addColumn('pu_date_valeur', 'PuDateValeur', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTTranche', 'CommonTTranche', RelationMap::ONE_TO_MANY, array('id_forme_prix' => 'id_forme_prix', ), null, null, 'CommonTTranches');
    } // buildRelations()

} // CommonTFormePrixTableMap
