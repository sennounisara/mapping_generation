<?php



/**
 * This class defines the structure of the 'Faq_Entreprise' table.
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
class CommonFaqEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonFaqEntrepriseTableMap';

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
        $this->setName('Faq_Entreprise');
        $this->setPhpName('CommonFaqEntreprise');
        $this->setClassname('CommonFaqEntreprise');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('question', 'Question', 'LONGVARCHAR', true, null, null);
        $this->addColumn('question_fr', 'QuestionFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('question_en', 'QuestionEn', 'LONGVARCHAR', true, null, null);
        $this->addColumn('question_es', 'QuestionEs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reponse', 'Reponse', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reponse_fr', 'ReponseFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reponse_en', 'ReponseEn', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reponse_es', 'ReponseEs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('question_it', 'QuestionIt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reponse_it', 'ReponseIt', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonFaqEntrepriseTableMap
