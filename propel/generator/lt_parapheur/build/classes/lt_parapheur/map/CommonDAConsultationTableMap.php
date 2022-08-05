<?php



/**
 * This class defines the structure of the 'DA_Consultation' table.
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
class CommonDAConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDAConsultationTableMap';

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
        $this->setName('DA_Consultation');
        $this->setPhpName('CommonDAConsultation');
        $this->setClassname('CommonDAConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('reference_utilisateur', 'ReferenceUtilisateur', 'VARCHAR', false, 255, null);
        $this->addColumn('Societe', 'Societe', 'VARCHAR', false, 255, null);
        $this->addColumn('objet', 'Objet', 'CLOB', false, null, null);
        $this->addColumn('type_procedure', 'TypeProcedure', 'VARCHAR', false, 100, null);
        $this->addColumn('type_marche', 'TypeMarche', 'VARCHAR', false, 100, null);
        $this->addColumn('satut_AO', 'SatutAo', 'VARCHAR', false, 100, null);
        $this->addColumn('datefin', 'Datefin', 'TIMESTAMP', false, null, null);
        $this->addColumn('datemiseenligne', 'Datemiseenligne', 'TIMESTAMP', false, null, null);
        $this->addColumn('caution_provisoire', 'CautionProvisoire', 'VARCHAR', false, 255, null);
        $this->addColumn('Principale', 'Principale', 'CHAR', false, null, null);
        $this->getColumn('Principale', false)->setValueSet(array (
  0 => 'oui',
  1 => 'non',
));
        $this->addColumn('lot', 'Lot', 'INTEGER', false, 5, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', false, null, null);
        $this->addColumn('CREATE_AT', 'CreateAt', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('consultation_ref' => 'reference', ), null, null);
        $this->addRelation('CommonLigneDA', 'CommonLigneDA', RelationMap::ONE_TO_MANY, array('id' => 'DA_Consultation_ref', ), null, null, 'CommonLigneDAs');
    } // buildRelations()

} // CommonDAConsultationTableMap
