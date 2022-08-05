<?php



/**
 * This class defines the structure of the 'EnveloppeCritereEvaluation' table.
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
class CommonEnveloppeCritereEvaluationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEnveloppeCritereEvaluationTableMap';

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
        $this->setName('EnveloppeCritereEvaluation');
        $this->setPhpName('CommonEnveloppeCritereEvaluation');
        $this->setClassname('CommonEnveloppeCritereEvaluation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('idCritereEvaluation', 'Idcritereevaluation', 'INTEGER', true, null, null);
        $this->addColumn('rejet', 'Rejet', 'INTEGER', true, null, null);
        $this->addColumn('statut_critere_evaluation', 'StatutCritereEvaluation', 'INTEGER', true, null, null);
        $this->addColumn('note_totale', 'NoteTotale', 'VARCHAR', true, 30, null);
        $this->addColumn('commentaire_total', 'CommentaireTotal', 'VARCHAR', true, 100, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('id_enveloppe', 'IdEnveloppe', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnveloppeCritereEvaluationTableMap
