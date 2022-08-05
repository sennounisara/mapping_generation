<?php



/**
 * This class defines the structure of the 'Ligne_DA' table.
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
class CommonLigneDATableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonLigneDATableMap';

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
        $this->setName('Ligne_DA');
        $this->setPhpName('CommonLigneDA');
        $this->setClassname('CommonLigneDA');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Num_ordre', 'NumOrdre', 'VARCHAR', false, 100, null);
        $this->addColumn('code_article_specifique', 'CodeArticleSpecifique', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_article_specifique', 'LibelleArticleSpecifique', 'VARCHAR', false, 255, null);
        $this->addColumn('detail_article_specifique', 'DetailArticleSpecifique', 'VARCHAR', false, 255, null);
        $this->addColumn('quantite', 'Quantite', 'INTEGER', false, null, null);
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 100, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'VARCHAR', false, 100, null);
        $this->addColumn('Montant_total', 'MontantTotal', 'VARCHAR', false, 100, null);
        $this->addColumn('quantite_min', 'QuantiteMin', 'INTEGER', false, null, null);
        $this->addColumn('quantite_max', 'QuantiteMax', 'INTEGER', false, null, null);
        $this->addForeignKey('DA_Consultation_ref', 'DaConsultationRef', 'INTEGER', 'DA_Consultation', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonDAConsultation', 'CommonDAConsultation', RelationMap::MANY_TO_ONE, array('DA_Consultation_ref' => 'id', ), null, null);
    } // buildRelations()

} // CommonLigneDATableMap
