<?php



/**
 * This class defines the structure of the 'EnveloppeItemCritereEvaluation' table.
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
class CommonEnveloppeItemCritereEvaluationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEnveloppeItemCritereEvaluationTableMap';

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
        $this->setName('EnveloppeItemCritereEvaluation');
        $this->setPhpName('CommonEnveloppeItemCritereEvaluation');
        $this->setClassname('CommonEnveloppeItemCritereEvaluation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('idItemCritereEvaluation', 'Iditemcritereevaluation', 'INTEGER', true, null, null);
        $this->addColumn('idEnveloppeCritereEvaluation', 'Idenveloppecritereevaluation', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prix', 'Prix', 'CHAR', true, null, '0');
        $this->getColumn('prix', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('quantite', 'Quantite', 'INTEGER', false, null, null);
        $this->addColumn('ponderation', 'Ponderation', 'INTEGER', false, null, null);
        $this->addColumn('numero', 'Numero', 'INTEGER', true, null, null);
        $this->addColumn('regle_evaluation', 'RegleEvaluation', 'INTEGER', true, 1, null);
        $this->addColumn('type_item', 'TypeItem', 'INTEGER', true, null, null);
        $this->addColumn('reponse_fournisseur', 'ReponseFournisseur', 'VARCHAR', true, 100, null);
        $this->addColumn('note', 'Note', 'VARCHAR', true, 30, null);
        $this->addColumn('commentaire_acheteur', 'CommentaireAcheteur', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnveloppeItemCritereEvaluationTableMap
