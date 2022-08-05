<?php



/**
 * This class defines the structure of the 'Criteres_Evaluation' table.
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
class CommonCriteresEvaluationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCriteresEvaluationTableMap';

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
        $this->setName('Criteres_Evaluation');
        $this->setPhpName('CommonCriteresEvaluation');
        $this->setClassname('CommonCriteresEvaluation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, null);
        $this->addColumn('Type_Critere', 'TypeCritere', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCriteresEvaluationTableMap
