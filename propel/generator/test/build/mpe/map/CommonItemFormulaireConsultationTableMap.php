<?php



/**
 * This class defines the structure of the 'ItemFormulaireConsultation' table.
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
class CommonItemFormulaireConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonItemFormulaireConsultationTableMap';

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
        $this->setName('ItemFormulaireConsultation');
        $this->setPhpName('CommonItemFormulaireConsultation');
        $this->setClassname('CommonItemFormulaireConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('idFormulaireConsultation', 'Idformulaireconsultation', 'INTEGER', 'ConsultationFormulaire', 'id', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('commentaire_acheteur', 'CommentaireAcheteur', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'CHAR', true, null, '0');
        $this->getColumn('prix_unitaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('quantite', 'Quantite', 'VARCHAR', true, 11, null);
        $this->addColumn('precision_entreprise', 'PrecisionEntreprise', 'INTEGER', true, 1, null);
        $this->addColumn('type_reponse', 'TypeReponse', 'VARCHAR', true, 30, null);
        $this->addColumn('obligatoire', 'Obligatoire', 'CHAR', true, null, '1');
        $this->getColumn('obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('numero', 'Numero', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultationFormulaire', 'CommonConsultationFormulaire', RelationMap::MANY_TO_ONE, array('idFormulaireConsultation' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEnveloppeItemFormulaireConsultationValues', 'CommonEnveloppeItemFormulaireConsultationValues', RelationMap::ONE_TO_MANY, array('id' => 'idItemFormulaireConsultation', ), null, null, 'CommonEnveloppeItemFormulaireConsultationValuess');
        $this->addRelation('CommonReponseInscritItemFormulaireConsultationValues', 'CommonReponseInscritItemFormulaireConsultationValues', RelationMap::ONE_TO_MANY, array('id' => 'idItemFormulaireConsultation', ), null, null, 'CommonReponseInscritItemFormulaireConsultationValuess');
    } // buildRelations()

} // CommonItemFormulaireConsultationTableMap
