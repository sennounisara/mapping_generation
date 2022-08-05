<?php



/**
 * This class defines the structure of the 'resultat_analyse_decision' table.
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
class CommonResultatAnalyseDecisionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonResultatAnalyseDecisionTableMap';

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
        $this->setName('resultat_analyse_decision');
        $this->setPhpName('CommonResultatAnalyseDecision');
        $this->setClassname('CommonResultatAnalyseDecision');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('date_decision', 'DateDecision', 'VARCHAR', false, 20, null);
        $this->addColumn('type_decision', 'TypeDecision', 'VARCHAR', false, 200, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('autre_type_decision', 'AutreTypeDecision', 'LONGVARCHAR', false, null, null);
        $this->addColumn('autre', 'Autre', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', false, null, null);
        $this->addColumn('justificatif', 'Justificatif', 'CLOB', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('type_depot', 'TypeDepot', 'CHAR', true, null, null);
        $this->getColumn('type_depot', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonResultatAnalyseDecisionTableMap
