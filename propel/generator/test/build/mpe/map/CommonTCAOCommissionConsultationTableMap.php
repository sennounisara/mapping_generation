<?php



/**
 * This class defines the structure of the 't_CAO_Commission_Consultation' table.
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
class CommonTCAOCommissionConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOCommissionConsultationTableMap';

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
        $this->setName('t_CAO_Commission_Consultation');
        $this->setPhpName('CommonTCAOCommissionConsultation');
        $this->setClassname('CommonTCAOCommissionConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_commission_consultation', 'IdCommissionConsultation', 'BIGINT', true, null, null);
        $this->addForeignKey('id_commission', 'IdCommission', 'BIGINT', 't_CAO_Commission', 'id_commission', true, null, null);
        $this->addColumn('ref_consultation', 'RefConsultation', 'VARCHAR', true, 255, null);
        $this->addColumn('ref_libre', 'RefLibre', 'VARCHAR', true, 50, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, null);
        $this->addColumn('intitule', 'Intitule', 'CLOB', true, null, null);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, 10, null);
        $this->addColumn('id_categorie', 'IdCategorie', 'TINYINT', true, null, null);
        $this->addColumn('service_gestionnaire', 'ServiceGestionnaire', 'VARCHAR', true, 255, null);
        $this->addColumn('id_service_gestionnaire', 'IdServiceGestionnaire', 'INTEGER', true, 10, null);
        $this->addColumn('service_associe', 'ServiceAssocie', 'VARCHAR', true, 255, null);
        $this->addColumn('id_service_associe', 'IdServiceAssocie', 'INTEGER', true, 10, null);
        $this->addColumn('date_cloture', 'DateCloture', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_mise_en_ligne', 'DateMiseEnLigne', 'TIMESTAMP', true, null, null);
        $this->addColumn('id_consultation', 'IdConsultation', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCAOCommission', 'CommonTCAOCommission', RelationMap::MANY_TO_ONE, array('id_commission' => 'id_commission', ), null, null);
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), null, null);
        $this->addRelation('CommonTCAOOrdreDePassage', 'CommonTCAOOrdreDePassage', RelationMap::ONE_TO_MANY, array('id_commission_consultation' => 'id_commission_consultation', ), null, null, 'CommonTCAOOrdreDePassages');
    } // buildRelations()

} // CommonTCAOCommissionConsultationTableMap
