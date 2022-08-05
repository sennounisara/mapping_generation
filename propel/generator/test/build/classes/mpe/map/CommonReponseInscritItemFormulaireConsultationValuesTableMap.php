<?php



/**
 * This class defines the structure of the 'ReponseInscritItemFormulaireConsultationValues' table.
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
class CommonReponseInscritItemFormulaireConsultationValuesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReponseInscritItemFormulaireConsultationValuesTableMap';

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
        $this->setName('ReponseInscritItemFormulaireConsultationValues');
        $this->setPhpName('CommonReponseInscritItemFormulaireConsultationValues');
        $this->setClassname('CommonReponseInscritItemFormulaireConsultationValues');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('idItemFormulaireConsultation', 'Iditemformulaireconsultation', 'INTEGER', true, null, null);
        $this->addColumn('idReponseInscritItemFormulaireConsultation', 'Idreponseinscrititemformulaireconsultation', 'INTEGER', true, null, null);
        $this->addColumn('valeur', 'Valeur', 'VARCHAR', true, 100, null);
        $this->addColumn('type_valeur', 'TypeValeur', 'INTEGER', true, null, null);
        $this->addColumn('precision_entreprise', 'PrecisionEntreprise', 'VARCHAR', true, 100, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'VARCHAR', true, 30, null);
        $this->addColumn('tva', 'Tva', 'VARCHAR', true, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReponseInscritItemFormulaireConsultationValuesTableMap
