<?php



/**
 * This class defines the structure of the 'DecisionLot' table.
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
class CommonDecisionLotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDecisionLotTableMap';

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
        $this->setName('DecisionLot');
        $this->setPhpName('CommonDecisionLot');
        $this->setClassname('CommonDecisionLot');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_decision_lot', 'IdDecisionLot', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('id_type_decision', 'IdTypeDecision', 'INTEGER', true, null, 0);
        $this->addColumn('autre_a_preciser', 'AutreAPreciser', 'VARCHAR', false, 100, null);
        $this->addColumn('date_decision', 'DateDecision', 'DATE', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_maj', 'DateMaj', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDecisionLotTableMap
